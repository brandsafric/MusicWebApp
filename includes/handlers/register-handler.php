<?php



function sanitizeFormPassword($inputText){
    
    $inputText = strip_tags($inputText);
    
    return $inputText;
}



function sanitizeFormUsername($inputText){
    
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","",$inputText); 
    
    return $inputText;
}



function sanitizeFormString($inputText){
    
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","",$inputText);
    $inputText = ucfirst(strtolower($inputText));
    
    return $inputText;  
}




if(isset($_POST['loginButton'])){
    //loginButton was pressed
}


if(isset($_POST['registerButton'])){
    //registerButton was pressed
    //echo"register button was pressed";
    
    
    
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password = sanitizeFormPassword($_POST['password2']);
 
    
    
    
    
}


?>