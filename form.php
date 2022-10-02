<?php

$data = [];
$errors = [];
foreach($_POST as $key => $value){
    
    $checkedValue = htmlentities(trim($value));
    
    $data[$key] = $checkedValue;
   
    if(!$checkedValue){
        $errors[$key] = "Please fill the field.";
          } else {
            null;
    }
}



$data = array_map('trim', $_POST);
$errors = [];

var_dump($data);
if (empty($data[$key])) {
   $errors[] = "Please fill the fields.";
   
}

if (!filter_var($_POST['user_email'])) {
   $errors[] = "L'adresse mail n’est pas au bon format.";
}

if (!filter_var($_POST["user_phone_number"])) {
   $errors[] = "Please fill the fields.";
}
if (!empty($errors)) {
   foreach ($errors as $error)
   {
      echo "$error <br>";
   }
}

else {
  echo "Merci " . $_POST["firstname"] . " " . $_POST["lastname"] . " " ."de nous avoir contacté à propos de " .$_POST["Problem"] . ".<br>" .

  "Un de nos conseiller vous contactera soit à l’adresse " . $_POST["user_email"] . " " . "ou par téléphone au " . $_POST["user_phone_number"] . "<br>" . "dans les plus brefs délais pour traiter votre demande : " .
  
  $_POST["user_message"];
}

?>
