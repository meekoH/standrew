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
                    <h1>Reaching Out To The Community</h1>
                    
                    <p><span style="font-style:italic;">"Preach the gospel at all times and when necessary use words."</span><br>
                        - <span style="color:#149371;">St. Francis of Assisi</span></p>

                    <img src="img/outreach-img1.jpg" style="width:100%;border:2px solid #149371;margin-bottom:15px;">

                    <h3>Mission and Outreach to our city, our country and our world!</h3>

                    <p>The Mission &amp; Outreach Committee is just one channel through which our church tries to live and walk in the way that Jesus taught us. The generosity of our congregation helps support more than 20 local service organizations, nourishes a deep friendship with the Saskatoon Native Circle Ministry, maintains an historic relationship with Tyndale St-Georges Community Centre, shares the gospel of music with young and old, touches the suffering in far-off missions through Presbyterian World Service &amp; Development, and celebrates our growing intercultural community.</p>

                    <p style="font-weight:700;">We welcome your ideas, and if you're looking for a way to "give back" for the blessings you receive we know lots of people who can use a lot of help. Just <a href="mailto:outreach@standrewstpaul.com">email us</a> and we'll be in touch.</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#outreach').addClass('selected');
        $('#outreach-responsive').addClass('selected');
    </script>
</html>