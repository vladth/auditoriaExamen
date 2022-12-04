<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use OwenIt\Auditing\Contracts\Auditable;
class User extends Authenticatable implements Auditable
{
    use Notifiable;
    use \OwenIt\Auditing\Auditable;
    protected $fillable = ['name', 'email', 'password','level','active_user','last_name','address','province','phone','nit','status','lng','lat','country'];
    protected $hidden = ['password', 'remember_token',];
}
