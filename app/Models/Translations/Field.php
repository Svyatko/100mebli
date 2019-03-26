<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = ['name', 'values', 'locale'];
    protected $table = 'field_translations';

    public function getValuesAttribute($value) {
        return json_decode($value);
    }
}
