<?php

namespace App\Jobs\Admin;

use App\Models\Item;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AssignFieldValueToItem implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $item;
    private $request;

    /**
     * Create a new job instance.
     *
     * @param Item $item
     * @return void
     */
    public function __construct(Item $item)
    {
        $this->item = $item;
        $request = request()->except('files');
        unset($request['_token']);
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $item = $this->item;
        $fields = array();

        $request = $this->request;

        foreach ($request as $key => $value) {
            if(preg_match('/(field_)/', $key)) {
                $id = explode('_', $key)[1];
                $fields[$id]['value'] = json_encode($value);
            }
        }

        $item->fields()->sync($fields);
    }
}
