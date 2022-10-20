<?php 

require_once 'abstrak.php';
require_once 'layer.php';

class Animal  
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function home()
    {
        return $this->name . ' kembali pulang';
    }
}

class Manusia2 extends Animal {}

class Airplane2 extends Vehicle implements Flyer
{
    public function __construct($maxLoad, $name)
    {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }
    
    public function takeOff()
    {
        return "$this->name meninggalkan Bandara";
    }
    
    public function land()
    {
        return "$this->name mendarat menuju Bandara terdekat";
    }

    public function fly()
    {
        return "$this->name menerjang Badai";
    }

    public function calcFuelNeeds()
    {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();

        
        
        return ceil($fuel /= $trip);
    }
}

class Superman2 extends Manusia2 implements Flyer
{
    public function takeOff()
    {
        return "$this->name menyelamatkan orang terjatuh dari gedung tinggi";
    }
    
    public function land()
    {
        return "$this->name menghentikan kecelakaan lalu lintas";
    }

    public function fly()
    {
        return "$this->name terbang menuju ke markas utama musuh";
    }

    public function leapBuilding()
    {
        return "$this->name melompat antara gedung satu ke gedung yang lainnya";
    }

    public function stopBullet()
    {
        return "$this->name ditembaki pencuri namun dihindari";
    }
}

$puma = new Animal('Kenari');
$manusia = new Manusia2('John');
$airplane2 = new Airplane2(15000, 'Garuda Indonesia');
$superman2 = new Superman2('Superman');