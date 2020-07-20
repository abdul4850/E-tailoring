<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = ['FirstName', 'LastName', 'Country', 'StreetAddress', 'Postcode', 'City', 'EmailAddress', 'Phone'];
}
