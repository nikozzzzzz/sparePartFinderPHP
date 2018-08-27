<!-- бутстрап чтобы томат не охуел верстать это все -->

<!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
 <?php 
if (isset($_POST['submit'])){
    $query = $_POST['login'];
    echo $query;
}
if ($login && $password){
    echo $login;
    echo $password;
} else {
    echo "please fill all fields";
}

    ?>   
    
    <!-- хтмл для томата  -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<div class="container">
  <div class="row">
      
    <div class="col-md-4">
   text
    </div> 
    <div class="col-md-4">
    <!--  вот основная форма ввода данных и отправки, не ломай -->
    <form action="login.php" method="post">
    <input type="text" name="login" placeholder="ваш логин">
    <input type="password" name="password" placeholder="ваш пароль">
    <input type="submit" name="submit">
    </form> 
     <!-- форма кончилась, можешь дальше ломать все нахуй  -->

    </div>
    <div class="col-md-4">
        
        
        text
        
    </div>
   
  </div>
</div>
    
</body>
</html>