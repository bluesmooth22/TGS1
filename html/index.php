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
			<h1>DOWNLOAD CLIENT</h1>
			<!-- <p class="tagline">Free <span><img src="_tpoint.png" alt="[Tpoint]" title="Tpoint" /></span> TPoints.</p> -->
		</section><!-- title -->
		<ul class="nav" <?php $active = basename($_SERVER["SCRIPT_NAME"]);?>>
			<li><a href="index.php" title="Cient" <?php if($active == "index.php"){echo "class='active'";}?>>DOWNLOAD CLIENT</a></li>
			<li><a href="donate.php" title="Trocar e-mail" <?php if($active == "donate.php"){echo "class='active'";}?>>DONATIONS</a></li>
			<li><a href="create.php" title="Create Account" <?php if($active == "create.php"){echo "class='active'";}?>>CREATE ACCOUNT</a></li>
			<!-- <li><a href="trocar_senha.php" title="Trocar senha" <?php if($active == "trocar_senha.php"){echo "class='active'";}?>>Trocar senha</a></li> -->
		</ul>
		<form name="form-criar" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="forms">
			<p>DOWNLOAD HERE  <span><a href="https://www.mediafire.com/file/1swhbymoqsyb3i1/Talisman+Of+Stars+PH.rar" title="Talisman Tutorial" target="_blank">Talisman of Star Client</a></span></p>
			</div><!-- input --> 
		</div><!-- forms -->
		</form>
	</div><!-- formulário -->
	
</main><!-- main -->


</body>
</html>

