<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['customer_full_name','customer_email','customer_message_subject','customer_message'];
}
