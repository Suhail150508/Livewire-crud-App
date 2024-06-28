<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\Exceptions\BypassViewHandler;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','password'];
}
