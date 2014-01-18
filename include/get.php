<?php
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
 ?>
<form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    MusicBD Album URL:
    <input name="url" type="text" value="" size="60"/>
    <input type="submit" value="Get Links"/> 
</form> 
<?php
 }  
else                /* send the submitted data */ 
    { 
    $url=$_REQUEST['url']; 
    if (($url=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        	multiLink($url);
        } 
    }   
?> 