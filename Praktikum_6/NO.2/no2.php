<?php 

require_once 'layer.php';

class Airplane implements Flyer {
    public function takeOff() {
        return 'Pesawat meninggalkan Bandara';
    }
    
    public function land() {
        return 'Pesawat mendarat menuju Bandara terdekat';
    }

    public function fly() {
        return 'Pesawat menerjang Badai';
    }
}

class Bird implements Flyer {
    public function takeOff() {
        return 'Burung menghindari Pemburu';
    }
    
    public function land() {
        return 'Burung kembali ke sarangnya';
    }

    public function fly() {
        return 'Burung mengejar mangsanya di langit';
    }

    public function buildNest() {
        return 'Burung membuat sarang';
    }

    public function layEggs() {
        return 'Burung bertelur';
    }
}

class Superman implements Flyer {
    public function takeOff() {
        return 'Superman menyelamatkan orang terjatuh dari gedung tinggi';
    }
    
    public function land() {
        return 'Superman menghentikan kecelakaan lalu lintas';
    }

    public function fly() {
        return 'Superman terbang menuju ke markas utama musuh';
    }

    public function leapBuilding() {
        return 'Superman melompat antara gedung satu ke gedung yang lainnya';
    }

    public function stopBullet() {
        return 'Superman ditembaki pencuri namun dihindari';
    }
}

$airplane = new Airplane;
$bird = new Bird;
$superman = new Superman;