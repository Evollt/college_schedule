<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WeekDay
 *
 * @property int $id
 * @property string $schedules_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\WeekDayFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|WeekDay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WeekDay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WeekDay query()
 * @method static \Illuminate\Database\Eloquent\Builder|WeekDay whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WeekDay whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WeekDay whereSchedulesTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WeekDay whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WeekDay extends Model
{
    use HasFactory;
}
