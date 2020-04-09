<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mv_animal';
    protected $primaryKey = 'sid';
    const CREATED_AT = 'ctime';
    const UPDATED_AT = 'mtime';
    protected $fillable = [
        'name',
        'name_en',
        'sort_order',
        'image',
        'date',
        'tag',
        'size',
        'file_size',
        'version'

    ];
}
