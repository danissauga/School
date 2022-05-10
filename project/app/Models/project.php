<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    public function getGroup() {
        return $this->belongsTo(Group::class, 'project_id','id');
    }

    public function getAllGroups() {
        return $this->hasMany(Group::class, 'id','project_id');
    }
}
