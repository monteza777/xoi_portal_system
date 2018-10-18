<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
	// protected $guarded = ['id'];
	protected $fillable = ['first_name','middle_name','last_name','email_address','home_address','age','contact_number',
							'postal_code','qualification','education_summary','birthday','source','work_experience'
							,'skill_set','has_images'];
    public function candidate_details(){
    	return $this->hasMany(CandidatesDetail::class);
    }
}