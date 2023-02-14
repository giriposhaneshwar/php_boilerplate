<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Asian Foods</title>
        <script
            src="https://code.jquery.com/jquery-3.6.3.js"
            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <link href="./assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/css/theme.css" rel="stylesheet" type="text/css" />

        <link href="./templates/slider/slider.css" rel="stylesheet" type="text/css" />

        <link href="./assets/css/styles.css" rel="stylesheet" type="text/css" />

        <script src="./assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="./assets/js/scripts.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container-fluid noPad">
            <section>
                <div class="col">
                    <div class="section">
                        <div class="headerSection">
                            <div class="logoSection">Logo <span class="res">A</span></div>
                            <div class="navContainer">
                                <?php
                                foreach ($nav as $key => $value) {
                                    $isActive = ($value["link"] == $params["page"]) ? 'active' : 'inactive';
                                    echo '<div class="navItem">'
                                    . '<a href="' . $baseUrl . $value["link"] . '" class="' . $isActive . '">' . $value["label"] . ''
                                    . '</a>'
                                    . '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <?php
                    if ($params["page"] == "home") {
                        echo slider("chicken");
                    }
                    ?>
                </div>
            </section>