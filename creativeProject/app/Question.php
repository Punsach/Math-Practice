<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = [
        'id', 'content', 'level', 'answer'
    ];
    public function user()
    {
    	return $this->belongsToMany('\App\User');
    }
}
?>
