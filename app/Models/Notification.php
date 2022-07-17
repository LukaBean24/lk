<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory,HasTranslations;

    protected $guarded = ['id'];

    public $translatable = ['body'];
}
