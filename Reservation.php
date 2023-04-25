<?PHP
class Reservation{
    private Chambre $_nChambre;
    private Client $_client;
    private DateTime $_dateDebut;
    private DateTime $_dateFin;
    public static $counter = 0;

    public function __construct(Client $client,Chambre $nChambre,string $dateDebut,string $dateFin){
        $this->_client = $client;
        $this->_nChambre = $nChambre;
        $this->_dateDebut = new DateTime($dateDebut);
        $this->_dateFin = new DateTime($dateFin);

        $this->_client->addReservation($this);
        $this->_nChambre->addReservation($this);
        $this->_nChambre->setReserver(true);
        self::$counter++;
    }

    public function getNChambre(){
        return $this->_nChambre;
    }
    public function setNChambre($nChambre){
        $this->_nChambre = $nChambre;
    }

    public function getClient(){
        return $this->_client;
    }
    public function setClient($client){
        $this->_client = $client;
    }

    public function getDateDebut(){
        return $this->_dateDebut;
    }
    public function setDateDebut($dateDebut){
        $this->_dateDebut = $dateDebut;
    }

    public function getDateFin(){
        return $this->_dateFin;
    }
    public function seDateFin($dateFin){
        $this->_dateFin = $dateFin;
    }

    public function getNbrReservation(){
        return self::$counter;
    }

    public function sejour(){
        $result ="";
        $difference = $this->getDateFin()->diff($this->getDateDebut());
        
        $annees = $difference->format('%y');
        $mois = $difference->format('%m');
        $jours = $difference->format('%d');

        $result =  $annees *365 + $mois*60 + $jours;
        return $result;
    }
    

}
?>