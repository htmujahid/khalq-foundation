<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;
    protected $table = 'cases';
    public function case_donation(){
        return $this->hasMany(CaseDonation::class, "case_id");
    }
}
