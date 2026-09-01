<?php

declare(strict_types=1);

namespace Liberu\CRM\ConversionOptimization\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property int $owner_id
 * @property string $status
 * @property int $allocation
 * @property array<int, mixed> $variants
 * @property array<int, mixed> $goals
 */
final class ConversionExperiment extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_conversion_experiments';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['variants' => 'array', 'goals' => 'array', 'statistical_policy' => 'array', 'experience' => 'array'];
    }
}
