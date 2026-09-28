<?php

for ($numero = 1; $numero <= 10; $numero++) {
    echo "<h3>Tabuada do $numero</h3>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
}
?>
