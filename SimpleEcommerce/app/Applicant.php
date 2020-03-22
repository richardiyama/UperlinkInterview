<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
   
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'surname',
        'email',
        'image_name',
        'resume_file_name',
        'phonenumber',
        'cover_letter',
              
    ];


    
}
