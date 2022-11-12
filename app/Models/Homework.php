<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Homework
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\HomeworkFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Homework newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Homework newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Homework query()
 * @method static \Illuminate\Database\Eloquent\Builder|Homework whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homework whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homework whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homework whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Homework extends Model
{
    use HasFactory;
}
