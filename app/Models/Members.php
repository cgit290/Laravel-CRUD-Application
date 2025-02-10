<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $table = "members";
    protected $primaryKey = "member_id";

    public function setMemberNameAttribute($value){
        $this->attributes['member_name'] = ucwords($value);
    }

    public function getDobAttribute($value){
        return date("d-M-Y",strtotime($value));
    }
}
