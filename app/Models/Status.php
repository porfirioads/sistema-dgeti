<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 * @package App\Models
 */
class Status extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'STATUS';
    protected $fillable = array(
        'status'
    );
}
