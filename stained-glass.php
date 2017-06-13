<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - About</title>
        <style>
            .about-sub {
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
                    About Us
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>Our Stained Glass Windows</h1>
                    
                    <p>The modern style of our stained glass windows, on both sides of the Sanctuary, represent events in the life of Jesus and the life of the Church. The lower windows are memorials, mostly from the former St. Paul's Church. The St. Paul window overlooks the church from the back, and the Memorial Window from the front.</p>

                    <p>As you walk down the center aisle of the church, you will notice two very different kinds of stained glass windows along the walls of the Nave. The upper, or Clerestory, windows are the work of Lawrence Lee, A.R.C.A., and were installed in the 1960s. The five on your left depict events in the life of Jesus: the Nativity in a traditional setting (but if you look closely, you will notice that the Wise Men have a Canadian flair). Next you will see: the Baptism by St. John; the Calling of St. Andrew; Blessing the Children; and the Passion. The five on the right depict events in the history of the Church: the Resurrection; the Calling of St. Paul; St. Paul's Mission to Macedonia; St. Columba of Iona; and The Church Triumphant. The window depicting the Calling of St. Andrew, the first of the clerestories to be installed, was unveiled by Her Majesty Queen Elizabeth, the Queen Mother, on the occasion of her visit on Sunday, June 10, 1962.</p>

                    <p>The lower tier windows are memorials, most of them carefully removed from the former St. Paul's Church and re-installed here. Of particular interest are the two Allan windows near the back on your left. They are the work of the famed William Morris Co. to a design by Sir Edward Burne-Jones, the Pre-Raphaelite artist.</p>

                    <div id="stained-slider">
                        <ul class="slides">
                            <li>
                                <img src="img/Gallery/Stained_Glass/stained-img1.jpg">
                                <p class="flex-caption">The Nativity Window</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Stained_Glass/stained-img2.jpg">
                                <p class="flex-caption">Stained glass illuminates the choir as they enter the Sanctuary</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Stained_Glass/stained-img3.jpg">
                                <p class="flex-caption">The Memorial Window at the front of the Sanctuary</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Stained_Glass/stained-img4.jpg">
                                <p class="flex-caption">The St. Paul window over the gallery</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Stained_Glass/stained-img5.jpg">
                                <p class="flex-caption">Close up of the St. Paul window</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Stained_Glass/stained-img6.jpg">
                                <p class="flex-caption">Mary in one of the windows</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Stained_Glass/stained-img7.jpg">
                                <p class="flex-caption">Window Detail</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Stained_Glass/stained-img8.jpg">
                                <p class="flex-caption">Window Detail</p>
                            </li>
                        </ul>
                    </div>
                    <div id="stained-carousel">
                        <ul class="slides">
                            <li><img src="img/Gallery/Stained_Glass/stained-img1-thumb.jpg"></li>
                            <li><img src="img/Gallery/Stained_Glass/stained-img2-thumb.jpg"></li>
                            <li><img src="img/Gallery/Stained_Glass/stained-img3-thumb.jpg"></li>
                            <li><img src="img/Gallery/Stained_Glass/stained-img4-thumb.jpg"></li>
                            <li><img src="img/Gallery/Stained_Glass/stained-img5-thumb.jpg"></li>
                            <li><img src="img/Gallery/Stained_Glass/stained-img6-thumb.jpg"></li>
                            <li><img src="img/Gallery/Stained_Glass/stained-img7-thumb.jpg"></li>
                            <li><img src="img/Gallery/Stained_Glass/stained-img8-thumb.jpg"></li>
                        </ul>
                    </div>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#about').addClass('selected');
        $('#about-responsive').addClass('selected');
        $('#stainedGlass').addClass('selected');
    </script>
</html>