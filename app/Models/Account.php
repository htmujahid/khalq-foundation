<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Account extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $fillable = [
        'bank_name',
        'account_name',
        'account_number',
        'status',
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
        'bank_name',
        'account_number',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'bank_name',
        'account_number',
    ];
}
