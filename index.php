 <?php

 echo "<head><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>";
 include_once 'db_connect.php';
 $RESULT = $GLOBALS['RESULT']->fetch_all(MYSQLI_ASSOC);
 if (count($RESULT)> 0) {
     echo "<div style='display: flex ;margin: 0 auto;justify-content: space-evenly' > ";
     for($i = 0; $i < count($RESULT); $i++) {
         echo "
         <div class='card' style='width: 20% ; margin: 20px ; ' >
                <img class='card-img-top' src=".$RESULT[$i]["image"]." alt='Card image cap'>
                <div class='card-body'>
                    <h5 class='card-title'>".$RESULT[$i]["name"]."</h5>
                    <p class='card-text'>".$RESULT[$i]["description"]."</p>
                    <button type='submit' class='btn btn-primary'
                      onclick='window.location.href = \"details.php?id=".$RESULT[$i]["id"]."\"'>
                      Details
                    </button>
                </div>
         </div>
         ";
     }
     echo "</div>";
//     echo "</form>";

 } else {
     echo "0 results";
 }

