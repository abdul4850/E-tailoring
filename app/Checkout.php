<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = ['FirstName', 'LastName', 'CompanyName', 'Country', 'StreetAddress', 'Postcode', 'City', 'EmailAddress', 'Phone'];
}
