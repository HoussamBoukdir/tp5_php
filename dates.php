<?php 
$periode=new DateInterval("P7D");
$dt=new DateTime();
//la methode add add($periode):permet d'ajouter
//une periode a une date donnee
$sem=$dt->add($periode);
echo "dans une semaine, la date serait:".$sem->format("d/m/Y")."<br/>";
//la methode sub($periode):permet de soustraire
//une periode d'une date donnee
$dt=new DateTime();
$sem=$dt->sub($periode);
echo "il y a une semaine, la date etait:".$sem->format("d/m/Y")."<br/>";

$periode=new DateInterval("PT3H");
$dt=new DateTime();
//la methode add($periode):permet d'ajouter
//

//la methode diff:retourne la differnce
//entre deux dates donnees
$dt1=new DateTime('2002-08-22');
$dt2=new DateTime('2003-12-09');
$difference = $dt2->diff($dt1);
echo "la differnce en annees entre les deux dates est: ".$difference->y."<br>";
echo "la differnce en mois entre les deux dates est: ".$difference->m."<br>";
echo "la differnce en jours entre les deux dates est: ".$difference->d."<br>";

?>