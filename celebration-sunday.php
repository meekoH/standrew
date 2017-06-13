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
                    <h1>Celebration Sunday</h1>

                    <img src="img/celebration-sunday-img1.jpg" class="quiet-garden-img" style="max-width:50%;margin:0 15px 15px 0;">

                    <p>Every year on the third Sunday in January, the Mission &amp; Outreach Committee and the Guild celebrate the twenty-plus local service organizations our church helps support financially, and often through members' time and talent.</p>

                    <p>Once again, on January 18, representatives of the agencies joined us for an inspirational worship service, and a Kildonan Hall reception where we learned more about their dedication and passion for the hungry, the young, the sick, the abused and the forgotten in our city. We are grateful for all they do.</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#outreach').addClass('selected');
        $('#outreach-responsive').addClass('selected');
        $('#celebrationSunday').addClass('selected');
    </script>
</html>