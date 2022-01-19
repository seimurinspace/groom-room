<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/public/css/style.css" rel="stylesheet">
  <title>Войдите или Зарегистрируйтесь</title>
</head>

<body>
  <div class="top-main">
    <div class="title-cover">
      <h1>Grooming</h1>
      <p>Service for dogs and cats</p>
    </div>
    <div class="link-menu">
      <ul>
        <a class="main" href="/public/index.php"><img src="img/home.png" alt="hui">Главная</a>
        <a class="reg" href="/public/reg.php"><img src="img/Vector.png" alt="hui"><span class="reg-text">Вход</span></a>
      </ul>
    </div>
  </div>
  <div class="app">
    <div class="reg-title">
      <h2>
        Войдите или Зарегистрируйтесь
      </h2>
      <p>Чтобы получить возможность добавить заявку</p>
    </div>
    <div class="zoo"><img class="zoo" src="img/image 1.png" alt=""></div>
    <div class="reg-form" id="formreg">
      <form>
        <ul>
          <a href="#"><span class="clicked">Вход</span></a>
          <a href="#">Регистрация</a>
        </ul>
        <input v-model="login" type="text" placeholder="Логин">
        <input v-model="password" type="password" placeholder="Пароль">
        <button type="button" class="submit" @click="showReg">Войти</button>
      </form>
    </div>
  </div>
  <div class="footer  footerreg">
    <p>groom-salon.com 2000-2999</p>
  </div>
  <script src="/public/js/vue.js"></script>
  <script src="/public/js/script.js"></script>
</body>

</html>