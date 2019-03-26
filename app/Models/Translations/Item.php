<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['title', 'description', 'characteristic', 'locale'];
    protected $table = 'item_translations';
}
