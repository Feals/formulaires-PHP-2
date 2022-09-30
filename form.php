<?php

  echo "Merci " . $_POST["firstname"] . " " . $_POST["lastname"] . " " ."de nous avoir contacté à propos de " .$_POST["Problem"] . ".<br>" .

  "Un de nos conseiller vous contactera soit à l’adresse " . $_POST["user_email"] . " " . "ou par téléphone au " . $_POST["user_phone_number"] . "<br" . "dans les plus brefs délais pour traiter votre demande : " .
  
  $_POST["user_message"];

?>


