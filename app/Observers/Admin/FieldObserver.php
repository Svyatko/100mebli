<?php

namespace App\Observers\Admin;

use App\Models\Field;
use App\Observers\BaseObserver;

class FieldObserver extends BaseObserver
{

    /**
     * Handle the field "created" event.
     *
     * @param  \App\Models\Field  $field
     * @return void
     */
    public function created(Field $field)
    {
        $data = $this->request;

        $field->fill([
            'uk' => [
                'name' => $data['title_uk'],
                'values' => json_encode($data['values']['uk'])
            ],
            'ru' => [
                'name' => $data['title_ru'],
                'values' => json_encode($data['values']['ru'])
            ],
            'en' => [
                'name' => $data['title_en'],
                'values' => json_encode($data['values']['en'])
            ],
        ]);
    }

    /**
     * Handle the field "updated" event.
     *
     * @param  \App\Models\Field  $field
     * @return void
     */
    public function updated(Field $field)
    {
        $data = $this->request;

        $field->translate('uk')->name = $data['title_uk'];
        $field->translate('uk')->values = json_encode($data['values']['uk']);

        $field->translate('ru')->name = $data['title_ru'];
        $field->translate('ru')->values = json_encode($data['values']['ru']);

        $field->translate('en')->name = $data['title_en'];
        $field->translate('en')->values = json_encode($data['values']['en']);
    }

    /**
     * Handle the field "deleted" event.
     *
     * @param  \App\Models\Field  $field
     * @return void
     */
    public function deleted(Field $field)
    {
        //
    }

    /**
     * Handle the field "restored" event.
     *
     * @param  \App\Models\Field  $field
     * @return void
     */
    public function restored(Field $field)
    {
        //
    }

    /**
     * Handle the field "force deleted" event.
     *
     * @param  \App\Models\Field  $field
     * @return void
     */
    public function forceDeleted(Field $field)
    {
        //
    }
}
