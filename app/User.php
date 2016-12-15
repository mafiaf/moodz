<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

public function setNameAttribute($value)
  {
  $this->attributes['name'] = ucfirst($value);
  //Dit zorgt ervoor dat de naam automatisch met hoofdletter begint bij het aanmaken van een account. (Mutator)
  }

public function setPasswordAttribute($value)
  {
  $this->attributes['password'] = bcrypt($value);
  //encrypt wachtwoord. Beter om alles in User te hebben dan Controllers.
  }
  public function getNameAttribute($value)
  {
    return "user: " . $value;
    return strtoupper($value);
  }
  public function getEmailAttribute($value)
  {
    return strtok($value, '@');
  } // wanneer dit weggehaald wordt, toont die alleen de e-mail en niet de gebruikersnaam.
}
