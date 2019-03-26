<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    protected $fillable = ['path'];
    private $path_absolute = '/uploads/items';

    public function getPathAttribute($value) {
        return "$this->path_absolute/$value";
    }

    public static function boot() {
        parent::boot();

        self::deleting(function ($image) {
            Storage::delete($image->path);
        });
    }
}
