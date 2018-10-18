<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;
use Hash;


class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['first_name','email','last_name','contact_number','position','join_date','has_images','email', 'password', 'remember_token', 'role_id'];
    protected $hidden = ['password', 'remember_token'];
    
    
    public static function boot()
    {
        parent::boot();

        User::observe(new \App\Observers\UserActionsObserver);
    }
    
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setRoleIdAttribute($input)
    {
        $this->attributes['role_id'] = $input ? $input : null;
    }
    
    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function leave_managements(){
        return $this->hasMany(LeaveManagement::class);
    }

    public function sendPasswordResetNotification($token){
       $this->notify(new ResetPassword($token));
    }

    public function getFullNameAttribute(){
    return $this->first_name . ' ' . $this->last_name;
    }
}