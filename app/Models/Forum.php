<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content'
    ];
    /**
     * @var mixed
     */


    /**
     * @var mixed
     */

    public function Forum(){
        return $this->belongsToMany(Comment::class);
    }
}
