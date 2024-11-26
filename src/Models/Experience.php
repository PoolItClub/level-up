<?php

namespace LevelUp\Experience\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{
    // use HasFactory;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config(key: 'level-up.tables.experiences');
    }

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(config(key: 'level-up.user.model'));
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(related: config('level-up.models.level'), foreignKey: 'level_id');
    }
}
