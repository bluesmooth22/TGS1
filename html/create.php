<?php include "config/config.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Talisman of Star PH</title>
	<meta name="author" content="Origem" />
	<meta name="robot" content="index, follow" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/all.css" />
	<link rel="shortcut icon" href="favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">	
	<!-- <meta name="keywords" content="Talisman Tutorial, Talisman Tutoriais, Talisman, Vídeos Tutorial, Video Aulas, Servidores" />
	<meta name="description" content="Página de Criar Conta desenvolvido pelo fundador da Talisman Tutorial, Origem." /> -->
</head>

<body>


<main class="main">
	
	<div class="formulario">
	
		<section class="title">
			<h1>CREATE ACCOUNT</h1>
			<p class="tagline">Free <span><img src="_tpoint.png" alt="[Tpoint]" title="Tpoint" /></span> TPoints.</p>
		</section><!-- title -->
		<ul class="nav" <?php $active = basename($_SERVER["SCRIPT_NAME"]);?>>
			<li><a href="index.php" title="Cient" <?php if($active == "index.php"){echo "class='active'";}?>>DOWNLOAD CLIENT</a></li>
			<li><a href="donate.php" title="Trocar e-mail" <?php if($active == "donate.php"){echo "class='active'";}?>>DONATIONS</a></li>
			<li><a href="create.php" title="Create Account" <?php if($active == "create.php"){echo "class='active'";}?>>CREATE ACCOUNT</a></li>
			<!-- <li><a href="trocar_senha.php" title="Trocar senha" <?php if($active == "trocar_senha.php"){echo "class='active'";}?>>Trocar senha</a></li> -->
		</ul>
		
		<?php
			
			//VARIAVEIS
			$resultado = $login = $email = $senha = $rep_senha = "";

			if($_SERVER["REQUEST_METHOD"] == "POST"){
				
				$login 		= anti_sqlinjection($_POST["login"]);
				$email 		= anti_sqlinjection($_POST["email"]);
				$senha 		= anti_sqlinjection($_POST["senha"]);
				$rep_senha 	= anti_sqlinjection($_POST["rep_senha"]);
				$gd 		= 999999;
				
				if(empty($_POST["login"]) && empty($_POST["email"]) && empty($_POST["senha"]) && empty($_POST["rep_senha"])){
					$resultado = "<div class='resultado'>
					<h3 class='erro'>Error found<span>All fields are blank.</span></h3>
					</div>";
				}elseif(empty($_POST["login"])){
					$resultado = "<div class='resultado'>
					<h3 class='erro'>Error found<span>Please enter your username.</span></h3>
					</div>";
				}elseif($verifica = mysqli_query($conexao_dbforb,"SELECT * FROM nomes WHERE nomes_forb='$login'")){
					$cont 	= mysqli_fetch_array($verifica);
					if($cont >= 1){
					$resultado = "<div class='resultado'>
					<h3 class='erro'>Attention<span>forbidden to use this type of username [ <b>$login</b> ] </span></h3>
					</div>";
				}elseif($verifica = mysqli_query($conexao,"SELECT * FROM t_account WHERE name='$login'")){
				$cont = mysqli_fetch_array($verifica);
				if($cont >= 1){
				$resultado = "<div class='resultado'>
					<h3 class='erro'>Error found<span>Este login [ <b>$login</b> ] already being used.</span></h3>
					</div>";
				}elseif(empty($_POST["email"])){
					$resultado = "<div class='resultado'>
					<h3 class='erro'>Error found<span>Please enter your email.</span></h3>
					</div>";
				}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$resultado = "<div class='resultado'>
					<h3 class='erro'>Error found<span>Please enter a valid email address to create your account.</span></h3>
					</div>";
				}elseif($verifica = mysqli_query($conexao,"SELECT * FROM t_account WHERE email='$email'")){
				$cont = mysqli_fetch_array($verifica);
				if($cont >= 1){
				$resultado = "<div class='resultado'>
					<h3 class='erro'>Error found<span>This email address [ <b>$email</b> ] is already being used.</span></h3>
					</div>";
				}elseif(empty($_POST["senha"])){
					$resultado = "<div class='resultado'>
					<h3 class='erro'>Error found<span>Please enter your password.</span></h3>
					</div>";
				}elseif(strlen($_POST["senha"]) <6 || strlen($_POST["senha"]) >16){
					$resultado = "<div class='resultado'>
					<h3 class='erro'>Error found<span>Your password must contain 6 to 16 characters.</span></h3>
					</div>";
				}elseif(empty($_POST["rep_senha"])){
					$resultado = "<div class='resultado'>
					<h3 class='erro'>Error found<span>Please confirm your password.</span></h3>
					</div>";
				}elseif(strcmp($senha,$rep_senha) !=0){
					$resultado = "<div class='resultado'>
					<h3 class='erro'>Error found<span>The passwords you entered are not the same.</span></h3>
					</div>";	
				}else{
				//CADASTRANDO O USUÁRIO NO BANCO DE DADOS
				$sqlRegistrar = mysqli_query($conexao,"INSERT INTO t_account (name, pwd, pw2, gd, email) VALUES ('$login','".md5($_POST['senha'])."','$rep_senha','$gd','$email')");
				if($sqlRegistrar >=1){
				$resultado = "<div class='resultado'>
					<h3 class='valido'>Congratulations<span>Account created successfully, you just won <img src='_tpoint.png' alt='[Tpoints]' title='Tpoints' /> <b>$gd</b> TPoints.</span></h3>
					</div>";
				 echo "<meta http-equiv=refresh content='4; url=index.php'>";
				}
				
			}
				}
			}
			}
			}
			
		?>
		
		<form name="form-criar" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="forms">

			
			<?php echo $resultado; ?>
			
			<div class="input">
				<input type="text" name="login" placeholder="ENTER USERNAME" value="<?php echo $login; ?>"/>
				<input type="text" name="email" placeholder="ENTER EMAIL" value="<?php echo $email; ?>"/>
				<input type="password" name="senha" placeholder="ENTER PASSWORD" value="<?php echo $senha; ?>"/>
				<input type="password" name="rep_senha" placeholder="CONFIRM PASSWORD"/>
				<input type="submit" name="criar" value="REGISTER" />
				<input type="reset" name="limpar" value="RESET" />
				<!-- <h3>Ao criar conta você concorda com os nossos <a href="#" title="Leia os nossos termos">termos e condições</a></h3>
				<p>Desenvolvido por: Origem<span> Todos os direitos reservados a <a href="https://www.talismantutorial.com" title="Talisman Tutorial" target="_blank">Talisman Tutorial</a></span></p>--> 
			</div><!-- input -->
			
		</div><!-- forms -->
		</form>
		<?php
			function anti_sqlinjection($data){
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}		
		?>
	</div><!-- formulário -->
	
</main><!-- main -->


</body>
</html>

