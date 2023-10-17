<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlotterComplainant extends Model
{
    use HasFactory;

    protected $table = 'bcomplainant';
    //Primary Key
    public $primaryKey = 'bcomplainant_id';
    // Timestamps
    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'birthdate',
        'address',
        'contactnumber',
    ];
    public $timestamps = true;
}
