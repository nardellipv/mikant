<div class="our-clients">
    <div class="container">
        <div class="our-clients-head text-center">
            <h3>Our Clients</h3>
        </div>
        <!---strat-image-cursuals---->
        <div class="scroll-slider">
            <div class="nbs-flexisel-container">
                <div class="nbs-flexisel-inner">
                    <ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">
                        <li><img src="images/c1.jpg"></li>
                        <li><img src="images/c2.jpg"></li>
                        <li><img src="images/c3.jpg"></li>
                        <li><img src="images/c4.jpg"></li>
                        <li><img src="images/c1.jpg"></li>
                        <li><img src="images/c2.jpg"></li>
                        <li><img src="images/c3.jpg"></li>
                        <li><img src="images/c4.jpg"></li>
                    </ul>
                    <div class="nbs-flexisel-nav-left" style="display:none"></div>
                    <div class="nbs-flexisel-nav-right" style="display:none"></div></div></div>
            <div class="clear"> </div>
            <!---strat-image-cursuals---->
            <script type="text/javascript" src="js/jquery.flexisel.js"></script>
            <!---End-image-cursuals---->
            <script type="text/javascript">
                $(window).load(function() {
                    $(".flexiselDemo3").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });
                });
            </script>
            <!---->
            <!---->
        </div>
    </div>

    <!---//End-signin---->
</div>