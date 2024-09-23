<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleRightsAllowed extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'role_rights_allowed';

    protected $fillable = [
        'name',
        'role_right_id',
        'role_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
