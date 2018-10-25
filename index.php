<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="index.css" />
		<title>Pokédex</title>
	</head>

	<body>

	<header>
		<?php include("header.php"); ?>
	</header>

	<nav>
		<?php include("nav.php") ?>		
	</nav>

	<section id="accueil">
	<aside id="imgpokedex">
		<p><img id="pokedex" src="http://www.pokemontrash.com/images/rubis-omega-saphir-alpha/pokedex/pokedex-hoenn.png" alt="pokedex" title="Pokédex" onclick="sonPokedex()" /></p>
		<script src="js/pokedex.js"></script>
	</aside>
	<aside>
		<p><h1>Bienvenue sur le Pokédex !</h1><br />
		<span id="txt">Plongez dans le monde merveilleux et fascinant des Pokémon ! Vous trouverez ici tout ce qu'il y a à savoir sur les <a href="pokemonlist.html" alt="Pokémon">Pokémon</a>, leurs différents <a href="pokemontypeslist.html" alt="types">types</a> ainsi que leurs <a href="attackslist.html" alt="attaques">attaques</a> spécifiques. Agréable visite à vous !</span></p>

		<iframe id="pokemontheme" width="560" height="315" src="https://www.youtube.com/embed/2lFfF5XLsCQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

	</aside>
	</section>

	<footer>
		<figure>
			<?php include("footer.php") ?>
		</figure>
	</footer>

	</body>
</html>


