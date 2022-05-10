<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public function getProjectGroup() {
        return $this->belongsTo(Group::class, 'group_id','id');
    }
}
