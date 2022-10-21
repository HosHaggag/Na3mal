<?php
include_once 'db_connect.php';


$RESULT = $GLOBALS['RESULT']->fetch_all(MYSQLI_ASSOC);
$id = $_GET['id'] - 1 ;

echo "<head><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>";


echo "
<div class='card' style='width: 800px ; margin: 50px ; flex-direction: row;justify-content: center; text-align: center'>
    <img class='card-img-top' src=".$RESULT[$id]['image']." alt='Card image cap' style='width: 500px' '>
    <div class='card-body'>
      <h1 class='card-title'>".$RESULT[$id]['name']."</h1>
      <h5 class='card-text'>".$RESULT[$id]['description'].$RESULT[$id]['description']."</h5>
    </div>
</div>
";
