
</div>
<div class="container-fluid">
    <div class="row">

        <div class="footerSection">
            <div class="section">
                <div class="row">
                    <div class="col-sm-4">
                        <!--                        <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-2">
                                                        <img class="footerLogo" src="<?php echo $baseUrl; ?>/assets/images/logo.png" width="100%" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9 col-lg-10">
                        
                                                    </div>
                                                </div>-->
                        <!--Footer Address Section-->
                        <div class="companyAddress">
                            <!--<div><b style="color: var(--brand-green);">New Asian Foods</b></div>-->
                            <div class="footerBrandHeading"><img src="<?php echo $baseUrl; ?>/assets/images/new_asian_foods.png" width="250px" /></div>
                            <div>D. No. 19-4-340/9/2/1,</div>
                            <div>Kishan Bagh, Bahadurpura,</div>
                            <div>Hyderabad.</div>
                            <br /><!-- comment -->

                            <div><span><img src="<?php echo $baseUrl . 'assets/images/icons/whatsapp.png' ?>" width="22px" /></span> 984 900 3175</div>
                            <div><span><img src="<?php echo $baseUrl . 'assets/images/icons/email.png' ?>" width="22px" /></span> info@asinafood.co.in</div>

                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="brandRefLogoSymbols">
                            <div>
                                <img class="footerLogo" src="<?php echo $baseUrl; ?>/assets/images/certified_logo.png" width="auto" />
                            </div>
                            <div>
                                <img class="footerLogo" src="<?php echo $baseUrl; ?>/assets/images/readyToFry.png" width="auto" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <!--Policy--> 
                        <div class="navFooter">
                            <b>Quick Links</b>
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
        </div>
        <div class="footerCopyRight">
            All rights reserved @asianfoods.com
        </div>
    </div>
</div>
</div>
</body>
</html>