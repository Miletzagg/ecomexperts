<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'articles';

    public $primaryKey = 'id';

    protected $fillable = [
        'title',
        'price',
        'status',
        'qty',
    ];
}
