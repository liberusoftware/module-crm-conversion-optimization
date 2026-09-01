<?php

declare(strict_types=1);

namespace Liberu\CRM\ConversionOptimization\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $experiment_id @property string $subject_key @property string $variant @property string $event */
final class ConversionObservation extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_conversion_observations';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['value' => 'float', 'context' => 'array'];
    }
}
