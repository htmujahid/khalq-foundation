<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDonation extends Model
{
    use HasFactory;
    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
}
