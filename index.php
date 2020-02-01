<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://tan-mt-exercise-1-xml.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("Game");
 ?>
<h1> Games </h1>
    <?php
 foreach($content as $data)
 {
   $Game_Name = $data->getElementsByTagName("Game_Name")->item(0)->nodeValue;
   $Game_Genre = $data->getElementsByTagName("Game_Genre")->item(0)->nodeValue;
   $Game_Cost = $data->getElementsByTagName("Game_Cost")->item(0)->nodeValue;
   $Game_Rate= $data->getElementsByTagName("Game_Rate")->item(0)->nodeValue;
   echo "<ul><h2>$Game_Name</h2> 
            <ul>
                <li>Genre: $Game_Genre</li>
		<li>Cost: $Game_Cost</li>
		<li>Rating: $Game_Rate</li>
            </ul>
        </ul>";
 }
?>
