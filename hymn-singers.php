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
                    <h1>Our Hymn Singers</h1>

                    <!-- <p>Our Hymn Singers are a varied group of performers who delight in sharing their music and enthusiasm and are led by <span style="font-weight:700;">Dr. Jacqueline McClaran</span>. In November, they delighted seniors at the Yellow Door Social Club, and in December sang their hearts out in an ecumenical service at Chateau Westmount for seniors, one of whom described the event as the best day she had spent for many years.</p> -->

                    <img src="img/hymn-singers-img1.jpg" class="quiet-garden-img" style="max-width:50%;margin:0 15px 5px 0;">

                    <p>Our Hymn Singers are a varied group of performers who delight in sharing their music and enthusiasm and are led by Dr. Jacqueline McClaran. The group includes singers and instrumentalists from the congregation. In the past, activity has included participating in services in various nursing homes and performing at the Yellow Door Social Club. Recent activity has been through involvement in the worship services led by our church at Manoir Westmount.</p>

                    <p>New participants are always welcome!</p>

                    <p>For more information, please contact Jacqueline McClaran at <a href="mailto:jacqueline.mcclaran@videotron.ca">jacqueline.mcclaran@videotron.ca</a>.</p>

                    <!-- <p>Many thanks to our three voice three part congregational singers and our mini-Hymn Singers Yellow Doororchestra, Sheila Jacob on cello, Crawford Smith on acoustic guitar, and Jacqueline McClaran.</p>

                    <p>Yellow Door members so enjoyed singing along with us, and the lovely sound we all made together, that it was suggested that folks might like to come along to A &amp; P from time to time to hear our REAL choir!</p>

                    <p>The Club members had themselves chosen the format of a sing-along, rather than a concert, and had suggested much of the repertoire. Several Club members asked to keep the hymn  booklets, as they hope to carry on some hymn singing on their own, a great contribution of which A &amp; P congregational singers can be proud!</p> -->
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#outreach').addClass('selected');
        $('#outreach-responsive').addClass('selected');
        $('#hymnSingers').addClass('selected');
    </script>
</html>