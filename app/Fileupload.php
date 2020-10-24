<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fileupload extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ='fileuploads';
    protected $fillable = [
        'owner', 'filename', 'file', 'date',
    ];
}
