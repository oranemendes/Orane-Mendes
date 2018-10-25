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
  			
	</nav>

	<section class="tableau">
		<table id="types">
			<thead>
				<tr>
					<th>Type</th>
					<th>Caractéristiques</th>
					<th>Attaques</th>
				</tr>
			</thead>
            <script src="javascript/tabletypes.js"></script>
		<!--	<tbody>
				<tr>
					<td>Combat</td>
					<td>Vise l'offensive physique</td>
					<td><a href="attackslist.php#balayage">Balayage</a></td>
					<td><a href="attackslist.php#cogne">Cogne</a></td>
					<td colspan="2"><a href="attackslist.php#surpuissance">Surpuissance</a></td>
				</tr>
				<tr>
					<td>Plante</td>
					<td>Des Pokémons 100% bio aux attaques de grande puissance</td>
					<td colspan="4"><a href="attackslist.php#feuillage">Feuillage</a></td>
				</tr>
				<tr>
					<td>Dragon</td>
					<td>Pokémons très rares et puissants avec des résistances à des types très courants</td>
					<td><a href="attackslist.php#colère">Colère</a></td>
					<td><a href="attackslist.php#dracocharge">Dracocharge</a></td>
					<td><a href="attackslist.php#dracochoc">Dracochoc</a></td>
					<td><a href="attackslist.php#ouragan">Ouragan</a></td>
				</tr>
				<tr>
					<td>Eau</td>
					<td>Tous les doubles types possibles avec le type Eau existent, c'est le type le plus représenté</td>
					<td>Plongée</td>
					<td>Surf</td>
					<td colspan="2"><a href="attackslist.php#vibraqua">Vibraqua</a></td>
				</tr>
				<tr>
					<td>Insecte</td>
					<td>Pour tous les fans d'entomologie</td>
					<td><a href="attackslist.php#megacorne">Megacorne</a></td>
					<td><a href="attackslist.php#piqûre">Piqûre</a></td>
					<td colspan="2"><a href="attackslist.php#taillade">Taillade</a></td>
				</tr>
				<tr>
					<td>Psy</td>
					<td>C'est sûrement un complexe en rapport à l'enfance</td>
					<td><a href="attackslist.php#permuforce">Permuforce</a></td>
					<td><a href="attackslist.php#gravité">Gravité</a></td>
					<td colspan="2"><a href="attackslist.php#hâte">Hâte</a></td>
				</tr>
				<tr>
					<td>Fée</td>
					<td>Tous des amis de Peter Pan</td>
					<td><a href="attackslist.php#canonfloral">Canon Floral</a></td>
					<td><a href="attackslist.php#calinerie">Calinerie</a></td>
					<td colspan="2"><a href="attackslist.php#ventféerique">Vent féerique</a></td>
				</tr>
			</tbody>
			-->
		</table>
		
	</section>


	<footer>
		<figure>
			<?php include("footer.php") ?>
		</figure>
	</footer>

	</body>
<html>

