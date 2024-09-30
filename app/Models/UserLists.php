<?php
namespace App\Models;
use CodeIgniter\Model;

class UserLists extends Model
{
    protected $table = 'tbl_users';
    protected $primaryKey = 'userID';
    protected $allowedFields = [
        'userID',
        'Fname',
        'Lname',
        'Mi',
        'Bdate',
        'Gender',
        'Address',
        'ContactNo',
        'Email',
        'Username',
        'Password',
        'Role',
        'STATUS'
        
    ];
}
?>