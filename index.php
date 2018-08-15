<!-- //бутстрап чтобы томат не охуел верстать это все -->

<!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<!-- //если есть пост, то делает всю работу    --> 
<?php 
function bestFunc() {
$query = $_POST['query'];
   // echo $query;
   // echo "<br>";
    return $queryNoSpace =  str_replace (" ", "+", $query);  
}
?>
<?php    
if(isset($_POST['submit'])) {
    
      
 bestFunc();
} 
    ?>

<!-- //хтмл для красного  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<div class="container">
  <div class="row">
      
    <div class="col-md-4">
   <?php 	echo "Ваш запрос: ". bestFunc();
    echo "<br>welcome to shitScriptStudios";
    echo "<br>"; 
    ?>
    </div> 
    <div class="col-md-4">
    <!--  //вот основная форма ввода данных и отправки, не ломай -->
        <form action="index.php" method="post">
    <input type="text" name="query" placeholder="введите запчасть">
    <input type="submit" name="submit">
    
        </form> 
     <!--       //форма кончилась, можешь дальше ломать все нахуй  -->

    </div>
    <div class="col-md-4">
        
        

 <!--       // вот пошли ссылки, тут можешь верстать  -->
        <a target="_blank" href="http://siriust.ru/?subcats=Y&pcode_from_q=Y&pshort=Y&pfull=Y&pname=Y&pkeywords=Y&search_performed=Y&pshort=Y&pfull=N&pname=Y&pkeywords=N&pcode=Y&match=all&q=<?php echo bestFunc(); ?>&dispatch=products.search">Ссылка на сириус</a>               
        <br>
        <a target="_blank" href="https://detalka.ru/index.php?route=product/search&search=<?php echo bestFunc(); ?>&description=true&sub_category=true">Ссылка на детальку</a>   
        <br>
        <a target="_blank" href="http://axmobi.ru/kategoryja/all?search=<?php echo bestFunc(); ?>">Ссылка на аксмоби</a>
        <br>
        <a target="_blank" href="http://green-spark.ru/search/?q=<?php echo bestFunc(); ?>&section=0&only_stock=no">Ссылка на гринспарк</a>
        <br>
        <a target="_blank" href="https://ekaterinburg.axeum.ru/category/all?search=<?php echo bestFunc(); ?>&search_area=">Ссылка на аксеум</a>
 <!--        //ссылки кончились нахуй  -->
  
        
    </div>
   
  </div>
</div>
    
</body>
</html>