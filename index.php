<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://tan-mt-exercise-1-xml.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("Game");
 ?>
<h1> Games </h1>
    <?php
 foreach($content as $data)
 {
   $Game_Name = $data->getElementsByTagName("Name")->item(0)->nodeValue;
   $Game_Genre = $data->getElementsByTagName("Genre")->item(0)->nodeValue;
   $Game_Cost = $data->getElementsByTagName("Cost")->item(0)->nodeValue;
   $Game_Rate= $data->getElementsByTagName("Rate")->item(0)->nodeValue;
   echo "<ul><h2>$Game_Name</h2> 
            <ul>
                <li>Genre: $Game_Genre</li>
		<li>Cost: $Game_Cost</li>
		<li>Rating: $Game_Rate</li>
            </ul>
        </ul>";
 }
?>
