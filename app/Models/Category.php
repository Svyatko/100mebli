<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Category extends Model
{
    use Translatable;

    protected $fillable = ['title', 'parent_id'];

    public $translationModel = \App\Models\Translations\Category::class;
    public $translatedAttributes = ['name'];

    protected $with = ['fields'];

    public function fields() {
        return $this->belongsToMany('App\Models\Field');
    }

    public function fieldsArray() {
        return $this->fields()->get()->pluck('id');
    }

    public function items() {
        return $this->hasMany('App\Models\Item');
    }
}
