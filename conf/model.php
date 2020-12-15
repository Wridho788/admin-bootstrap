<?php

// class Model {

//     // function gettahun(){
//     //     $query = $this->koneksi->query( "SELECT YEAR(revenue) as revenue_tahun from excel GROUP BY YEAR(revenue) ORDER BY YEAR(revenue) asc");
//     //     return $query -> result();
//     // }

//     // function filterbytanggal($startdate, $updatedate){
//     //     $query = $this->koneksi->query("SELECT * FROM excel WHERE date BETWEEN '$updatedate' and '$startdate' ORDER BY date asc");
//     //     return $query->result();

//     // }

//     // function filterbybulan($tahun, $bulanawal, $bulanakhir){
//     //     $query = $this->koneksi->query("SELECT * FROM excel where YEAR(revenue)");
//     // }
// }

class Model
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "date_dummy";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (\Throwable $th) {
            //throw $th;
            echo "Connection error " . $th->getMessage();
        }
    }

    public function fetch()
    {
        $data = [];

        $query = "SELECT * FROM excel";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    public function date_range($start_date, $end_date)
    {
        $data = [];

        if (isset($start_date) && isset($end_date)) {
            $query = "SELECT * FROM `excel` WHERE `date` > '$start_date' AND `date` < '$end_date'";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
        }

        return $data;
    }
}


?>

