
		<?php
		session_start();
			include_once("conexao.php");
			$arquivo 	= $_FILES['arquivo']['name'];
			
			$_UP['pasta'] = '../foto/';
			
			$_UP['tamanho'] = 1024*1024*100; //5mb
	
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
		
			$_UP['renomeia'] = false;
			
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
	
			if($_FILES['arquivo']['error'] != 0){
		
$id = $_SESSION['idUsuario'];
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$uf = filter_input(INPUT_POST, 'uf');
$cidade = filter_input(INPUT_POST, 'cidade');
$nacionalidade = filter_input(INPUT_POST, 'nacionalidade');
$senha = filter_input(INPUT_POST, 'senha');
$descricao = filter_input(INPUT_POST, 'descricao');

	
$sql="update Usuario ";
$sql.= "set nome= '".$nome."



', email= '$email', uf='$uf', senha='$senha', cidade='$cidade', nacionalidade='$nacionalidade', descricao='$descricao'";
$sql.="where idUsuario='$id';";
		mysqli_query($conexao, $sql);

	

					$_SESSION['idUsuario'] =$id;
					$_SESSION['nome'] = $nome;
					$_SESSION['email'] = $email;
					$_SESSION['nacionalidade'] = $nacionalidade;
					$_SESSION['uf'] = $uf;
					$_SESSION['cidade'] = $cidade;
					$_SESSION['senha'] = $senha;
					$_SESSION['descricao'] = $descricao;
header("Location: ../Views/conta.php");
		

		}
				
			
			else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../views/conta.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
			}
			
			else{
			
				if($_UP['renomeia'] == true){
				
					$nome_final = time().'.jpg';
				}else{
					
					$nome_final = $_FILES['arquivo']['name'];
				}
				
				if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
					
					$foto=$nome_final;
					

$id = $_SESSION['idUsuario'];
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$uf = filter_input(INPUT_POST, 'uf');
$cidade = filter_input(INPUT_POST, 'cidade');
$nacionalidade = filter_input(INPUT_POST, 'nacionalidade');
$senha = filter_input(INPUT_POST, 'senha');
$descricao = filter_input(INPUT_POST, 'descricao');

	
$sql="update Usuario ";
$sql.= "set nome= '".$nome."



', email= '$email', uf='$uf', senha='$senha', cidade='$cidade', nacionalidade='$nacionalidade', descricao='$descricao', NomeImg='$foto' ";
$sql.="where idUsuario='$id';";
		mysqli_query($conexao, $sql);

	

					$_SESSION['idUsuario'] =$id;
					$_SESSION['nome'] = $nome;
					$_SESSION['email'] = $email;
					$_SESSION['nacionalidade'] = $nacionalidade;
					$_SESSION['uf'] = $uf;
					$_SESSION['cidade'] = $cidade;
					$_SESSION['senha'] = $senha;
					$_SESSION['descricao'] = $descricao;
					$_SESSION['NomeIMG'] = $foto;
header("Location: ../Views/conta.php");
			

				}
			
			}
		?>
		
	</body>
</html>