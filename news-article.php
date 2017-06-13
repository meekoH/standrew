<?php
    $xml = simplexml_load_file("http://www.digitalmarketingbox.com/unoapp/webcalendarevents2.php?rss&assetid=34044");
    $items = $xml->{'channel'}->{'item'};
    for ($i = 0; $i < count($xml->{'channel'}->{'item'}); $i++) {
        $md5hash = md5($items[$i]->{'title'}.$items[$i]->{'event_type'});
        if ($md5hash == $_GET['id']) {
            $title = $items[$i]->{'title'};
            $image = $items[$i]->{'images'}->{'image_source'};
            $description = $items[$i]->{'description'};
            $event = (string)$items[$i]->{'event_type'};
        }
    }
?>
<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - <?php echo $title ?></title>
        <style>
            .contact-sub {
                display: block;
            }
            .content ul {
                padding-left: 17px;
                font-size: 14px;
            }
            .content ul li {
                margin: 7px 0;
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
                    News / Events
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1><?php echo $title; ?></h1>
                    <img src="<?php echo $image; ?>" class="quiet-garden-img" style="max-width:50%;margin:0 15px 15px 0;">
                    <div><p><?php echo $description; ?></p></div>
                    
                    <?php
                        if($event == 'Youth,Events' || $event == 'Youth,News') {
                            echo '<p style="clear:both;"><a href="news-youth.php"><i class="fa fa-arrow-circle-o-left"></i> Back to Children / Youth News</a></p>';
                        } else if($event == 'Outreach,Events' || $event == 'Outreach,News') {
                            echo '<p style="clear:both;"><a href="news-outreach.php"><i class="fa fa-arrow-circle-o-left"></i> Back to Outreach News</a></p>';
                        } else if($event == 'Worship,Events' || $event == 'Worship,News') {
                            echo '<p style="clear:both;"><a href="news-worship.php"><i class="fa fa-arrow-circle-o-left"></i> Back to Worship News</a></p>';
                        } else if($event == 'Music,Events' || $event == 'Music,News') {
                            echo '<p style="clear:both;"><a href="news-music.php"><i class="fa fa-arrow-circle-o-left"></i> Back to Music News</a></p>';
                        } else if($event == 'Music,List') {
                            echo '<p style="clear:both;"><a href="current-music.php"><i class="fa fa-arrow-circle-o-left"></i> Back to Current Music</a></p>';
                        } else {

                        }
                    ?>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>

    </script>
</html>