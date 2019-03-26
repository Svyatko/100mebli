<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Field extends Model
{
    use Translatable;

    protected $fillable = ['title'];
    protected $with = ['translations'];

    public $translationModel = Translations\Field::class;
    public $translatedAttributes = ['name', 'values'];

    public function categories() {
        return $this->belongsToMany('App\Models\Category');
    }
}
