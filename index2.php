<?php
require("conf/conn.php");
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
            <th>MoM</th>
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
            <td>
            <td>
                <?php
                $queryMTD = "select SUM(revenue) as revenue_mtd from excel where date between '2020-01-01' and '2020-01-11'";
                $dataMtD = mysqli_query($koneksi, $queryMTD);
                while ($rowmtd = mysqli_fetch_assoc($dataMtD)) {
                    $rowmtd['revenue_mtd'];
                }
                
                $queryLM = "select SUM(revenue) as revenue_lm from excel where date between '2019-12-01' and '2020-01-01'";
                $dataLM = mysqli_query($koneksi, $queryLM);
                while ($rowlm = mysqli_fetch_assoc($dataLM)) {
                    $rowlm['revenue_lm'];
                }

                // $queryMoM = ("$rowmtd/$rowlm-1/100");
                // $dataMoM = mysqli_query($koneksi, $queryMoM);
                
                // $rowMoM = mysqli_fetch_assoc($dataMoM);
                // $rowMoM['revenue_mom'];

                ?> 
            </td>
            </td>


        </tr>
    </tbody>
    </thead>

</table>

<body>

</body>

</html>