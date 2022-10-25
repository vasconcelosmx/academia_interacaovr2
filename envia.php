<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	//$dpto = $_POST['dpto'];

	$msg = "<strong>Nome: </strong>" . $nome . "<br />";
	$msg .= "<strong>E-mail: </strong>" . $email . "<br />";
	//$msg .= "<strong>Departamento: </strong>" . $dpto . "<br />";
	$msg .= "<strong>Mensagem: </strong>" . $mensagem . "<br />";

	$mensagem = $msg;
	$remetente = $email;
	$destinatario = "daniel.vasconcelos@mtac.org.br";
	$assunto = "Academia";
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "From:" . $email . "\r\n";
	$headers .= "Return-Path: daniel.vasconcelos@mtac.org.br\r\n";
	
	if(!mail($destinatario,$assunto,$mensagem,$headers)){
		print "falha no envio da mensagem";
	} else {
		echo "<script>window.location.href='obrigado.html'</script>"; 
	}
?>