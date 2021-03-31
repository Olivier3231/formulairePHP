<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {

}
    if (!empty($_POST['nom']) && !empty($_POST['courriel']) && !empty($_POST['phone']) && !empty($_POST['courrielsubject']) && !empty($_POST['message'])) {

        header('Location: thanks.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

    <body>
    <div class="container">
        <form  action="thanks.php"  method="post">

            <div class="mb-3">
                <label  for="nom" class="form-label">Nom :</label>
                <input  type="text" class="form-control" id="nom"  name="user_name">
            </div><br>

            <div class="mb-3">
                <label  for="courriel" class="form-label">Courriel :</label>
                <input  type="email" class="form-control" id="courriel"  name="user_email">
            </div><br>

            <div class="mb-3">
                <label for="numero de tel" class="form-label">Telephone</label>
                <input type="tel" class="form-control" id="phone" name="telnumber" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" require>
                <small>Format: 12-34-56-78-90</small>
            </div><br>

            <div class="mb-3">
                <label  for="select" class="form-label">Courriel Subject :</label>
                <select class="form-control" id="courrielsubject"  name="mailsubject" size=0>
                <option selected value="">--please choose an option--</option>
                <option value="renseignement">renseignement</option>
                <option value="demande devis">demande devis</option>
                <option value="reclamation">reclamation</option>
                </select>
            </div><br>
            
            <div class="mb-3">
                <label  for="message">Message :</label>
                <textarea  class="form-control" id="message"  name="user_message"></textarea>
            </div><br>

            <div  class="button">
                <button  type="submit">Envoyer votre message</button>
            </div>
             
        </form>
    </div>
    </body>
</html>
