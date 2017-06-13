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
                    <h1>Stephen Ministry</h1>
                    <div style="overflow:hidden;margin-bottom:15px;">
                        <img src="img/stephen-img2.jpg" style="width:35%;float:left;">
                        <img src="img/stephen-img1.jpg" style="width:50%;float:right;">
                    </div>
                    <p>The Stephen Ministry Logo symbolizes that we are all broken people and that it is through the love of Christ that we are made whole.</p>
                    <p><span style="font-style:italic;">"Bear one another’s burdens, and in this way you will fulfill the law of Christ."</span><br>
                        - <span style="color:#149371;">Galatians 6:2</span></p>

                    <p>Stephen Ministers are lay people - Christian men and women - trained to provide one-to-one care to people experiencing a difficult time in life, such as grief, loneliness, divorce, job loss, chronic or terminal illness, relocation.</p>

                    <p>Stephen Ministers come from all walks of life and have a passion for bringing Christ’s love and care to people during a time of need.</p>

                    <p>Stephen Ministers are trained by their congregation’s Stephen Leaders. The training they receive in the congregation equips them to provide high-quality care to people who are hurting. A Stephen Minister begins a caring relationship when he or she is matched with a person experiencing a life crisis. The Stephen Minister then meets with that person on a weekly basis to listen, care, encourage, and provide emotional and spiritual support. The caring relationship lasts as long as the person is in need of care.</p>

                    <p>There are times when each of us needs the care of another person... a Christian friend... a Stephen Minister. If you are dealing with any of the following challenges in your life, please contact us so that we can help.</p>

                    <p style="font-weight:700;">Contact Diana Veenstra or Edythe Arnott, Stephen Leaders at <a href="mailto:secretary@standrewstpaul.com">secretary@standrewstpaul.com</a> or call 514.842.3431</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#about').addClass('selected');
        $('#about-responsive').addClass('selected');
        $('#stephenMinistry').addClass('selected');
    </script>
</html>