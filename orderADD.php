<?php
if (isset($_POST["mark"]) && isset($_POST["date"]) && isset($_POST["email"]) && isset($_POST["ydov"])) {
      
    $connect = mysqli_connect('localhost', 'root', '', 'dema');
    if($connect->connect_error){
        die("Ошибка: " . $connect->connect_error);
    }
    $mark = $connect->real_escape_string($_POST["mark"]);
    $date = $connect->real_escape_string($_POST["date"]);
    $email = $connect->real_escape_string($_POST["email"]);
    $ydov = $connect->real_escape_string($_POST["ydov"]);
    $sql = "INSERT INTO `order` (`id_Myorder`, `mark`, `date`, `email`, `ydov`) VALUES (NULL, '$mark', '$date', '$email', '$ydov')";
    if($connect->query($sql)){
         echo "Данные успешно добавлены";
        header('Location: ../myOrder.php');
    } else{
        echo "Ошибка: " . $connect->error;
    }
    $connect->close();
}
?>
$name