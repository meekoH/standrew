<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - News/Events</title>
        <style>
            .news-sub {
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
                    News / Events
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>InsideOut Magazine</h1>

                    <p>Our four yearly editions of Inside Out are usually available in the Narthex of the church.</p>

                    <img src="img/News/InsideOut/Spring_2017_Cover.jpg" class="quiet-garden-img" style="max-width:50%;margin:0 15px 15px 0;">
                    <p>Digital editions available to view or download below:<br>
                        <a href="pdf/InsideOut/Spring_2017_InsideOut.pdf" target="_blank">Spring, 2017</a><br>
                        <a href="pdf/InsideOut/Winter_2017_InsideOut.pdf" target="_blank">Winter, 2017</a><br>
                        <a href="pdf/InsideOut/Fall_2016_InsideOut.pdf" target="_blank">Fall, 2016</a><br>
                        <a href="pdf/InsideOut/Spring_2016_InsideOut.pdf" target="_blank">Spring, 2016</a><br>
                        <a href="pdf/InsideOut/Winter_2016_InsideOut.pdf" target="_blank">Winter, 2016</a><br>
                        <a href="pdf/InsideOut/Fall_2015_InsideOut.pdf" target="_blank">Fall, 2015</a><br>
                        <a href="pdf/InsideOut/Summer_2015_InsideOut.pdf" target="_blank">Summer, 2015</a><br>
                        <a href="pdf/InsideOut/Spring_2015_InsideOut.pdf" target="_blank">Spring, 2015</a><br>
                        <a href="pdf/InsideOut/Winter_2015_InsideOut.pdf" target="_blank">Winter, 2015</a><br>
                        <a href="pdf/InsideOut/Fall_2014_InsideOut.pdf" target="_blank">Fall, 2014</a><br>
                        <a href="pdf/InsideOut/Summer_2014_InsideOut.pdf" target="_blank">Summer, 2014</a><br>
                        <a href="pdf/InsideOut/Winter_2014_InsideOut.pdf" target="_blank">Winter, 2014</a><br>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#news').addClass('selected');
        $('#news-responsive').addClass('selected');
        $('#insideOut').addClass('selected');
    </script>
</html>