<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Music</title>
        <style>
            .music-sub {
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
                    Music
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>The Choir</h1>

                    <img src="img/choir-img1.jpg" style="width:100%;border:2px solid #149371;margin-bottom:10px;">

                    <p>Our choir has a total membership of 57 including paid choristers and members from the church and Montreal community. Our first purpose is to provide excellent music for the regular worship services of the Church. In addition, our musical duties include several concerts and choral services throughout the year, especially around Christmas and Easter. Our repertoire is normally sung a cappella or with organ accompaniment, but we also sing with instrumental ensembles during special services and concerts.</p>

                    <p>
                        <a href="http://www.facebook.com/?ref=tn_tnmn#!/MusiqueStAndrewStPaul" target="_blank"><i class="fa fa-facebook-square"></i> Like us on Facebook</a>
                    </p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#music').addClass('selected');
        $('#music-responsive').addClass('selected');
        $('#theChoir').addClass('selected');
    </script>
</html>