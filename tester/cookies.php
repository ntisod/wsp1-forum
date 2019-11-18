<?php

$cookie_name = "user";
$cookie_value = "Tobias";


?>

<html>
<body>
    
<?php
    setcookie($cookie_name, $cookie_value, time() + (86400 *30), "/");
    if(!isset($_COOKIE[$cookie_name])){
        //Om kakan inte existerar
        echo "Kakan som heter '" . $cookie_name . "' finns inte."; 
    } else{
        //Om kakan existerar
        echo  "Kakan som heter '" . $cookie_name . "' finns.";
        echo "Värdet är " . $_COOKIE[$cookie_name];
    }

?>

</body>
</html>