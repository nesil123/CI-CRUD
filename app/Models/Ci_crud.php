<?php
namespace App\Models;
use CodeIgniter\Model;

class Ci_crud extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username','password'];
}

?>