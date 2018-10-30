<?php

$mail = $_POST['email'];

$name = $_POST['name'];

$subject = $_POST['subject'];

$comments = $_POST['comments'];

$to = $_POST['to'];

$from = 'flavio.hfs@gmail.com.br';

$message = "Você recebeu um e-mail de ".$mail;

$message .= " ** Mensagem: ".$comments;

$headers = 'From: '. $from . "'\n" .

'Reply-To: ' . $mail . "'\n" .

'X-Mailer: PHP/' . phpversion();



if(mail($to, $subject, $message, $headers, "-r" . $from)){

echo "sucesso";

}

else{

echo "erro";

}

?>