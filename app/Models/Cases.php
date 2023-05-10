<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $table = 'cases';

    protected $fillable = [
        'needy_name',
        'needy_contact',
        'needy_address',
        'title',
        'category',
        'amount',
        'description',
        'status',
        'image',
        'start_date',
        'end_date',
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
        'amount',
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
        'amount',
        'status',
    ];

    public function case_donation()
    {
        return $this->hasMany(CaseDonation::class, "case_id");
    }
}
