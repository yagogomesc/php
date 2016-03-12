<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $titulo_pagina; ?></title>	
	<link rel="stylesheet" href="includes/style.css" type="text/css" media="screen" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <?php session_start(); ?>
</head>
<body>
	<div id="header">
		<h1>Player One</h1>
		<h2>Apenas para jogadores</h2>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="equipe.php">Equipe</a></li>
            <li><a href="categorias.php">Categorias</a></li>
			<li><a href="registro.php">Registrar</a></li>
			<li><?php if(isset($_SESSION['usuario_id'])){
						if($_SESSION['nivel_usuario'] == 2){
							echo '<a href="admin.php">Admin</a>';
						}else{
            			echo '<a href="logout.php">Logout</a>';}
						}else{ 
						echo '<a href="login.php">Login</a>';
						}
                        ?></li>
			
		</ul>
	</div>
	<div id="content"><!-- Start of the page-specific content. -->
<!-- Script 8.1 - header.html -->