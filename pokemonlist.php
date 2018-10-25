<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="index.css" />
		<title>Pokédex</title>
	</head>

	<body>

	<header>
		<?php include("header.php") ?>
	</header>

	<nav>
		<?php include("nav.php") ?>		
	</nav>

        <section class="tableau">
            <table id="pokemons">
                <thead>
                <tr>
                    <th id="nom">Nom</th>
                    <th id="numero">Numéro</th>
                    <th id="type">Type</th>
                    <th id="image">Image</th>
                </tr>
                </thead>
                <script src="javascript/tablepokemon.js"></script>
            </table>
        </section>



	<footer>
		<figure>
			<?php include("footer.php") ?>
		</figure>
	</footer>

	</body>
</html>