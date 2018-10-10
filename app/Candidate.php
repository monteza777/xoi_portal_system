<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
	protected $guarded = ['id'];

    public function candidate_details(){
    	return $this->hasMany(CandidatesDetail::class);
    }
}