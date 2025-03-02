<?php

namespace App\Models;

use Database\Factories\SkillFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    /** @use HasFactory<SkillFactory> */
    use HasFactory;

    protected $fillable = ['title'];

    public function vacancies(): BelongsToMany
    {
        return $this->belongsToMany(Vacancy::class, 'skill_vacancy');
    }
}
