function ajaxGet(url, callback) {
    var req = new XMLHttpRequest();
    req.open("GET", url);
    req.addEventListener("load", function (){
        if (req.status >= 200 && req.status < 400) {
            callback(req.responseText);
        } else {
            console.error(req.status + " " + req.statusText + " " + url);
        }
    });
    req.addEventListener("error", function () {
        console.error("Erreur de réseau avec l'URL " + url);
    });
    req.send(null);
}

ajaxGet("http://145.239.32.254:8081/pokemon/pokemons", function (reponse) {
    var pokemons = JSON.parse(reponse);
    var pokemonsElt = document.getElementById("pokemons");
    pokemons.forEach(function (pokemon) {
        var ligneElt = document.createElement("tr");
        ligneElt.innerHTML = "<td class='nom'>" + pokemon.nom + "</td>" + "<td class='numero'>" + pokemon.numero + "</td>" +
            "<td class='type'><a href='pokemontypeslist.php'>" + pokemon.type + "</a></td>" + "<td class='image'><img src='" + pokemon.image + "' /></td>";
        pokemonsElt.appendChild(ligneElt);
    });
});

