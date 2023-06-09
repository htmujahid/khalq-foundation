<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseDonation extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_id',
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
        'case_id',
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
        'case_id',
        'donor_id',
        'amount',
        'account'
    ];
}
