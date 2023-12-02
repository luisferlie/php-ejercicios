<?php
if (isset($_GET)) {

    var_dump($_GET);

    $distancia = $_GET["distancia"];
    $med_inicial = $_GET['distInicial'];
    $med_final = $_GET["distFinal"];
    $dist_inicial = $_GET["distancia"];
    $dist_final = null;
    echo "med-inicial: $med_inicial;  med_final=$med_final ;dist-inicial=$dist_inicial ;dist_final=$dist_final";
    echo "<br>";

    switch ($med_inicial) {
        case "cm":
            if ($med_final = "m") {

                $dist_final = $dist_inicial / 100;
            }
            if ($med_final = "cm") {

                $dist_final = $dist_inicial;
            }
            if ($med_final = "km") {

                $dist_final = $dist_inicial / 100000;
            }

        case "km": {
                switch ($med_final) {
                    case "m":
                        $dist_final = $dist_inicial * 1000;
                        break;

                    case "cm":
                        $dist_final = $dist_inicial * 10000;
                        break;

                    case "km":
                        $dist_final = $dist_inicial;
                        break;
                };
            };
        case "m": {
                switch ($med_final) {
                    case "m":
                        $dist_final = $dist_inicial;
                        break;

                    case "cm":
                        $dist_final = $dist_inicial * 100;
                        break;

                    case "km":
                        $dist_final = $dist_inicial * 0.001;
                        break;
                };
            };
    }
    echo "$dist_inicial $med_inicial son $dist_final $med_final";
} else {
    echo "np work";
}
/* /*TODO pendiente de revisar */