<?php

namespace App\Jobs\Admin;

use App\Models\Item;
use App\Services\StoreImageToDisk;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SaveImageToItem implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $item;
    public $saveImageToItem;

    /**
     * Create a new job instance.
     *
     * @param Item $item
     * @return void
     */
    public function __construct(Item $item)
    {
        $this->item = $item;
        $this->saveImageToItem = new StoreImageToDisk();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $files = request()->all()['files'];
        $item = $this->item;

        foreach ($files as $file) {
            $item->images()->create($this->saveImageToItem->store($file));
        }
    }
}
