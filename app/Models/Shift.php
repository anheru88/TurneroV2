<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use OwenIt\Auditing\Contracts\Auditable;

class Shift extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'service_letter',
        'shift_of_day',
        'date',
        'service_id',
        'shift_statuses_id',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }
}
