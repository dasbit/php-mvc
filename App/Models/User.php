<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use pmill\Auth\Interfaces\AuthUser;
use pmill\Auth\Password;

/**
 * User
 *
 * @package App\Models
 */
class User extends Model implements AuthUser
{
    protected $fillable = [
        'name', 'email', 'password'
    ];

    public function setPassword($password)
    {
        $passwordHelper = new Password();
        $this->password = $passwordHelper->hash($password);
    }

    public function setPasswordAttribute($password)
    {
        $this->setPassword($password);
    }

    public function getAuthId()
    {
        return $this->id;
    }

    public function getTwoFactorSecret()
    {
        return 'not realized';
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getAuthUsername()
    {
        return $this->name;
    }
}
