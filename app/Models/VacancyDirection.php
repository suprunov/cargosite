<?php

namespace App\Models;

use Database\Factories\VacancyDirectionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class VacancyDirection extends Model
{
    /** @use HasFactory<VacancyDirectionFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'sort', 'created_by', 'updated_by', 'deleted_by'];

    public function vacancies(): HasMany
    {
        return $this->hasMany(Vacancy::class);
    }
}
