<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Responsable;
use App\Models\Project;

class ProjectFollowing extends Model
{
    use HasFactory;

    protected $table = 'project_followings';
    protected $primaryKey = 'id_following';
    protected $guarded = [];

    public function responsables()
    {
        return $this->belongsTo(Responsable::class);
    }

    public function projet()
    {
        return $this->belongsTo(Project::class);
    }
}
