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
                    <h1>Summer Arts &amp; Music Camp</h1>

                    <h3>"Ode to Joy - a Work in Progress"</h3>

                    <img src="img/summer-camp-img1.jpg" class="quiet-garden-img" style="max-width:49%;margin:0 0 15px 0;border:none;">
                    <img src="img/summer-camp-img2.jpg" class="quiet-garden-img" style="max-width:49%;margin:0 0 15px 0;float:right;">

                    <p style="clear:both;">The success of last year's Oliver Jones Concert has providedconcert 4 the resources for our first Music and Arts Summer Workshop, Designed for children from ages 4 - 12, it welcomed participants from both Tyndale St-Georges as well within our congregation to partner and collaborate in the presentation of a multi-disciplinary concert on July 19.</p>

                    <p>The youngsters were led by professional instructors, supported by youth counselors and learned techniques in music, theatre, percussion, singing and dance, as well as set and costume design. The workshops included outdoor play complete with fresh and nutritious snacks and lunches.</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#outreach').addClass('selected');
        $('#outreach-responsive').addClass('selected');
        $('#summerCamp').addClass('selected');
    </script>
</html>