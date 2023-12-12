<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
</head>
<body>
    <?php

        include("clasesMenu.php");

        $menu = new Menu();

        $menu->add("www.google.com", "Google");
        $menu->add("www.amazon.com", "Amazon");

        $menu->vertical();
        $menu->horizontal();

    ?>
</body>
</html>