<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function project_donation(){
        return $this->hasMany(ProjectDonation::class, "project_id");
    }

}
