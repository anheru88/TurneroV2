<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Service extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    use SoftDeletes;

    protected $fillable = ['name', 'service_parent_id'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function shifts(): HasMany
    {
        return $this->hasMany(Shift::class);
    }

    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function turners(): BelongsToMany
    {
        return $this->belongsToMany(Turners::class);
    }

    public function screens(): BelongsToMany
    {
        return $this->belongsToMany(Screen::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'service_parent_id');
    }

    public function childs(): HasMany
    {
        return $this->hasMany(self::class, 'service_parent_id');
    }
}
