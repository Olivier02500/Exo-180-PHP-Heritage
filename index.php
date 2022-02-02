<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require __DIR__ . './classes/Habitation.php';
require __DIR__ . './classes/Maison.php';
require __DIR__ . './classes/Appartement.php';

$newMaison = new Maison('France' ,'Aubenton' ,4 ,4 ,7 ,'true' ,1 , 'true');

echo "<p>Nombre de chambre : {$newMaison->getChambre()}</p>
      <p>Nombre d'étages : {$newMaison->getEtages()}</p>
      <p>Pays : {$newMaison->getPays()}</p>
      <p>Nombre de pièces : {$newMaison->getPieces()}</p>
      <p>Ville : {$newMaison->getVille()}</p>";


echo '<hr><br>';

$newMaison2 = new Maison('France', 'Hisron ', 02500 ,3, 6, 'false', 1, 'false');

echo "<p>Nombre de chambre : {$newMaison2->getChambre()}</p>
      <p>Nombre d'étages : {$newMaison2->getEtages()}</p>
      <p>Pays : {$newMaison2->getPays()}</p>
      <p>Nombre de pièces : {$newMaison2->getPieces()}</p>
      <p>Ville : {$newMaison2->getVille()}</p>";

echo '<hr><br>';
$newAppartement = new Appartement('France' , 'Paris' ,02500 ,1 ,3 ,'false');

echo "<p>Pays : {$newAppartement->getPays()}</p>
      <p>Ville : {$newAppartement->getVille()}</p>
      <p>Nombre de chambre : {$newAppartement->getChambre()}</p>
      <p>Nombre de pièces : {$newAppartement->getPieces()}</p>
      <p>Garage : {$newAppartement->garage}</p>";