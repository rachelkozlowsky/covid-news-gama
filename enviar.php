<?

$destinatario = "rachelkozlowsky@gmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];
$phone = $_REQUEST['phone'];


$body = "===================================" . "\n";
$body = $body . "Contato" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "Telefone: " . $phone . "\n\n";
$body = $body . "===================================" . "\n";

mail($destinatario, $assunto , $body, "From: $email\r\n");





?>