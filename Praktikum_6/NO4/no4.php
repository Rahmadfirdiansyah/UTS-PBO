<?php 

require_once 'abstrak.php';
require_once 'layer.php';

class RiverBarge2 extends Vehicle implements Sailer {
    public function __construct($maxLoad, $name) {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }

    public function calcFuelNeeds() {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();
        
        return ceil($fuel /= $trip);
    }

    public function dock() {
        return $this->name . ' berada di dermaga';
    }
    
    public function cruise() {
        return $this->name . ' berlayar menuju lautan';
    }
}

class Airplane2 implements Flyer {
    public function takeOff() {
        return 'Pesawat meninggalkan Bandara';
    }
    public function land() {
        return 'Pesawat mendarat ke Bandara terdekat';
    }
    public function fly() {
        return 'Pesawat menerjang badai';
    }
}

class SeaPlane extends Vehicle implements Sailer {
    public function __construct($maxLoad, $name) {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }

    public function calcFuelNeeds() {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();
       
        return ceil($fuel /= $trip);
    }

    public function dock() {
        return $this->name . ' berada di dermaga';
    }
    
    public function cruise() {
        return $this->name . ' berlayar menuju lautan';
    }

    public function takeOff() {
        return $this->name . ' meninggalkan Bandara';
    }
    
    public function land() {
        return $this->name . ' mendarat ke Bandara terdekat';
    }

    public function fly() {
        return $this->name . ' menerjang badai';
    }
}

class Helicopter extends Vehicle {
    public function __construct($maxLoad, $name) {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }

    public function calcFuelNeeds() {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();
     
        return ceil($fuel /= $trip);
    }
    public function takeOff() {
        return $this->name . ' meninggalkan Bandara';
    }
    
    public function land() {
        return $this->name . ' mendarat ke Bandara terdekat';
    }

    public function fly() {
        return $this->name . ' menerjang badai';
    }
}

$riverBarge2 = new RiverBarge2(15000, 'RMS Titanic');
$seaPlane = new SeaPlane(10000, 'Boeing');
$helicopter = new Helicopter(5000, 'Little Bird');