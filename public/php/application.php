<?
//output connection to database
require_once ('connect.php');

echo '<br>';
//add application to table

function addApp($connect, $name, $category) {
  $date = date("Y-m-d");
  $sql = "INSERT INTO `applications` (`id`, `name`, `img-before`, `img-after`, `timestamp`, `category`, `status`) VALUES (NULL, '$name', '1', '1', '$date', '$category', 'new')"; // добавялет наши данные
  if ($connect->query($sql) === TRUE) { //еслиз запрос прошёл успешно
    echo "New application created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error; //пошёл в жопу
  }
}

//output all app
function getAllApps($connect) {
  $applications =  mysqli_query($connect, "SELECT * FROM `applications`"); //выбирает всё, что можно нах*й
  $vars = [];//нужен, чтобы потом всё сюда засунуть с arraypush
  while ($var = mysqli_fetch_assoc($applications)) {
    array_push($vars, [$var['id'], $var['name'], $var['img-before'], $var['img-after'], $var['timestamp'], $var['category'], $var['status']]);//крутая штука, советую
  }
  for ($i=0; $i < count($vars); $i++) {
    for ($j=0; $j < count($vars[$i]); $j++) { 
      echo $vars[$i][$j]. " ";
    }
    echo '<br>';
  }
}

//output app by id
function getAppsById($connect, $id) {
  for ($idx=0; $idx < count($id); $idx++) { 
    $applications =  mysqli_query($connect, "SELECT * FROM `applications` Where `id` = '$id[$idx]'"); //выбирает чисто по ади
    $vars = []; //нужен, чтобы потом всё сюда засунуть с arraypush
    while ($var = mysqli_fetch_assoc($applications)) {
      array_push($vars, [$var['id'], $var['name'], $var['img-before'], $var['img-after'], $var['timestamp'], $var['category'], $var['status']]); //крутая штука, советую
    }
    for ($i=0; $i < count($vars); $i++) { 
      for ($j=0; $j < count($vars[$i]); $j++) { 
        echo $vars[$i][$j]. " ";
      }
      echo '<br>';
    }
  }
}


//change status for app by name
function changeStatusAppsByName($connect, $name, $status) {
  $sql = "UPDATE `applications` SET `status` = '$status' WHERE `name` = '$name'"; //запрос на замену, если имя в таблице равно нашему имени, которое выбрали
  if ($connect->query($sql) === TRUE) { //если запрос крут и он выдал нам тру
    echo "Status was changed successfull";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error; //пошёл в жопу
  }
}

//remove app by name
function removeAppsByName($connect, $name) {
  $sql = "DELETE FROM `applications` WHERE `applications`.`name` = '$name'"; 
  if ($connect->query($sql) === TRUE) {
    echo "Application was remove successfull";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
}
removeAppsByName($connect, "kozel");