<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Donor extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $fillable = [
        'name',
        'contact',
        'created_by',
        'updated_by'
    ];

    /**
     * @return string
     */
    public function getFullAttribute(): string
    {
        return $this->attributes['id'] . ' - ' . $this->attributes['name'];
    }
    
    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name',
        'contact',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name',
        'contact',
    ];
}
