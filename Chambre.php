<?PHP
class Chambre{
    private int $_nChambre;
    private Hotel $_hotel;
    private int $_lits;
    private int $_prix;
    private bool $_is_wifi;
    private bool $_reserver = false;
    private array $_reservation;
    public static $counter = 0;

    public function __construct(Hotel $hotel,int $nChambre,int $lits, int $prix,bool $wifi){
        $this->_hotel = $hotel;
        $this->_nChambre = $nChambre;
        $this->_lits = $lits;
        $this->_prix = $prix;
        $this->_is_wifi = $wifi;
        $this->_reservation =[];

        $this->_hotel->addChambres($this);
        self::$counter++;
    }

    public function getHotel(){
        return $this->_hotel;
    }
    public function setHotel(Hotel $hotel){
        $this->_hotel = $hotel;
    }

    public function getNChambre(){
        return $this->_nChambre;
    }
    public function seNChambre($nChambre){
        $this->_nChambre = $nChambre;
    }

    public function getLits(){
        return $this->_lits;
    }
    public function setLits($lits){
        $this->_lits = $lits;
    }

    public function getPrix(){
        return $this->_prix;
    }
    public function setPrix($prix){
        $this->_prix = $prix;
    }

    public function getReservation(){
        return $this->_reservation;
    }
    public function addReservation(Reservation $reservation){
        $this->_reservation[] = $reservation;
    }

    public function getNbrChambre(){
        return self::$counter;
    }

    public function getReserver(){
        return $this->_reserver;
    }
    public function setReserver($true){
        $this->_reserver = $true;
    }

    public function __toString(){
        $wifi="";
        if($this->_is_wifi){
            $wifi="oui";
        }else{
            $wifi="non";
        }
        return " Chambre: ".$this->_nChambre .
                " (".$this->_lits." lits - ".
                $this->_prix." € - Wifi : ". 
                $wifi." )";
    }

}
?>