<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'title_category'
    ];
    protected $primaryKey = 'id';
    protected $table = 'category_posts'; 
}
