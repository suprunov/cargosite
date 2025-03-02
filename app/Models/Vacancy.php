<?php

namespace App\Models;

use Database\Factories\VacancyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacancy extends Model
{
    /** @use HasFactory<VacancyFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'vacancy_direction_id', 'title', 'slug', 'location', 'salary', 'expirience', 'description',
        'sort', 'created_by', 'updated_by', 'deleted_by', 'active_from', 'active_to', 'published'
    ];

    protected $casts = [
        'active_from' => 'datetime',
        'active_to' => 'datetime',
        'published' => 'boolean',
    ];

    public function direction(): BelongsTo
    {
        return $this->belongsTo(VacancyDirection::class, 'vacancy_direction_id');
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'skill_vacancy');
    }
}
