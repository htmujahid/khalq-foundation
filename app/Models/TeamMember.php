<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class TeamMember extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $fillable = [
        'name',
        'gender',
        'contact',
        'email',
        'address',
        'image',
        'designation',
        'portfolio',
        'created_by',
        'updated_by'
    ];
    
    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name',
        'email',
        'contact',
        'address'
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name',
        'email',
        'contact',
        'address'
    ];

}
