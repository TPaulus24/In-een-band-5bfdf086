<?php
echo "het album overzict:  " . PHP_EOL;
$ary = array(
    "4.50" => "Citizen of Glass kost €4,50.",
    "9" => "Night kost €9,-.",
    "5" => "New Eyes kost €5,-.",
    "10" => "Strange Trails kost €10,-."
);
$totaal = 4.5 + 9 + 10 + 5;
$album = count($ary);
$gemm = $totaal / $album;
foreach ($ary as $key){
    echo $key . PHP_EOL;
}
echo "het totaal bedrag is: €$totaal" . PHP_EOL;
echo "de gemiddelde prijs is: €$gemm" . PHP_EOL;