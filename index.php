<?php
       $domOBJ = new DOMDocument();
       $domOBJ->load("https://tan-mt-exercise-1-xml.herokuapp.com/rss.php");//XML page URL

       $content = $domOBJ->getElementsByTagName("Games");
?>
    
       
       <h1>Games</h1>
           
       
        <?php
              foreach($content->entry as $data)
        {          
           $Name = $data->getElementsByTagName("Name")->item(0)->nodeValue;
           $Genre = $data->getElementsByTagName("Genre")->item(0)->nodeValue;
           $Cost = $data->getElementsByTagName("Cost")->item(0)->nodeValue;
           $Rate = $data->getElementsByTagName("Rate")->item(0)->nodeValue;
           echo "<ul><h2>$Name</h2>
                    <ul>
                        <li>Genre: $Genre </li>
                        <li>Cost: $Cost</li>
                        <li>Rate: $Rate</li>
                        
                    </ul>
                </ul>";
              }
?>
    
