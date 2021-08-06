<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'title_post', 'short_desc', 'desc', 'image', 'post_category_id','post_view','date'
    ];
    protected $primaryKey = 'id_post';
    protected $table = 'posts'; 


    public function category(){
    	return $this->belongsTo('App\CategoryPost','post_category_id');
    }
}
