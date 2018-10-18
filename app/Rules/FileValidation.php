<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FileValidation implements Rule
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

    public function passes($attribute, $value)
    {
        $file = $value => 'mimes:pdf,docx';
        if($file){
            return true;
        }
    }

    public function message()
    {
        return 'The File must be PDF or Docx';
    }
}
