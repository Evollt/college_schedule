<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Estimation
 *
 * @property int $id
 * @property int $estimation
 * @property int $subject_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Subject $subject
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\EstimationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estimation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estimation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Estimation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimation whereEstimation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimation whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estimation whereUserId($value)
 * @mixin \Eloquent
 */
class Estimation extends Model
{
    use HasFactory;

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function subject() : BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
