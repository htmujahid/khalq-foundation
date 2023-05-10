<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDonation extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'donor_id',
        'amount',
        'account',
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
        'project_id',
        'donor_id',
        'amount',
        'account'
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'project_id',
        'donor_id',
        'amount',
        'account'
    ];
}
