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
                    <h1>What is a Presbyterian?</h1>

                    <h3>Being Presbyterian...</h3>
                    <p>We are a tradition that rests firmly on our theology and our doctrine.  Our tradition prizes scholarship. We accept the imperfect nature of our lives, both individually and collectively. We struggle against sin and acknowledge that, the church that we received from our forbearers, and that which we create, are not perfect - hence our belief - that although we are reformed, we are in constant need of further reform.</p>

                    <p>So much of our tradition is still recognizable in the contemporary church, that it adds a timelessness that transcends the fashion of the day. If we continue to value it and to give it bold expression in times when its popularity is low, we will have left a priceless legacy to those who come after us. For more details, read the statement of our faith from the <a href="http://presbyterian.ca/" target="_blank">Presbyterian Church in Canada</a>.</p>

                    <p style="text-align:center;">Fathers of the Protestant Reformation</p>

                    <div class="presbyterian-container">
                        <div class="presbyterian-founder">
                            <img src="img/presbyterian-img1.jpg" style="width:100%;">
                            <p>Martin Luther<br>( <span style="color:#149371;">1483</span> - <span style="color:#149371;">1546</span> )</p>
                        </div>
                        <div class="presbyterian-founder" style="margin:0 2%;">
                            <img src="img/presbyterian-img2.jpg" style="width:100%;">
                            <p>John Calvin<br>( <span style="color:#149371;">1509</span> - <span style="color:#149371;">1564</span> )</p>
                        </div>
                        <div class="presbyterian-founder">
                            <img src="img/presbyterian-img3.jpg" style="width:100%;">
                            <p>John Knox<br>( <span style="color:#149371;">1510</span> - <span style="color:#149371;">1572</span> )</p>
                        </div>
                    </div>

                    <h3>A Little History...</h3>
                    <p>Martin Luther became the focal point for reform following his posting of 95 theses on the door of the Castle Church in Wittenberg in 1517. The cardinal points in Luther’s theology were the sovereignty of Scripture, justification by faith alone (rather than through good works), and the priesthood of all believers.</p>

                    <p>In Geneva, John Calvin's writing and preaching provided the seeds for the branch of theology that bears his name, inspired Presbyterianism and other Reformed churches. We celebrated the 500th anniversary of his birth in 2009.</p>

                    <p>The reform was carried to Scotland by John Knox. Presbyterianism came to Canada with the establishment of a congregation in Truro, Nova Scotia, in 1760. Today the Presbyterian Church in Canada has 124,000 members in 976 congregations and 46 presbyteries – two of which are Korean.</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#worship').addClass('selected');
        $('#worship-responsive').addClass('selected');
        $('#presbyterian').addClass('selected');
    </script>
</html>