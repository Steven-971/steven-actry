//Contact Form in PHP
<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "stevenactry971@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "A: $name <$email>";
      $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "De: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Votre message a été envoyé";
      }else{
         echo "Message non envoyé";
      }
    }else{
      echo "Entrer un email valide !";
    }
  }else{
    echo "Email et Message requis !";
  }
?>