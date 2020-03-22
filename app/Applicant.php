<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
   
    protected $table = "applicants";
    protected $fillable = [
        'surname', 'fristName', 'phone', 'photograph', 'coverLetter', 'photo', 'cv', 'email',
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
