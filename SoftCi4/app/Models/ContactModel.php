<?php namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contactus';
    protected $primaryKey = 'row_id';
    protected $allowedFields = ['name','email','subject','message'];

}