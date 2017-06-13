<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Worship</title>
        <style>
            .worship-sub {
                display: block;
            }
        </style>
    </head>
    <body>
    	<div class="wrapper">
            <?php require_once('components/header.html'); ?>
            <?php require_once('components/navigation.html'); ?>
            <div class="nav-toggle-container">
                <a href="#nav" class="nav-toggle"></a>
            </div>
            <?php require_once('components/responsive-nav.html'); ?>
            <div class="secondary-banner-container">
                <div class="secondary-banner">
                    Worship
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>Holy Communion</h1>

                    <p>Six times a year, we celebrate Holy Communion in the sanctuary of our church. These are World Communion Sunday, Advent I, Lent I, Easter, the Last Sunday in May and Maundy Thursday. The weeks following our Sunday morning communion services we hold a smaller celebration of Holy Communion in the chapel of the sanctuary following the regular 11:00 a.m. service.</p>

                    <div id="communion-slider">
                        <ul class="slides">
                            <li>
                                <img src="img/Gallery/Communion/communion-img1.jpg">
                                <p class="flex-caption">Easter Communion</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Communion/communion-img2.jpg">
                                <p class="flex-caption">The Bread</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Communion/communion-img3.jpg">
                                <p class="flex-caption">The Cup</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Communion/communion-img4.jpg">
                                <p class="flex-caption">The Lord's Table</p>
                            </li>
                        </ul>
                    </div>
                    <div id="communion-carousel" style="margin-bottom:15px;">
                        <ul class="slides">
                            <li><img src="img/Gallery/Communion/communion-img1-thumb.jpg"></li>
                            <li><img src="img/Gallery/Communion/communion-img2-thumb.jpg"></li>
                            <li><img src="img/Gallery/Communion/communion-img3-thumb.jpg"></li>
                            <li><img src="img/Gallery/Communion/communion-img4-thumb.jpg"></li>
                        </ul>
                    </div>

                    <p><a href="special-services.php"><i class="fa fa-arrow-circle-o-left"></i> Back to Special Services</a></p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#worship').addClass('selected');
        $('#worship-responsive').addClass('selected');
        $('#specialServices').addClass('selected');
    </script>
</html>