<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
   
    protected $table = "applicants";
    protected $fillable = [
        'surname', 'firstName', 'phone', 'photo', 'coverLetter', 'photo', 'cv', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
