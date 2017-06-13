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
                    <h1>Our History</h1>

                    <h3>Tradition and Change...</h3>
                    
                    <p>The first Presbyterian service in Montreal was held in 1787. In 1803, when the city's population was about 9,000, St. Andrew's Church was founded near the present site of city hall on Notre Dame Street. St. Paul's Church was opened nearby in 1843. In 1853, as Montreal grew, St. Andrew's built a new church on Beaver Hall Hill (on the present site of a Bell Canada building). In 1867, St. Paul's Church also decided to move and they built on a site on Dorchester Boulevard, (now boulevard Ren&eacute; L&eacute;vesque) near today’s Queen Elizabeth Hotel. By 1918, the two congregations decided to unite and the present building was erected in 1931-32.  The former St. Paul's church was dismantled and reconstructed just south of the present site of Vanier College in Ville St-Laurent, where it now serves as a museum.</p>

                    <p>As part of our church's bicentennial in 2003, The Rev. Dr. J.S.S. Armour published Saints, Sinners and Scots, a history of our congregation . It is available at the Book Stall in the Narthex.</p>

                    <div id="history-slider">
                        <ul class="slides">
                            <li><img src="img/Gallery/Our_History/history-img1.jpg"></li>
                            <li><img src="img/Gallery/Our_History/history-img2.jpg"></li>
                            <li><img src="img/Gallery/Our_History/history-img3.jpg"></li>
                            <li><img src="img/Gallery/Our_History/history-img4.jpg"></li>
                        </ul>
                    </div>
                    <div id="history-carousel">
                        <ul class="slides">
                            <li><img src="img/Gallery/Our_History/history-img1-thumb.jpg"></li>
                            <li><img src="img/Gallery/Our_History/history-img2-thumb.jpg"></li>
                            <li><img src="img/Gallery/Our_History/history-img3-thumb.jpg"></li>
                            <li><img src="img/Gallery/Our_History/history-img4-thumb.jpg"></li>
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
        $('#ourHistory').addClass('selected');
    </script>
</html>