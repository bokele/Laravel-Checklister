<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChecklistGroup extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    /**
     * Get all of the Checklist for the ChecklistGroup
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Checklists()
    {
        return $this->hasMany(Checklist::class);
    }
}
