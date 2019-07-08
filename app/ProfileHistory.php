<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'profile_id' => 'required',
        'name'       => 'required',
        'gender'       => 'required',
        'hobby'       => 'required',
        'introduction'       => 'required',
        'edited_at' => 'required',
    );
}
