<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Outreach</title>
        <style>
            .outreach-sub {
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
                    Outreach
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>ReachOut with Music</h1>

                    <h3>We share this wonderful and powerful joint ministry with partners in the Worship & Music Committee. Some highlights of the past year:</h3>

                    <img src="img/outreach-music-img1.jpg" class="quiet-garden-img" style="max-width:50%;margin:0 15px 5px 0;">

                    <p>Our Tyndale St-Georges Saturday Morning Music classes, led by Françoise Morin-Lyons, began in the fall of 2012, as an introduction to music for seven children.  It has grown to lessons to 23 children. Equally exciting are our musical activites for 2014 which emply all of the individual instruments that were to graciously given to us for the program - guitars, keyboards, violins, xylophone percussion sets. We also hope to add music teachers to the program.</p>

                    <p>Our Hymn Sing group has been active thanks to Dr. Jacqueline McClaran and a host of joyful singers, with visits to several seniors' residences and hospitals over the past year, sharing joy through music, and provided music for residents at Manoir Westment during two Ecumenical services led by the Rev. Veenstra. We're always pleased to welcome new singers - enthusiasm counts as much as talent.</p>

                    <p>If you would like to participate or contribute to ReachOut with Music, please <a href="mailto:outreach@standrewstpaul.com">contact us</a>.</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#outreach').addClass('selected');
        $('#outreach-responsive').addClass('selected');
        $('#outreachMusic').addClass('selected');
    </script>
</html>