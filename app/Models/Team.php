<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Team extends Model
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

}
