<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Children/Youth</title>
        <style>
            .children-sub {
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
                    Children / Youth
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>Youth Group</h1>

                    <p>We have an active and energetic group of young people (grades 6 through high school) who enjoy getting together for various events. Each year we enjoy a successful Retreat with our good friends from St. Columba by the Lake Presbyterian Church.  Wonderful friendships are being formed between these two youth groups and we look forward to many more get-togethers!</p>

                    <p style="font-weight:700;">Other activities that our young people enjoy are movie and dinner nights, museum visits, and rock wall climbing to name a few.</p>

                    <img src="img/youth-img1.jpg" style="width:100%;border:2px solid #149371;margin-bottom:10px;">

                    <p>We welcome all young people in Grades 6 through 11, who might like to join this energetic and fun group - please contact us at 450-689-4379 or <a href="mailto:grammy.shani@sympatico.ca">e-mail us</a>.</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#children').addClass('selected');
        $('#children-responsive').addClass('selected');
        $('#youthGroup').addClass('selected');
    </script>
</html>