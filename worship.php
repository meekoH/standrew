<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Worship</title>
        <style>
            .worship-sub {
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
                    Worship
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>Worship</h1>
                    
                    <img src="img/worship-img1.jpg" class="quiet-garden-img">
                    <p>We gather in worship every Sunday morning at 11:00, preceded by a period of quiet meditation at 10:45.  We hold special services in the weeks leading up to Christmas and Easter. If you're familiar with Christian services, you will feel pretty much at home; if you're not, please ask one of the ushers at the door who will be glad to offer some guidance.</p>

                    <p>Services begin with the entrance of the choir and ministers. We stand to sing and we remain seated for prayer. You will find envelopes in the pews which you can use for your offering and to permit ministers to follow up with you, if you wish. We hope the Holy Spirit will touch you with beautiful traditional music and the Word of God. Services end with the departure of the choir and the benediction.</p>

                    <p>After the service, Coffee and Fellowship provides an informal occasion for old friends to meet and new friends to get acquainted.</p>

                    <p>Worship with us. We welcome you in His Name!</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#worship').addClass('selected');
        $('#worship-responsive').addClass('selected');
    </script>
</html>