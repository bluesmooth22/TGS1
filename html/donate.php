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
	<style>
			#customers {
			  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			#customers td {
			  /*border: 1px solid #ddd;*/
			  padding: 8px;
			}

			#customers tr:nth-child(even){background-color: #f2f2f2;}
	</style>
</head>

<body>


<main class="main">
	
	<div class="formulario">
	
		<section class="title">
			<h1>DONATIONS</h1>
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
			<p>EMAIL ME @  <span><a href="#">symbian14344@yahoo.com</a> FOR MORE INFORMATION.</span></p>
			<br>
			<table id="customers">
				<tr>
					<td style="width: 10%; border: 1px solid #ddd;">
						3 USD
					</td>
					<td style="width: 40%; text-align: left;">
						1M PVP POINT
					</td>
					<td style="width: 10%; border: 1px solid #ddd;">
						10 USD
					</td>
					<td style="width: 40%; text-align: left;">
						DEEP SPRING AMULET XIV
					</td>
				</tr>
				<tr>
					<td style="width: 10%; border: 1px solid #ddd;">
						3 USD
					</td>
					<td style="width: 40%; text-align: left;">
						1000 STAR DUST
					</td>
					<td style="width: 10%; border: 1px solid #ddd;">
						10 USD
					</td>
					<td style="width: 40%; text-align: left;">
						BLOOD OATH RING XIV
					</td>
				</tr>
				<tr>
					<td style="width: 10%; border: 1px solid #ddd;">
						5 USD
					</td>
					<td style="width: 40%; text-align: left;">
						PURPLE WEAPON +20
					</td>
					<td style="width: 10%; border: 1px solid #ddd;">
						15 USD
					</td>
					<td style="width: 40%; text-align: left;">
						WEAPON V2 +20
					</td>
				</tr>
				<tr>
					<td style="width: 10%; border: 1px solid #ddd;">
						10 USD
					</td>
					<td style="width: 40%; text-align: left;">
						IMPACT SET +20
					</td>
					<td style="width: 10%; border: 1px solid #ddd;">
						10 USD
					</td>
					<td style="width: 40%; text-align: left;">
						SUPREME SET +20
					</td>
				</tr>
				<tr>
					<td style="width: 10%; border: 1px solid #ddd;">
						5 USD
					</td>
					<td style="width: 40%; text-align: left;">
						PURPLE ASSISTANT x1
					</td>
					<td style="width: 10%; border: 1px solid #ddd;">
						8 USD
					</td>
					<td style="width: 40%; text-align: left;">
						PANTS, CROWN AND GUANTLET +20
					</td>
				</tr>
				<tr>
					<td style="width: 10%; border: 1px solid #ddd;">
						16 USD
					</td>
					<td style="width: 40%; text-align: left;">
						SKY SET +20
					</td>
					<td style="width: 10%; border: 1px solid #ddd;">
						16 USD
					</td>
					<td style="width: 40%; text-align: left;">
						DARKNESS SET +20
					</td>
				</tr>
				
			</table>
			</div><!-- input --> 
		</div><!-- forms -->
		</form>
	</div><!-- formulário -->
	
</main><!-- main -->


</body>
</html>

