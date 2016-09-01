<!DOCTYPE html>
<html>
<head>
	<meta >
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<title>Junielka</title>
</head>
<body>

<header>
	<nav>
	<h3>EJercicios PHP</h3>
	<ul>
		<li><a href="index.php">Primero</a></li>
		<li><a href="segundo.php">Segundo</a></li>
		<li><a href="tercero.php">Tercero</a></li>
		<li><a href="cuarto.php">Cuarto</a></li>
	</ul>
	</nav>
</header>
<br>
<br>
	<br>
	<br>
<section id="principal">
	<article id="uno"></article>
	<article id="dos">
		<form action="inc/ejercicio2.php" method="post">
		<label>Ingrese su peso</label>
		<br>
		<br>
	<input type="text" name="peso" placeholder="Peso em Kg" id="Peso" required>
	<br>
	<br>
	<label>Ingrese su altura</label>
		<br>
		<br>
	<input type="text" name="altura" placeholder="Altura en Mt" id="altura" required>
	<br>
	<br>
	<button type="submit">Enviar</button>
</form>

	</article>
	<article id="tres"></article>
</section>


</body>
</html>