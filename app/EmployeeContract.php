<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\LeaveManagement;

class EmployeeContract extends Model
{

    private $variable;

    protected $fillable = ['user_id','contract_date','contract_days','total_leaves_on_contract'];
    protected $dates = ['created_at','updated_at','contract_date'];
    
    public function __construct(){
        $this->variable;
    }

    public function user(){
    	return $this->belongsTo(User::class,'user_id');
    }

    public function getDaysSinceContractAttribute(){

          $contract_date = $this->contract_date;
          $datework = Carbon::parse($contract_date);
          $now = Carbon::now('Asia/Manila');

          $diffmonths = $datework->diffInMonths($now);
          $allocation = $diffmonths * 1.25;

          $this->variable = $allocation;

          $data = [
            'diffmonths' => $diffmonths,
            'allocation' => $allocation,
          ];

          return $data;
    }

    public function getLeavesTakenAttribute(){
        $id = $this->user_id;
        $emp_leaves = User::withCount('leave_managements')->find($id);

        $count = $emp_leaves->leave_managements_count;
        $balance = $this->variable - $count;
        
        return $data = ['count'=> $count, 'balance'=> $balance ];
    }
}
