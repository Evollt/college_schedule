<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedules>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subjects' => [
                [
                    'title' => 'Русский язык',
                    'homework' => 'Дз по русскому языку',
                    'teacher' => 'Иванников Сергей Анатольевич'
                ],
                [
                    'title' => 'Математика',
                    'homework' => 'Дз по математике',
                    'teacher' => 'Скрипников Владимир Владимирович'
                ],
                [
                    'title' => 'Основы проектирования баз данных',
                    'homework' => 'Дз по базам данных',
                    'teacher' => 'Подобин'
                ]
            ],
            'week_day_id' => 1,
            'group_id' => 1,
            'user_id' => 1
        ];
    }
}
