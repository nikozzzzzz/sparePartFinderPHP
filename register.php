<!-- бутстрап чтобы томат не охуел верстать это все -->

<!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
 <?php 
 //define login ahead to fix notice
$login = "";

//mysql connection details: address, database, user and pass
$servername = "localhost";
$dbusername = "spareFinder";
$dbpassword = "Gotohell5122";
$database = "spareLogin";
if (isset($_POST['submit'])){
    $login = $_POST['login'];
    $password = $_POST['password'];

//create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);
$query ="INSERT INTO users(login,password) ";
$query  .= "VALUES ('$login','$password')";
$result = mysqli_query($conn,$query);
if(!$result) {
    die('Что-то пошло не так с базой данных');
}

// Check connection
if ($conn->connect_error) {
    die("Подключение не удалось: " . $conn->connect_error);
} else {
echo "Подключение успешно. ";
}
}
if ($login && $password){
    echo '';
} else {
    echo "Заполните все поля";
}

    ?>   
    
    <!-- хтмл для томата  -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    
<div class="container">
  <div class="row">
      
    <div class="col-md-4">
   текст
    </div> 
    <div class="col-md-4">
    <!--  вот основная форма ввода данных и отправки, не ломай -->
    <form action="login.php" method="post">
    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="password" placeholder="Пароль">
    <input type="submit" name="submit">
    </form> 
     <!-- форма кончилась, можешь дальше ломать все нахуй  -->

    </div>
    <div class="col-md-4">
        
        
        текст
        
    </div>
   
  </div>
</div>
    
</body>
</html>