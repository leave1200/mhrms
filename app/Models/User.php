<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
   protected $table = 'users';
   protected $primaryKey = 'id';
   protected $allowFields = ['name', 'username', 'email', 'password', 'picture', 'bio'];
}
