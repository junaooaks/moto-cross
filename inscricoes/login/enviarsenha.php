<?php
//session_destroy();
include ("../mysql/conexao_mysql.php");

$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

if (($cpf == "guerra")and($senha=="marcelo")) 
{
header("Location:../admin.php?admin=Edmilson");
}

//Comando que efetua a busca do banco
	    $sql = "SELECT * FROM piloto WHERE cpf = '$cpf'";
		//Executa o comando
		$my = mysql_query($sql)or die (mysql_error());
		//Retornamos o numero de linhas afetadas
		$num = mysql_num_rows($my);
		//Verificams se alguma linha foi afetada, caso sim retornamos suas informa��es
		if($num > 0)
		{
			//Retorna os dados do banco
			    $linha  = mysql_fetch_array($my);
				$id 	= $linha["id"];
				$nome 	= $linha["nomePiloto"];
				$sen    = $linha["senha"];
				$email  = $linha["email"];
			$headers = 'From: guerracross@brsite.com.br';
			mail($email,"Senha Pro-Velo Inscri��es on-line","A senha cadastrada para o CPF N� $cpf �: $sen",$headers ) ;


//Redireciona para a p�gina principal

		echo "<script type='text/javascript'> window.alert('Senha Enviada para $email');</script>";
   		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";

		}
else
	{
		echo "<script type='text/javascript'> window.alert('CPF $cpf nao cadastrado');</script>";
   		echo "<meta http-equiv='refresh' content='0;URL=lembrar.php'>";
	}

?>
