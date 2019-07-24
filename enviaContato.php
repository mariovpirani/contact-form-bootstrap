
<?php
/* Envio de E-mail mail()
Arquivo enviaContato.php - PHP
criado: 16/08/2018
Criado por: @Bross
www.tosempreai.com.br
brosslightyear@gmail.com
 ***********************************************************
 */

// Aqui simplesmente estou pegando os input do formulário via post

$empresa = $_POST["empresa"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$texto = "<h3> Formulário </h3><br>
			<b>Empresa:</b> $empresa<br>
			<b>Nome do Cliente:</b> $nome<br>
			<b>Telefone:</b> $telefone<br>
			<b>E-mail:</b> $email<br>
			<b>Mensagem:</b> $mensagem<br>";

//AQUI ENVIO O PRIMEIRO EMAIL PARA O DESTINATARIO
$emailDestino = "seuemailaqui@gmail.com";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From:" . $email . "\r\n";
mail($emailDestino, 'Teste de E-mail', $texto, $headers);

//AQUI ENVIO O PRIMEIRO EMAIL PARA O CLIENTE

$headers2 = "MIME-Version: 1.0\r\n";
$headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers2 .= "From:" . $email . " \r\n";
$texto .= "Seu e-mail foi recebido por um de nossos atendentes<br>
			Em breve será respondido!<br>
			<br>
			Departamento Comercial ...<br>
			www.tosempreai.com.br<br>
			mariovpirani@gmail.com<br>
			Obrigado
			<br>
			<img src='http://tosempreai.com.br/wp-content/uploads/2017/06/tosempreai.png'>";
mail($email, 'Teste de E-mail', $texto, $headers2);

//REDIRECIONO PARA PAGINA CONTATO.PHP
print '<script>location.href= "contato.php";</script>';

?>
