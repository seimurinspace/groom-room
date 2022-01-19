<?
//output connection to database
require_once ('connect.php');

echo '<br>';
//registration
function reg($connect, $login, $password) {
  $sql = "INSERT INTO `users` (`login`, `password`, `role`) VALUES ('$login', '$password', 'guest')";
  if ($connect->query($sql) === TRUE) {
    echo "New user created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
}
//authorization
function auth($connect, $login, $password) {
  $users =  mysqli_query($conn, "SELECT * FROM `users`");
  $vars = [];
  while ($var = mysqli_fetch_assoc($users)) {
    array_push($vars, [$var['login'], $var['password']]);
  }
  $result = '';
  for ($i=0; $i < count($vars); $i++) {
    if ($login === $vars[$i][0] && $password === $vars[$i][1]) {
      $result = 'win';
      break;
    }
  }

  if ($result === 'win') {
    echo 'Authorization is successful';
  } else {
    echo 'Invalid data entered';
  }
}