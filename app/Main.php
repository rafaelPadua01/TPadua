<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\InvoicePaid;

class Main extends Model
{
   use Notifiable;
   
   notify(new InvoicePaid($invoice));
}
