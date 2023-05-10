<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;
    public function team_member_gtm(){
        return $this->hasOne(TeamMemberGTM::class, 'member_id');
    }
    public function team_member_am(){
        return $this->hasOne(TeamMemberAM::class, 'member_id');
    }
    public function team_member_ca(){
        return $this->hasOne(TeamMemberCA::class, 'member_id');
    }
}
