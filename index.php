<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form  action="form.php"  method="post">
  

<div >
  <label  for="prénom">Prénom :</label>

  <input  type="text"  id="prénom"  name="firstname" required>

</div>

<div>

  <label  for="nom">Nom :</label>

  <input  type="text"  id="nom"  name="lastname" required>

</div>

<div>

  <label  for="courriel">Courriel :</label>

    <input  type="email"  id="courriel"  name="user_email" required>

</div>

<div>

  <label  for="phone">Numéro de Téléphone :</label>

  <input  id="phone"  name="user_phone_number" required>

</div>

<div>

<label for="Problem">votre problème concerne?</label>
       <select name="Problem" id="Problem" required>
           <option value="multi-directionnal_Array">Les tableaux multi-directionels ?</option>
           <option value="form">la création d'un formulaire ?</option>
           <option value="else">autres ?</option>
           </select>

</div>


<div>

  <label  for="message">Message :</label>

  <textarea  id="message"  name="user_message" required></textarea>

</div>



<div  class="button">

  <button  type="submit">Envoyer votre message</button>

</div>

</form>
</body>
</html>
