<?php

namespace App\Models;

use App\Notifications\InvoicePaid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
use Illuminate\Notifications\Notifiable;
class Post extends Model
{
    use Notifiable;
    use HasFactory;
    // use Searchable;


    protected $fillable = [
        'title', 'content'
    ];
    
}