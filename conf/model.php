<?php
require("conf/conn.php");

class Model_model {

    function gettahun(){
        $query = $this->koneksi->query( "SELECT YEAR(revenue) as revenue_tahun from excel GROUP BY YEAR(revenue) ORDER BY YEAR(revenue) asc");
        return $query -> result();
    }

    function filterbytanggal($startdate, $updatedate){
        $query = $this->koneksi->query("SELECT * FROM excel WHERE date BETWEEN '$updatedate' and '$startdate' ORDER BY date asc");
        return $query->result();

    }

    function filterbybulan($tahun, $bulanawal, $bulanakhir){
        $query = $this->koneksi->query("SELECT * FROM excel where YEAR(revenue)");
    }
}


?>

