<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div>
        <form action="{{ route('logining') }}" method="post">
            @csrf
            <label for="email">Введите ваш email</label>
            <input type="email" name="email" placeholder="Введите ваш email">

            <label for="password">Введите ваш пароль</label>
            <input type="password" name="password" placeholder="Введите ваш пароль">

            <input type="submit" value="Войти">
        </form>
    </div>
</body>
</html>