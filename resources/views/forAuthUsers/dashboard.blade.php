@if(session('status'))
    {{ session('status') }}
@endif

@foreach ($schedules as $schedule)
    {{ $days[ date("w", strtotime($schedule->week_day->schedules_time) )] }}
    {{ $schedule->week_day->schedules_time }}
    <br>
    @foreach ($schedule->subjects as $subject)
        {{ $subject['title'] }} -- {{ $subject['homework'] }}
        Учитель: {{ $subject['teacher'] }}
        <br>
    @endforeach
    <br>
@endforeach