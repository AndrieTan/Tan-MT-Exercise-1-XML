<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://tan-mt-exercise-1-xml.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("game");
 
 ?>
 <ul>
    <?php
 foreach($content as $data)
 {
   $name = $data->getElementsByTagName("Game_Name")->item(0)->nodeValue;
   $genre = $data->getElementsByTagName("Game_Genre")->item(0)->nodeValue;
   $cost = $data->getElementsByTagName("Game_Cost")->item(0)->nodeValue;
   $rate= $data->getElementsByTagName("Game_Rate")->item(0)->nodeValue;
   
  
   echo "<li>$name 
            <ul>
                <li>Genre: $genre</li>
		<li>Cost: $cost</li>
		<li>Rating: $rate</li>
            </ul>
        </li>";
 }
?>
</ul>
