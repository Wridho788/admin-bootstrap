<?php
require("conf/conn.php");

$updateTgl = date("Y-m-d");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<table style="border: 1px solid;">
    <thead>
        <tr>
            <th>revenue mtd</th>
            <th>last month</th>
            <th>MTD</th>
    <tbody>
        <tr>
            <td>RP
                <?php
                $queryMTD = "select SUM(revenue) as revenue_mtd from excel where date between '2020-01-01' and '2020-01-11'";
                $dataMtD = mysqli_query($koneksi, $queryMTD);
                while ($row = mysqli_fetch_assoc($dataMtD)) {
                    $row['revenue_mtd'];
                    echo number_format($row['revenue_mtd']);
                }
                ?>
            </td>
            <td>
                RP
                <?php
                $queryLM = "select SUM(revenue) as revenue_mtd from excel where date between '2019-12-01' and '2020-01-01'";
                $dataLM = mysqli_query($koneksi, $queryLM);
                while ($row = mysqli_fetch_assoc($dataLM)) {
                    $row['revenue_mtd'];
                    echo number_format($row['revenue_mtd']);
                }
                ?>
            </td>

            <td>RP
                <?php
                $queryMTD = "select SUM(revenue) as revenue_mtd from excel where date between '2020-01-01' and '2020-01-31'";
                $dataMtD = mysqli_query($koneksi, $queryMTD);
                while ($row = mysqli_fetch_assoc($dataMtD)) {
                    $row['revenue_mtd'];
                    echo number_format($row['revenue_mtd']);
                }
                ?>
            </td>
        </tr>
    </tbody>
    </thead>

</table>

<table style="margin-top: 10px; borde: 1px solid;">
    <thead>
        <tr>
            <th>
                l1 - sms p2p
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                Rp.
                <?php
                $querySMS = "select excel.l1, excel.date, excel.revenue from excel WHERE excel.l1 = 'SMS P2P' AND excel.date BETWEEN '2020-01-01' and '2020-01-14' = (SELECT SUM(revenue) as revenue_sms from excel WHERE excel.l1 = 'SMS P2P' AND excel.date BETWEEN '2020-01-01' and '2020-01-14')";
                $dataSMS = mysqli_query($koneksi, $querySMS);
                while ($row = mysqli_fetch_assoc($dataSMS)) {
                    $row['revenue_sms'];
                    $hasil_rupiah = " " . number_format($row['revenue_sms'], 2, ',', '.');
                    echo $hasil_rupiah;
                }
                ?>
                B
            </td>
        </tr>
    </tbody>
</table>

<body>

</body>

</html>