<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Video
 * @package App\Models
 * @version September 3, 2016, 7:04 am UTC
 */
class Video extends Model
{

    public $table = 'videos';
    


    public $fillable = [
        'title',
        'description',
        'video_url',
        'thumb_picture_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'video_url' => 'string',
        'thumb_picture_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
