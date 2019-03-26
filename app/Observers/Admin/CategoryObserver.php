<?php

namespace App\Observers\Admin;

use App\Models\Category;
use App\Observers\BaseObserver;

class CategoryObserver extends BaseObserver
{
    /**
     * Handle the category "created" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function created(Category $category)
    {
        $data = $this->request;

        $category->fill([
            'uk' => [
                'name' => $data['title_uk'],
                'seo_meta_keys' => encodeIfIsset($data, 'seo_keys_uk'),
                'seo_meta_description' => $data['seo_description_uk'],
            ],
            'ru' => [
                'name' => $data['title_ru'],
                'seo_meta_keys' => encodeIfIsset($data, 'seo_keys_ru'),
                'seo_meta_description' => $data['seo_description_ru'],
            ],
            'en' => [
                'name' => $data['title_en'],
                'seo_meta_keys' => encodeIfIsset($data, 'seo_keys_en'),
                'seo_meta_description' => $data['seo_description_en'],
            ],
        ]);

        $category->fields()->attach($data['fields']);
    }

    /**
     * Handle the category "updated" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function updated(Category $category)
    {
        $data = $this->request;

        $category->translate('uk')->name = $data['title_uk'];
        $category->translate('uk')->seo_meta_keys = encodeIfIsset($data, 'seo_keys_uk');
        $category->translate('uk')->seo_meta_description = $data['seo_description_uk'];

        $category->translate('ru')->name = $data['title_ru'];
        $category->translate('ru')->seo_meta_keys = encodeIfIsset($data, 'seo_keys_ru');
        $category->translate('ru')->seo_meta_description = $data['seo_description_ru'];

        $category->translate('en')->name = $data['title_en'];
        $category->translate('en')->seo_meta_keys = encodeIfIsset($data, 'seo_keys_en');
        $category->translate('en')->seo_meta_description = $data['seo_description_en'];

        $category->fields()->sync($data['fields']);
    }

    /**
     * Handle the category "deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function deleted(Category $category)
    {
        //
    }

    /**
     * Handle the category "restored" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the category "force deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }
}
