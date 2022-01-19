<?
//output connection to database
require_once ('connect.php');

echo '<br>';
//add application to table
function addApp($connect, $name, $category) {
  $date = date('Y-m-d');
  $sql = "INSERT INTO `applications` (`id`, `name`, `img-before`, `img-after`, `timestamp`, `category`, `status`) VALUES (NULL, '$name', '1', '1', '$date', '$category', 'new')";
  if ($conn->query($sql) === TRUE) {
    echo "New application created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
}

//output all app
function getAllApps($connect) {
  $applications =  mysqli_query($connect, "SELECT * FROM `applications`");
  $vars = [];
  while ($var = mysqli_fetch_assoc($applications)) {
    array_push($vars, [$var['id'], $var['name'], $var['img-before'], $var['img-after'], $var['timestamp'], $var['category'], $var['status']]);
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
    $applications =  mysqli_query($connect, "SELECT * FROM `applications` Where `id` = '$id[$idx]'");
    $vars = [];
    while ($var = mysqli_fetch_assoc($applications)) {
      array_push($vars, [$var['id'], $var['name'], $var['img-before'], $var['img-after'], $var['timestamp'], $var['category'], $var['status']]);
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
function changeStatusApplicationByName($connect, $name, $status) {
  $sql = "UPDATE `applications` SET `status` = '$status' WHERE `name` = '$name'";
  if ($connect->query($sql) === TRUE) {
    echo "Status was changed successfull";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

//remove app by name
function removeApplicationByName($connect, $name) {
  $sql = "DELETE FROM `applications` WHERE `applications`.`name` = '$name'";
  if ($connect->query($sql) === TRUE) {
    echo "Application was remove successfull";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
}