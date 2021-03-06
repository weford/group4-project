<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Founder extends Model{

    protected $table = 'founders';

    protected $fillable = ['user_id', 'fname', 'lname','company_name', 'company_street',
        'company_city', 'company_state', 'company_zip', 'company_industry', 'company_mktcap'];

    public function userProfile(){
      return  $this->belongsTo('App\Models\User');
    }

    public function campaigns(){
      return  $this->hasMany('App\Models\Campaign')
          ->getEager();
    }

}
