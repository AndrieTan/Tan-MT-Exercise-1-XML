<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://tan-mt-exercise-1-xml.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("game");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $name = $data->getElementsByTagName("name")->item(0)->nodeValue;
   $type = $data->getElementsByTagName("type")->item(0)->nodeValue;
   $cost = $data->getElementsByTagName("cost")->item(0)->nodeValue;
   $rate= $data->getElementsByTagName("rate")->item(0)->nodeValue;
   
  
   echo "<li>$name 
            <ul>
                <li>type: $type</li>
		<li>cost: $cost</li>
		<li>rate: $rate</li>
            </ul>
        </li>";
 }
?>
</ul>
