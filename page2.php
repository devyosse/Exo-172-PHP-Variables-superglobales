<?php
if (!empty($_GET)) {
    if (isset($_GET['name'], $_GET['fname'], $_GET['year'])
        && !empty($_GET['name']) && !empty($_GET['fname']) && !empty($_GET['year'])) {

        $name = $_GET['name'];
        $name = strip_tags(trim($name));

        $fname = $_GET['fname'];
        $fname = strip_tags(trim($fname));

        $year = $_GET['year'];
        $year = (int)$year;
        ?>

        <p>Nom d'utilisateur: <?=$name?></p>
        <p>Prénom d'utilisateur: <?=$fname?></p>
        <p>Votre âge: <?=$year?></p>

        <?php
    }
}
