<h1>Exercice Cinema</h1>

<p>A partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations de chambres par des clients dans différents hôtels :</p>

<h2>Résultat</h2>
<style>

td,
th {

    padding-left: 10px;
    padding-right: 10px;

}

table {
    border-collapse: collapse;
    border: 1px solid black;
}

</style>
<?PHP
include('Hotel.php');
include('Client.php');
include('Chambre.php');
include('Reservation.php');

$Hilton = new Hotel("Hilton","10 route de la Gare 67000 Strasbourg",4);
$Regent = new Hotel("Regent","7 rue de Paris 93000 Pais",3);

$chambre_1 = new Chambre($Hilton,1,2,120,false);
$chambre_2 = new Chambre($Hilton,2,1,120,false);
$chambre_3 = new Chambre($Hilton,3,2,120,false);
$chambre_4 = new Chambre($Hilton,4,2,300,true);
$chambre_5 = new Chambre($Hilton,5,1,300,true);
$chambre_6 = new Chambre($Hilton,6,1,300,true);

$GeorgeL = new Client("George LUCAS");
$LukeS = new Client("Luke SKYWALKER");

$GL_reserv_C_2 = new Reservation($GeorgeL,$chambre_1,"2020-01-18","2020-01-25");
$LS_reserv_C_6 = new Reservation($LukeS,$chambre_6,"2020-03-12","2020-03-15");
$LS_reserv_C_5 = new Reservation($LukeS,$chambre_5,"2020-02-03","2020-02-08");


// var_dump($chambre_2->getReservation()[0]);die;
echo $Hilton->afficherInfos();
echo $Regent->afficherReservations();
echo $Hilton->afficherReservations();
echo $GeorgeL->afficherReservation();
echo $LukeS->afficherReservation();
echo $Hilton->displayStatusChambre();

?>