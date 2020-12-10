<?php 
require("conf/conn.php");

$query = "select count(*) as revenue from excel where date between '2019-01-01' and '2019-02-01'";
$data = mysqli_query($koneksi,$query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1px">
    <tr>
       
        <!-- <th>date</th> -->
        <!-- <th>du last month</th> -->
        <th>du last month</th>
    </tr>
 
    <?php while($row = mysqli_fetch_assoc($data)){ ?>
    <tr>
       
        <td>Rp. <?php 
        echo $row['revenue'];
        echo number_format($row['revenue'],2);  ?> B</td>
    </tr>
    <?php
     } // end while
    
    ?>
    
    </table>
    
    <h1> broadband </h1>
    <table border="1px">
    <tr>
       <th>broadband</th>
    </tr>
 
    <?php while($row_broadband = mysqli_fetch_assoc($data_broadband)){?>
    <tr>
    <td>Rp. <?php 
        echo $row_broadband['revenue'];
        echo number_format($row_broadband['revenue'],2);  ?> B</td>
        <td></td>
    </tr>
    <?php 
    }
    ?>
    
    </table>
</body>

</html>