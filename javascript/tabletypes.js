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

ajaxGet("http://145.239.32.254:8081/pokemon/types", function (reponse) {
    var types = JSON.parse(reponse);
    var typesElt = document.getElementById("types");
    types.forEach(function (type) {
        var ligneElt = document.createElement("tr");
        ligneElt.innerHTML = "<td class='nom'>" + type.nom + "</td>" + "<td class='caracteristiques'>" + type.caractéristique + "</td>" +
            "<td class='attaques'>" + type.attaques + "</td>";
        typesElt.appendChild(ligneElt);
    });
});
