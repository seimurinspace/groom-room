<?
//output connection to database
require_once ('connect.php');

echo '<br>';
//registration
function reg($connect, $login, $password) {
  $sql = "INSERT INTO `users` (`login`, `password`, `role`) VALUES ('$login', '$password', 'guest')"; //сразу засовываем роль гостя
  if ($connect->query($sql) === TRUE) { //если запрос выдал тру
    echo "New user created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error; //пошёл в жопу и коннект рвётся
  }
}
//authorization
function auth($connect, $login, $password) {
  $users =  mysqli_query($connect, "SELECT * FROM `users`");
  $vars = [];
  while ($var = mysqli_fetch_assoc($users)) { //рулит этой игрой, позволяя высунуть всё в виде некого массива и приравнять к массиву переменную 
    array_push($vars, [$var['login'], $var['password']]); // просто выплёвываем логины и пароли в vars
  }
  $result = '';
  for ($i=0; $i < count($vars); $i++) { //просто делаем цЫкл, чтобы проверять всё и вся внизу
    if ($login === $vars[$i][0] && $password === $vars[$i][1]) { // проверяем совпадения между введёнными логином и паролем и всеми данными (логин и пароль) 
      $result = 'win'; //выплёвываем результат на победу
      break;
    }
  }

  if ($result === 'win') {
    echo 'Authorization is successful';
  } else {
    echo 'Invalid data entered';
  }
}
// auth($connect, "2", "3");