<?php
    $xml = simplexml_load_file("http://www.digitalmarketingbox.com/unoapp/webcalendarevents2.php?rss&assetid=34044");
    $items = $xml->{'channel'}->{'item'};
    for ($i = 0; $i < count($xml->{'channel'}->{'item'}); $i++) {
        $md5hash[$i] = md5($items[$i]->{'title'}.$items[$i]->{'event_type'});
        $title[$i] = $items[$i]->{'title'};
        $image[$i] = $items[$i]->{'images'}->{'image_source'};
        $event[$i] = $items[$i]->{'event_type'};
    }
?>
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
                    <h1>Worship News</h1>
                    <div id="articleContainer">
                        <?php
                            for ($i = count($md5hash) - 1; $i >= 0; $i--) {
                                if($event[$i] == 'Worship,Events' || $event[$i] == 'Worship,News') {
                                    echo '<div class="news-article"><a href="';
                                    echo 'news-article.php?id=' . $md5hash[$i];
                                    echo '" class="article-link">';
                                    echo '<img src="';
                                    echo $image[$i];
                                    echo '"><div class="caption"><p>';
                                    echo $title[$i];
                                    echo '<br>Read More <i class="fa fa-arrow-circle-o-right"></i></p></div></a></div>';
                                }
                            }
                        ?>
                        <div class="news-article">
                            <a href="bible-study.php" class="article-link">
                                <img src="img/News/worship4.jpg">
                                <div class="caption">
                                    <p>Thursday Bible Study - Join the Discussion</p>
                                </div>
                            </a>
                        </div>
                        <div class="news-article">
                            <a href="taize-services.php" class="article-link">
                                <img src="img/News/worship5.jpg">
                                <div class="caption">
                                    <p>Taiz&eacute; Prayer services are held on every third Wednesday of the month from September to June</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#worship').addClass('selected');
        $('#worship-responsive').addClass('selected');
        $('#worshipNews').addClass('selected');
    </script>
</html>