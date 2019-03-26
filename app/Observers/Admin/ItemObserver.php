<?php

namespace App\Observers\Admin;

use App\Jobs\Admin\AssignFieldValueToItem;
use App\Models\Item;
use App\Observers\BaseObserver;
use App\Services\StoreImageToDisk;

class ItemObserver extends BaseObserver
{
    public $saveImageToItem;
    protected $request;

    public function __construct()
    {
        $this->saveImageToItem = new StoreImageToDisk();
        $this->request = request()->all();
    }

    /**
     * Handle the item "created" event.
     *
     * @param  \App\Models\Item $item
     * @return void
     */
    public function created(Item $item)
    {
        $request = $this->request;
        $files = $request['files'];

        $item->fill([
            'uk' => [
                'title' => $request['title_uk'],
                'characteristic' => $request['characteristic_uk'],
                'description' => $request['description_uk'],
            ],
            'ru' => [
                'title' => $request['title_ru'],
                'characteristic' => $request['characteristic_ru'],
                'description' => $request['description_ru'],
            ],
            'en' => [
                'title' => $request['title_en'],
                'characteristic' => $request['characteristic_en'],
                'description' => $request['description_en'],
            ],
        ]);

        $item->colors()->attach($request['colors']);

        foreach ($files as $file) {
            $item->images()->create([
                'path' => $this->saveImageToItem->store($file),
            ]);
        }

        dispatch(new AssignFieldValueToItem($item));
    }

    /**
     * Handle the item "updated" event.
     *
     * @param  \App\Models\Item $item
     * @return void
     */
    public function updated(Item $item)
    {
        $request = $this->request;

        $item->translate('uk')->title = $request['title_uk'];
        $item->translate('uk')->characteristic = $request['characteristic_uk'];
        $item->translate('uk')->description = $request['description_uk'];

        $item->translate('ru')->title = $request['title_ru'];
        $item->translate('ru')->characteristic = $request['characteristic_ru'];
        $item->translate('ru')->description = $request['description_ru'];

        $item->translate('en')->title = $request['title_en'];
        $item->translate('en')->characteristic = $request['characteristic_en'];
        $item->translate('en')->description = $request['description_en'];

        $item->colors()->sync($request['colors']);

        if (isset($request['files']) && $files = $request['files']) {
            foreach ($files as $file) {
                $item->images()->create([
                    'path' => $this->saveImageToItem->store($file),
                ]);
            }
        }

        dispatch(new AssignFieldValueToItem($item));
    }

    /**
     * Handle the item "deleted" event.
     *
     * @param  \App\Models\Item $item
     * @return void
     */
    public function deleted(Item $item)
    {
        //
    }

    /**
     * Handle the item "restored" event.
     *
     * @param  \App\Models\Item $item
     * @return void
     */
    public function restored(Item $item)
    {
        //
    }

    /**
     * Handle the item "force deleted" event.
     *
     * @param  \App\Models\Item $item
     * @return void
     */
    public function forceDeleted(Item $item)
    {
        //
    }
}
