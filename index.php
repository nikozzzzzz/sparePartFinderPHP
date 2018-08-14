<!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
    
if(isset($_POST['submit'])) {
    echo "welcome to shitScriptStudios";
    echo "<br>";
      
 $query = $_POST['query'];
    echo $query;
    $queryNoSpace =  str_replace (" ", "+", $query);
	echo $queryNoSpace;
}
  
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      <form action="index.php" method="post">
    <input type="text" name="query" placeholder="input query">
    <input type="submit" name="submit">
    
</form> 
<br>
<br>
<br>
<a href="http://siriust.ru/?subcats=Y&pcode_from_q=Y&pshort=Y&pfull=Y&pname=Y&pkeywords=Y&search_performed=Y&pshort=Y&pfull=N&pname=Y&pkeywords=N&pcode=Y&match=all&q=<?php echo $query; ?>&dispatch=products.search">Ссылка на сириус</a>               

     
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>
    
</body>
</html>