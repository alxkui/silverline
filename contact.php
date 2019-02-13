<?php include_once './header.php'; ?>


<nav class="nav-single">
    <div class="other-nav background">
        <div class="container">
            <?php include_once './navigation.php' ?>
        </div>
    </div>
</nav>


<section class="content default">

    <div class="container">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris metus turpis, volutpat et viverra at.</p>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=scotland&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">pureblack.de</a></div><style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>Pure Black Website erstellen</div>
        
        <div class="contact-details">

            <div class="contact-item">
                <span class="brand fas fa-envelope"></span>
                <span class="contact-info">email@silverline.com</span>
            </div>

            <div class="contact-item">
            <span class="brand fas fa-phone"></span>
                <span class="contact-info">02837482123</span>
            </div>

            <div class="contact-item">
            <span class="brand fas fa-building"></span>
                <span class="contact-info">Some address,
                    <br />London,
                    <br />BT99 2XY
                </span>
            </div>

        </div>
    </div>

</section>

<?php include 'form.php' ?>


<?php include_once './footer.php'; ?>