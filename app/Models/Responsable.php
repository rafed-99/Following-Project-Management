<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ProjectFollowing;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    protected $table = 'responsables';
    protected $primaryKey = 'matricule';
    protected $fillable = ['matricule','name', 'numtel', 'department'];

    public function projectFollowing()
    {
        return $this->hasMany(ProjectFollowing::class, 'matricule_responsable', 'matricule');
    }
}
