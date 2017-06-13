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
                    <h1>La Communaut&eacute; Silo&eacute;</h1>

                    <p>We are pleased that three of our elders have been chosen by Montreal Presbytery to accompany this new francophone community as it seeks to formally establish itself as a congregation of the Presbyterian Church in Canada. Their very first service was held in June, 2010. Today, membership is approaching 200, with active children's, women's and music programs. The Rev. Eloi Agbanou leads Sunday services in the Chapel at Presbyterian College. Members, mostly from Africa, happily welcome newcomers from around the world.</p>

                    <img src="img/siloe-img1.jpg" style="width:100%;border:2px solid #149371;margin-bottom:10px;">

                    <p>Silo&eacute; is the French translation of Shiloh, the portable shrine that Moses built in the wilderness, and was placed at Shiloh until the city was destroyed in 1104 BCE. The name is generally understood to mean "the peaceful one," or "he who is to be sent."</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#outreach').addClass('selected');
        $('#outreach-responsive').addClass('selected');
        $('#siloe').addClass('selected');
    </script>
</html>