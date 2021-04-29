<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checklist extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['checklist_group_id', 'name'];

    /**
     * Get the user that owns the Checklist
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function checklistGroup()
    {
        return $this->belongsTo(ChecklistGroup::class, 'checklist_group_id', 'id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
