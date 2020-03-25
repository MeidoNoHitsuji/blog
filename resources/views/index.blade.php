<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Test</title>
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>
  <div class="wrapper">
    <main class="main-content">
      <div class="my-profile">
        <h2 class="heading">Мой профиль</h2>
        <div class="profile">
          <div class="avatar">
          <img src="{{$user->avatar ?? './png/user.png'}}" alt="Аватар" class="avatar__pic">
          </div>
          <div class="information">
            <div class="nickname">{{$user->nickname ?? 'Nickname'}}</div>
            <div class="user-name">
              <span class="name">{{$user->name ?? 'Имя'}}</span>
              <span class="surname">{{$user->surname ?? 'Фамилия'}}</span>
            </div>
            <a href="tel:{{$user->phone ?? '+11111111'}}" class="phone">{{$user->phone ?? '+11111111'}}</a>
          </div>
        </div>
      </div>
      <div class='edit-profile'>
        <h2 class="heading">Редактировать профиль</h2>
        <form class='form' id='form' method='POST' enctype='multipart/form-data'>
          {{ csrf_field() }}
          <ul class="form__list">
            <li class="form__item">
              <label class='form__label' for="nickname">Никнейм:</label>
              <input class='form__input' name='nickname' id='nickname' type="text">
            </li>
            <li class="form__item">
              <label class='form__label' for="nickname">Email:</label>
              <input class='form__input' name='email' id='email' type="email">
            </li>
            <li class="form__item">
              <label class='form__label' for="nickname">Password:</label>
              <input class='form__input' name='password' id='password' type="password">
            </li>
            <li class="form__item">
              <label class='form__label' for="nickname">Password confirmation:</label>
              <input class='form__input' name='password_confirmation' id='password_confirmation' type="password">
            </li>
            <li class="form__item">
              <label class='form__label' for="name">Имя:</label>
              <input class='form__input' name='name' id='name' type="text">
            </li>
            <li class="form__item">
              <label class='form__label' for="surname">Фамилия:</label>
              <input class='form__input' name='surname' id='surname' type="text">
            </li>
            <li class="form__item">
              <label class='form__inline-label' for="avatar">Аватар:</label>
              <input class='form__inline-input' name='avatar' id='avatar' type="file" value='image/jpeg,image/png'>
            </li>
            <li class="form__item">
              <label class='form__label' for="phone">Телефон:</label>
              <input class='form__input' name='phone' id='phone' type="text">
            </li>
            <li class="form__item">
              <div class="form__title">Пол:</div>
              <label class='form__inline-label' for="male">Мужской</label>
              <input class='form__inline-input' name='sex' value='male' id='male' type="radio">
              <label class='form__inline-label' for="female">Женский</label>
              <input class='form__inline-input' name='sex' value='female' id='female' type="radio">
            </li>
            <li class="form__item">
              <label class='form__inline-label' for="showPhone">Я согласен получать email-рассылку</label>
              <input class='form__inline-input' name='showPhone' id='showPhone' type="checkbox">
            </li>
            <li class="form__item">
              <button class='form__button' type="submit">Отправить</button>
            </li>
          </ul>
        </form>
      </div>
    </main>
  </div>
</body>
</html>