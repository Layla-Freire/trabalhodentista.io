<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data = $_POST['data'];

$assunto = "Mensagem do site";
$seuemail = "layla.freire@al.infnet.edu.br";

$corpo = "<span style='font-weight: bold'>Nome:</span> $nome<br>";
$corpo .= "Email: $email<br>";
$corpo .= "Telefone: $telefone<br>";
$corpo .= "Data: $data";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($seuemail, $assunto, $corpo, $headers);
?>
<script>
    alert('Dados enviados com sucesso!');
    location.href="index.html";
</script>