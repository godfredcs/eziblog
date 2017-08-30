<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * The table it is connected to.
	 * 
	 * @var string
	 */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $guarded = [];

    /**
     * The relationship between posts and user.
     * 
     * @return [type] [description]
     */
    public function user() {
    	return $this->belongsTo(User::class);
    }
}
