<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	public $timestamps = false;
    protected $fillable = ['FirstName','LastName','Gender','Age','Street','Building','PostalCode','Region','City','Email','Phone','Mobile','ContactType','Description','BillingInformation','Created'];
}