<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectFollowing;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'matricule_project';
    protected $fillable = ['matricule_project','project_name','project_description'];

    public function projectFollowing()
    {
        return $this->hasOne(ProjectFollowing::class, 'matricule_pro', 'matricule_project');
    }
}
