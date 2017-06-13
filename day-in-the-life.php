<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Worship</title>
        <style>
            .worship-sub {
                display: block;
            }
            iframe { min-height:500px;margin-bottom:15px; }
            @media screen and (max-width: 959px) and (min-width: 565px) {
                iframe { min-height:350px; }
            }
            @media screen and (max-width: 564px) {
                iframe { min-height:250px; }
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
                    <h1>Day in the Life - 2015</h1>

                    <iframe src="http://livestream.com/accounts/2740376/events/5038866/videos/116651310/player?width=480&height=270&autoPlay=false&mute=false" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#worship').addClass('selected');
        $('#worship-responsive').addClass('selected');
        $('#dayLife').addClass('selected');
    </script>
</html>
