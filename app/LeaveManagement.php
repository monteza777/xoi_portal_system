<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveManagement extends Model
{
    protected $fillable = ['user_id','full_name','start_date','end_date','reason','leave_type'];

    public function user(){
    	return $this->belongsTo(User::class,'user_id');
    }
}
