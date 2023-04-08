<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Project extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
        'title',
        'description',
        'outcome',
        'image',
        'link',
        'start_date',
        'end_date',
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
        'title',
        'outcome',
        'status',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'title',
        'outcome',
        'status',
    ];

    public function project_donation(){
        return $this->hasMany(ProjectDonation::class);
    }
    
}
