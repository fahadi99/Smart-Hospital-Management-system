<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleRights extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'role_rights';

    protected $fillable = [
        'name',
        'rights_slug',
        'role_right_module_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
