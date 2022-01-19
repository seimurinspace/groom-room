<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="/public/css/style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Groom Room</title>
</head>

<body>
  <div class="top-main">
    <div class="title-cover">
      <h1>Grooming</h1>
      <p>Service for dogs and cats</p>
    </div>
    <div class="link-menu">
      <ul>
        <a class="main" href="/public/index.php"><img src="/public/img/home.png" alt="hui">Главная</a>
        <a class="reg" href="/public/reg.php"><img src="/public/img/Vector.png" alt="hui"><span class="reg-text">Вход</span></a>
      </ul>
    </div>
  </div>
  <div class="app">
    <div class="app-title">
      <h2>
        Профессиональная укладка для ваших домашних питомцев
      </h2>
    </div>
    <div class="app-form" id="v-message">
      <form>
        <p>Создайте заявку</p>
        <input v-model="name" type="text" placeholder="Кличка домашнего питомца" required>
        <select v-model="selected" class="app-select" id="app-service-select" required>
          <option v-for="option in options" v-bind:value="option.value">{{option.value}}</option>
        </select>
        <h2 class="v-message-style">Вы выбрали: {{ name }} {{selected}}</h2>
        <button class="submit" type="button" @click="add">Записаться</button>
      </form>
    </div>
  </div>
  <div class="content">
    <h2>Наши работы</h2>
    <div class="products" id="products">
      <div class="product" v-for="card in cards">
        <img :src="card.img" alt="dog">
        <p>{{ card.title }}</p>
        <p>{{ card.option }}</p>
        <h3>{{card.status}}</h3>
      </div>
    </div>
  </div>
  <div class="footer">
    <p>groom-salon.com 2000-2999</p>
  </div>
  <script src="/public/js/vue.js"></script>
  <script src="/public/js/script.js"></script>
</body>

</html>