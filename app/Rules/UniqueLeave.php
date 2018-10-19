<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Validator;

class UniqueLeave implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
       Validator::extend('UniqueLeave', function ($attribute, $value, $parameters, $validator) {
            $count = DB::table('leave_managements')->where('user_id', $value)
                                        ->where('start_date', $parameters[0])
                                        ->count();
            return $count === 0;
});
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
