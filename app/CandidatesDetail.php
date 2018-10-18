<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidatesDetail extends Model
{
	protected $fillable = ['company_name','designation','date_from','date_to','candidate_id',];

    public function candidate(){
    	return $this->belongsTo(Candidate::class,'candidate_id');
    }
}
