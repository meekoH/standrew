<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Worship</title>
        <style>
            .worship-sub {
                display: block;
            }
            .quiet-garden-img {
                max-width: 50%;
                margin-right: 15px;
            }
            @media screen and (max-width: 959px) and (min-width: 565px) {
                .quiet-garden-img {
                    max-width: 100%;
                    margin: 0 0 15px;
                }
            }
            @media screen and (max-width: 564px) {
                .quiet-garden-img {
                    max-width: 100%;
                    margin: 0 0 15px;
                }
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
                    <h1>Taiz&eacute; Services</h1>

                    <img src="img/taize-img1.jpg" class="quiet-garden-img">
                    <h3>Taiz&eacute; Service of Prayer, Contemplation &amp; Song</h3>

                    <p>Join us for our Taizé Services – every third Wednesday of the month.</p>

                    <!-- <p><span style="font-weight:700;">Date</span>: Wednesday, June 17, 2015</p> -->

                    <p><span style="font-weight:700;">Time</span>: 18:00</p>
                    
                    <p><span style="font-weight:700;">Where</span>: Church of St Andrew and St Paul</p>

                    <p>In the midst of our hectic lives, many people long for the peace and refreshment that only God can give. Our Taiz&eacute; Service of Prayer, Contemplation, and Song offers the chance to gather quietly in meditative common prayer using the beautiful and simple songs of the Taiz&eacute; Community in France. Serene and uplifting, the music of Taiz&eacute; helps us to deepen our sense of prayer and of God’s presence.</p>

                    <p>Taiz&eacute; Prayer services are held on every third Wednesday of the month from September to June.</p>

                    <!-- <p>Taiz&eacute; services will resume in September.</p> -->

                    <h3>All are welcome to this quiet and simple prayer service.</h3>

                    <h1 style="margin-bottom:0;padding-bottom:0;border-bottom:none;font-style:italic;">"Come, let us pray together!"</h1>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#worship').addClass('selected');
        $('#worship-responsive').addClass('selected');
        $('#taizeServices').addClass('selected');
    </script>
</html>