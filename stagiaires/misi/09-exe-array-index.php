<?php
// Tableau indexé
$stagiairesWeb2025= [
    "Agim", 
    "Omer", 
    "Massine", 
    "Loukas", 
    "Soulaiman", 
    "Nordine", 
    "Vahagn", 
    "Daniel", 
    "Samuel", 
    "Sola",
    "Reda",
    "Jean-Michaël",
    "Saïd",
    "Géraldine",
    "Jeremy",
    "Mykyta",
    ];

// Pour compter les éléments d'un tableau, nous pouvons utiliser la fonction native count()
echo "<p>Il y a ".count($stagiairesWeb2025)." élèves dans la classe.</p>";

// Pour afficher un élément du tableau, nous utilisons l'index de l'élément,
// ici par exemple les premiers élèves :

echo "<p>Les 3 premiers élèves sont : ".$stagiairesWeb2025[0].", ".$stagiairesWeb2025[1].",
 ".$stagiairesWeb2025[2]."</p>";

 // tableau monTap

 $monTab = ['un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix'];

 // afficher tableau

 echo "<p> voici les element du tableau monTab : <hr> 
    $monTab[0]<hr>
    $monTab[1]<hr>
    $monTab[2]<hr>
    $monTab[3]<hr>
    $monTab[4]<hr>
    $monTab[5]<hr>
    $monTab[6]<hr>
    $monTab[7]<hr>
    $monTab[8]<hr>
    $monTab[9]</p>";

foreach ($monTab as $i){
    echo "$i <hr>";
}