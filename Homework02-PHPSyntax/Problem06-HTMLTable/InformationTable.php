<?php
    createTable('Gosho', '0882-321-423', 24, 'Hadji Dimitar');
    createTable('Pesho', '0884-888-888', 67, 'Suhata Reka');

    function createTable($name, $phone, $age, $adress){
        echo "<table border='1' cellspacing='0' style='width: 240px;'>";
        echo "<tr><td style='background-color: orange; width: 120px'><strong>Name</strong></td><td style='text-align: right;'>$name</td></tr>";
        echo "<tr><td style='background-color: orange; width: 120px'><strong>Phone</strong></td><td style='text-align: right;'>$phone</td></tr>";
        echo "<tr><td style='background-color: orange; width: 120px'><strong>Age</strong></td><td style='text-align: right;'>$age</td></tr>";
        echo "<tr><td style='background-color: orange; width: 120px'><strong>Adress</strong></td><td style='text-align: right;'>$adress</td></tr>";
        echo "</table>";
        echo "<br>";
    };

?> 