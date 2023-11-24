<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSendRegister extends Model
{
    use HasFactory;
    protected $table = 'form_send_registers' ;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'select_department',
        'message',
];
}
