<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Vacancy extends Model
{
    use HasFactory , HasTranslations;

    public $translatable = ['body','slug', 'title'];

    protected $guarded = ['id'];
}
