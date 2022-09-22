<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table='books';
    protected $fillable=['book_name_en' ,'book_name_ar','book_author_name_ar'
        ,'book_author_name_en','book_author_decs_ar','book_author_decs_en',
        'book_date','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

}
