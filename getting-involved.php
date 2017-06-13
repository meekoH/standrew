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
                    <h1>Getting Involved</h1>

                    <h3>If you'd like to help out there's always a need for willing hearts and hands. And there are many opportunities:</h3>

                    <ul class="church-list" style="margin-bottom:15px;">
                        <li>Ushering</li>
                        <li>Hosting Coffee &amp; Fellowship</li>
                        <li>Serving on a Committee</li>
                        <li>Occasional Service on Special Projects</li>
                    </ul>

                    <img src="img/partners-img1.png" class="quiet-garden-img" style="max-width:50%;margin:0 15px 15px 0;">
                    <p>If you would like to put your time and talents to work, please contact the <a href="mailto:outreach@standrewstpaul.com">Outreach Committee</a>. If you would like to <span style="font-weight:700;">volunteer</span> for the many organizations we help support, please look over the list of our <a href="partners.php">Partners</a>. If you would like to join the choir, please contact the <a href="mailto:music@standrewstpaul.com">Music Department</a>.</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#outreach').addClass('selected');
        $('#outreach-responsive').addClass('selected');
        $('#gettingInvolved').addClass('selected');
    </script>
</html>