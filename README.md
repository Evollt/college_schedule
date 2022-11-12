<h1 align="center">Колледжное расписание/Collage schedule</h1>

## Что вам нужно для нормальной загрузки проекта
1. Клонируете этот репозиторий себе на локалку
2. Устанавливаете все зависимости node js и composer
   1. `npm i`
   2. `composer install`
3. Открываете phpmyadmin или консоль mysql и создаете бд `college_dairy`
4. После создания заходите в файлы проекта и в консоли вводите `php artisan migrate:fresh`
5. Далее вы запускаеет сидеры, для создания начальной структуры `php artisan db:seed`. Напоминаю, что данные вы можете сменить в `./database/factories/`

### Также обратите внимание, что вам нужен `php8.*`, потому что сам проект написан на laravel 9.

<br/>

## Работа с проектом и документация по коду
### Пройдемся чутка по файлам:

`./routes/web.php` - тут находится основной роутинг на сайте. Я решил подразделить его на три части.
1. Для авторизованных пользователей
2. Для не авторизованных пользователей, то есть например страница `login`(на эту страницу нельзя авторизованным пользователям)
3. Для всех пользователей

```php
<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Аутентификация и регистрация пользователя
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('logining', [AuthController::class, 'logining'])->name('logining');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('registering', [AuthController::class, 'registering'])->name('registering');
});

// Страницы только для авторизованных пользователей
Route::middleware('auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('logout', 'logout')->name('logout');
    });

    Route::controller(HomeController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('profile', 'profile')->name('profile');
    });
});
```

Так, еще отдельно хотел бы рассказать про `./app/Http/Controllers/HomeController.php`. Тут находится обработка роутов, которые требуют авторизации. В этом контроллере все роуты, кроме `test()`, требуют авторизации. И то роут `test()` нужен мне только для тестирования работы разных фишек, вскоре он будет удален.
```php
<?php

namespace App\Http\Controllers;

use App\Models\Estimation;
use App\Models\Schedule;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function dashboard() : View
    {
        $schedules = Schedule::all();
        $schedules = $schedules->where('group_id', Auth::user()->group_id);

        // потом по-этому массиву blade шаблон будет определять день недели
        $days = [
            'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
            'Четверг', 'Пятница', 'Суббота'
        ];

        return view('forAuthUsers.dashboard', [
            'schedules' => $schedules,
            'days' => $days
        ]);
    }

    public function test()
    {
        // return Subject::find(1)->user;
        // return Estimation::find(1)->user->name . ' по ' . Estimation::find(1)->subject->title . ' получил ' . Estimation::find(1)->estimation;
    }

    public function profile() : View
    {
        return view('forAuthUsers.profile');
    }

}
```

### Для особо хитрожопых я хотел бы сказать, что ключ сайта, который находится в `.env` уже недействителен(

## Кому интересно следить за ходом проекта, переходите на мою страницу в вк
[![Vk](https://img.shields.io/badge/Vkontakte-090909?style=for-the-badge&logo=Vk&logoColor=4F7D83)](https://vk.com/evollt)

### На этой же странице будет запощен sql файл с базой данных.
Вот ссылочка на <a href="https://vk.com/evollt?w=wall329056111_365%2Fall"><i>пост</i></a>
