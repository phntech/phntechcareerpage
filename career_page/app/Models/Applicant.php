<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $fillable = [
        "first_name",
        "last_name",
        "wtsp_mob_no",
        "email",
        "state",
        "district",
        "taluka",
        "qualification",
    ];
}
