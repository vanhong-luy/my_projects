<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'rent4u_contact';
    protected $fillable = ['name', 'email', 'phone', 'message'];
    public $timestamps = false;
}
