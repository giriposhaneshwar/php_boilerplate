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

        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <link href="<?php echo $baseUrl; ?>/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $baseUrl; ?>/assets/css/theme.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $baseUrl; ?>/assets/css/slider.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo $baseUrl; ?>/assets/css/styles.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo $baseUrl; ?>/assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $baseUrl; ?>/assets/js/scripts.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container-fluid noPad">
            <section>
                <div class="col">
                    <div class="section">
                        <div class="headerSection">
                            <div class="logoSection"><img src="<?php echo $baseUrl; ?>/assets/images/logo.png" height="80" /></div>
                            <div class="navContainer">
                                <?php
                                foreach ($main_nav as $key => $value) {
                                    $isActive = ($value["link"] == $page) ? 'active' : 'inactive';
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
                    <div class="productSection">
                        <?php
                        foreach ($product_nav as $key => $value) {
                            $isActive = ($value["link"] == $page) ? 'active' : 'inactive';
                            echo '<div class="product_navItem">'
                            . '<a href="' . $baseUrl . $value["link"] . '">'
                            . '<span><img src="'.$baseUrl.'assets/images/icons/'.$value["icon"].'" /></span>'
                            . '<b>' . $value["name"] . '</b>'
                            . '</a>'
                            . '</div>';
                        }
                        ?>

                    </div>
                </div>
                <div class="col">
                    <?php
                    if ($page == "home") {
                        $dir = isset($product) && !empty($product) ? $product : "default";
                        $rs = '<div class="sliderContainer">';
                        if (count($arrFiles) > 0) {
                            foreach ($arrFiles as $slide) {
                                $img = $baseUrl . 'assets/images/slider/' . $dir . '/' . $slide;
                                $rs .= '<div class="sliderItem"> '
                                        . '<img class="sliderImg" src="' . $img . '" width="100%" alt="slider image"/>'
                                        . '</div>';
                            }
                        }
                        $rs .= "</div>";

                        echo $rs;
                    }
                    ?>
                </div>
            </section>