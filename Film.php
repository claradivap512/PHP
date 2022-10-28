<?php

class Film{
    //member 1 : variabel
    public $connect;

    //member 2 : construct
    public function __construct(){
        global $dbh;
        $this->connect = $dbh;
    }

    public function dataFilm()
    {
        $sql = "SELECT f.*, age.rating_usia FROM film f
                INNER JOIN age_rating age ON f.agerating_id = age.id";
        $ps = $this->connect->prepare($sql);
        $ps->execute();
        $data_film = $ps->fetchAll();
        return $data_film;
    }
}

?>