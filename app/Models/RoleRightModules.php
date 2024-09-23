<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleRightModules extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'role_right_modules';

    protected $fillable = [
        'name',
        'parent_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
