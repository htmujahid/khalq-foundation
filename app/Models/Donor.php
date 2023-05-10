<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;
    public function case_donation(){
        return $this->hasMany(CaseDonation::class, "donor_id");
    }
    public function project_donation(){
        return $this->hasMany(ProjectDonation::class, "donor_id");
    }
}
