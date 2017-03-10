<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plaza extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'PLAZA';
    protected $fillable = array(
        'plaza'
    );
}
