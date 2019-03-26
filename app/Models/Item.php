<?php

namespace App\Models;

use App\Scopes\ItemScope;
use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Item extends Model
{
    use Translatable;

    protected $fillable = ['name', 'amount', 'category_id'];

    public $translationModel = Translations\Item::class;
    public $translatedAttributes = ['title', 'characteristic', 'description'];
    protected $with = ['category', 'images'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ItemScope());
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function colors() {
        return $this->belongsToMany('App\Models\Color');
    }

    public function fields() {
        return $this->belongsToMany('App\Models\Field')->withPivot('value');
    }

    public function values() {
        return $this->fields()->pluck('value', 'fields.id');
    }

    public function images() {
        return $this->hasMany('App\Models\Image');
    }
}
