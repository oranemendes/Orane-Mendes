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

	<section class="tableau">
<table>
		<thead>
		<tr>
			<th>Attaque</th>
			<td>Type</td>
			<th>Description</th>
			<th>Pokémon</th>
		</tr>
		</thead>
	<tbody>
		<tr>
			<td id="balayage">Balayage</td>
			<td>Combat</td>
			<td>La puissance de Balayage est déterminée en fonction du poids de la cible, en outre, la capacité perd sa capacité d'apeurer la cible.  </td>
			<td>Machoc, Kicklee, Débugant  </td>
		</tr>
		<tr>
			<td id="cogne">Cogne</td>
			<td>Combat</td>
			<td>Cogne inflige des dommages de deux à cinq fois de suite. Il y a 37,5% de chances que la capacité fasse 2 coups, 37,5% de chances qu'elle fasse 3 coups, 12,5% de chances qu'elle fasse 4 coups et 12,5% de chances qu'elle fasse 5 coups. Seule la première attaque peut faire un coup critique donc tous les coups auront la même puissance. Cogne peut continuer même après avoir brisé un clone.  </td>
			<td>Machoc, Kicklee, Débugant  </td>
		</tr>
		<tr>
			<td id="surpuissance">Surpuissance</td>
			<td>Combat</td>
			<td>Surpuissance inflige des dégâts et réduit l'Attaque et la Défense du lanceur d'un niveau.  </td>
			<td>Machoc, Kicklee, Débugant  </td>
		</tr>
		<tr>
			<td id="feuillage">Feuillage</td>
			<td>Plante</td>
			<td>Le lanceur attaque l'ennemi avec des feuilles.  </td>
			<td>Bulbizarre, Mystherbe, Boustiflor  </td>
		</tr>
		<tr>
			<td id="colère">Colère</td>
			<td>Dragon</td>
			<td>Colère est la plus puissante capacité physique de type Dragon. Elle dure deux à trois tours, empêchant toute autre action (y compris le changement de Pokémon et l'usage d'objet) tant qu'elle n'a pas cessé.

Lorsque Colère s'achève, le Pokémon lanceur devient confus.  </td>
			<td>Minidraco, Hyporoi, Draïeul, Colimucus  </td>
		</tr>
		<tr>
			<td id="dracocharge">Dracocharge</td>
			<td>Dragon</td>
			<td>Dracocharge inflige des dommages et possède 20% de chances d'apeurer la cible.  </td>
			<td>Minidraco, Hyporoi, Draïeul, Colimucus  </td>
		</tr>
		<tr>
			<td id="dracochoc">Dracochoc</td>
			<td>Dragon</td>
			<td>Dracochoc inflige des dégâts et ne possède pas d'effet secondaire particulier. C'est une attaque à aura, sa puissance est donc augmentée de 50% par le talent Méga Blaster.  </td>
			<td>Minidraco, Hyporoi, Draïeul, Colimucus  </td>
		</tr>
		<tr>
			<td id="ouragan">Ouragan</td>
			<td>Dragon</td>
			<td>Ouragan inflige des dégâts et a 20 % de chances d'apeurer la cible. La capacité touche les deux adversaires dans un Match Double.

Si Ouragan est utilisé contre un Pokémon situé dans les airs (premier tour de Vol ou Rebond), sa puissance est doublée.  </td>
			<td>Minidraco, Hyporoi, Draïeul, Colimucus  </td>
		</tr>
		<tr>
			<td id="plongée">Plongée</td>
			<td>Eau</td>
			<td>Cette capacité nécessite deux tours pour son exécution, au premier tour le lanceur plonge sous l'eau ce qui le rend invulnérable à toutes les capacités infligeant des dégâts, exception faite pour Surf et Siphon dont les dégâts seront doublés ainsi que Balayage. Les dégâts infligés par la tempête de sable, la grêle ou le ciel obscur n'affecteront pas le lanceur au premier tour de Plongée.  </td>
			<td>Otaria, Kokiyas  </td>
		</tr>
		<tr>
			<td id="surf">Surf</td>
			<td>Eau</td>
			<td>Surf est contenue dans la CS 03, qui permet de voyager dans l'eau sur le dos d'un Pokémon.

En Combat Duo ou Trio, Surf touche tous les Pokémon adjacents au lanceur présent sur le terrain.  </td>
			<td>Otaria, Kokiyas  </td>
		</tr>
		<tr>
			<td id="vibraqua">Vibraqua</td>
			<td>Eau</td>
			<td>Vibraqua inflige des dommages et possède 20% de chances de plonger la cible dans la confusion.  </td>
			<td>Otaria, Kokiyas  </td>
		</tr>
		<tr>
			<td id="megacorne">Megacorne</td>
			<td>Insecte</td>
			<td>Mégacorne inflige des dégâts, sans effets secondaires. C'est la capacité la plus puissante de type Insecte.  </td>
			<td>Aéromite, Insécateur  </td>
		</tr>
		<tr>
			<td id="piqûre">Piqûre</td>
			<td>Insecte</td>
			<td>Piqûre inflige des dégâts et vole la baie éventuellement tenue de la cible pour en bénéficier de ses effets le cas échéant. Piqûre ne volera pas la baie d'une cible dissimulée derrière un clone. </td>
			<td>Aéromite, Insécateur  </td>
		</tr>
		<tr>
			<td id="taillade">Taillade</td>
			<td>Insecte</td>
			<td>Taillade inflige des dégâts d'une puissance de 40. À chaque fois que cette capacité est utilisée, sa puissance double : elle peut atteindre au max 160 de puissance. S'il arrive que le lanceur rate entre-temps l'une des Taillade, sa puissance retombe au point de départ.  </td>
			<td>Aéromite, Insécateur  </td>
		</tr>
		<tr>
			<td id="permuforce">Permuforce</td>
			<td>Psy</td>
			<td>Permuforce échange les changements de statistique d'Attaque et d'Attaque Spéciale du lanceur avec ceux de la cible, l'effet peut être transmis via Relais.  </td>
			<td>Inconnu  </td>
		</tr>
		<tr>
			<td id="gravité">Gravité</td>
			<td>Psy</td>
			<td>Elle permet d'intensifier la gravité durant 5 tours.  </td>
			<td>Inconnu  </td>
		</tr>
		<tr>
			<td id="hâte">Hâte</td>
			<td>Psy</td>
			<td>Hâte augmente de deux niveaux la Vitesse du Pokémon lanceur.  </td>
			<td>Inconnu  </td>
		</tr>
		<tr>
			<td id="canonfloral">Canon Floral</td>
			<td>Fée</td>
			<td>Canon Floral est une capacité qui inflige des dégâts et baisse fortement l'Attaque Spéciale du lanceur.  </td>
			<td>Leveinard</td>
		</tr>
		<tr> 
			<td id="calinerie">Calinerie</td>
			<td>Fée</td>
			<td>Câlinerie est une capacité physique de type Fée. Elle a 10 % de chance de diminuer l’Attaque adverse d’un niveau.  </td>
			<td>Leveinard</td>
		</tr>
		<tr>
			<td id="ventféerique">Vent Féerique</td>
			<td>Fée</td>
			<td>Vent Féérique a une puissance de 40, sans effet secondaire.  </td>
			<td>Leveinard</td>
		
	</tbody>
</table>




	<footer>
		<figure>
			<?php include("footer.php") ?>
		</figure>
	</footer>

	</body>
</html>