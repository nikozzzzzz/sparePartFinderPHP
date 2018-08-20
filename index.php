<!-- бутстрап чтобы томат не охуел верстать это все -->

<!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<!-- если есть пост, то делает всю работу    --> 



<?php 
function getPostAndReplaceSpace() {
$query = $_POST['query'];
return  urlencode($query);  
}
?>
<?php    
if(isset($_POST['submit'])) {
getPostAndReplaceSpace();
} 
    ?>

<!-- хтмл для красного  -->
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
   <?php 	echo "Ваш запрос: ". getPostAndReplaceSpace();
    echo "<br>welcome to shitScriptStudios";
    echo "<br>"; 
    ?>
    </div> 
    <div class="col-md-4">
    <!--  вот основная форма ввода данных и отправки, не ломай -->
<<<<<<< HEAD:search.php
    <form action="search.php.php" method="post">
=======
        <form action="index.php" method="post">
>>>>>>> parent of a37f91c... Merge branch 'master' of https://github.com/nikozzzzzz/sparePartFinderPHP:index.php
    <input type="text" name="query" placeholder="введите запчасть">
    <input type="submit" name="submit">
    
        </form> 
     <!-- форма кончилась, можешь дальше ломать все нахуй  -->

    </div>
    <div class="col-md-4">
        
        

 <!--        вот пошли ссылки, тут можешь верстать  -->
        <a target="_blank" href="http://siriust.ru/?subcats=Y&pcode_from_q=Y&pshort=Y&pfull=Y&pname=Y&pkeywords=Y&search_performed=Y&pshort=Y&pfull=N&pname=Y&pkeywords=N&pcode=Y&match=all&q=<?php echo getPostAndReplaceSpace(); ?>&dispatch=products.search">Ссылка на сириус</a>               
        <br>
        <a target="_blank" href="https://detalka.ru/index.php?route=product/search&search=<?php echo getPostAndReplaceSpace(); ?>&description=true&sub_category=true">Ссылка на детальку</a>   
        <br>
        <a target="_blank" href="http://axmobi.ru/kategoryja/all?search=<?php echo getPostAndReplaceSpace(); ?>">Ссылка на аксмоби</a>
        <br>
        <a target="_blank" href="http://green-spark.ru/search/?q=<?php echo getPostAndReplaceSpace(); ?>&section=0&only_stock=no">Ссылка на гринспарк</a>
        <br>
        <a target="_blank" href="https://ekaterinburg.axeum.ru/category/all?search=<?php echo getPostAndReplaceSpace(); ?>&search_area=">Ссылка на аксеум</a>
 <!-- ссылки кончились нахуй  -->
  
        
    </div>
   
  </div>
</div>
    
</body>
</html>