<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Deposit extends Model
{
    use HasFactory;
    /**
     * enable  mass assignment.
     *
     * @var array
     */
    protected $guarded = [];
}
