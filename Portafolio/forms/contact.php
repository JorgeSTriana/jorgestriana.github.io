<?php
if (isset($_POST['enviar'])) {
  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $header = "From: jorgetriana1951@hotmail.com" . "\r\n";
    $header .= "Reply-To: jorgetriana1951@hotmail.com" . "\r\n";
    $header .= "X_Mailer: PHP/". phpversion();
    $mail = @mail($email, $subject, $message);
    if ($mail) {
      echo "<h4>¡Correo enviado exitosamente!</h4>";
    }
  }
}
?>



