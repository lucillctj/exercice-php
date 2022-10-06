<?php

$NombreColonnes = 7;
$NombreLigne = 5; // ici on définit le nombre de colonnes et de lignes que contient le tableau

$p = 0; // le compteur est à 0 (premier numéro =1)
echo '<table border="1" width="300">'; // pour afficher le tableau et ses bordures

for ($i=1; $i<=$NombreLigne; $i++) { // la valeur de base est 1, si la valeur est plus petite ou égale au nombre de lignes (soit 5), alors on l'incrémente de 1 (on lui ajoute 1), quand la valeur arrive à 5, la boucle se termine
   echo '<tr>'; // pour afficher les lignes
   
for ($j=1; $j<=$NombreColonnes; $j++) { // // la valeur de base est 1, si la valeur est plus petite ou égale au nombre de colonnes (soit 7), alors on l'incrémente de 1 (on lui ajoute 1), quand la valeur arrive à 7, la boucle se termine
           
$p++; // incrémenter/ajouter 1 au compteur           
       
    if ($p %2==0) { // script modulo
        echo '<td bgcolor="green">'; // si la valeur du numéro est un multiple de 2 (pair), alors on colore la cellule en vert
    } else { 
        echo '<td>'; // sinon (impair) on affiche la cellule simplement par défaut
    }

echo $p; // pour afficher le numéro

echo '</td>'; // fin de l'affichage des cellules
}
echo '</tr>'; // fin de l'affichage des lignes
}
echo '</table>'; // fin de l'affichage du tableau
?>