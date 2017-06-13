<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Find Us</title>
        <style>
            .contact-sub {
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
                    Calendar
                </div>
            </div>
            <div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>Upcoming Events</h1>
                    <a href="https://outlook.office365.com/owa/calendar/bc22b8bc2aef4d02973a8a8ee3ac03fb@standrewstpaul.onmicrosoft.com/59bd88946ff24b4f8b93ce8ef708a1cd12150076370813153093/calendar.html" target="_blank">
                        <div class="calendar-btn">
                            Click here to see what is happening at the Church of St. Andrew and St. Paul
                        </div>
                    </a>
               </div>
            </div>
        </div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script type="text/javascript" src="http://unoapp.com/app/source/resources/widgets/widget.js"></script>
    <script type="text/javascript">
    unoapp_widget({"id":"7a7e7692cc0d277b06b2fe551fe168ed","selector":"#calender-widget-7a7e7692cc0d277b06b2fe551fe168ed","plugins":["calendar"]});
    </script>
    <script>
        $('#calendar-page').addClass('selected');
        $('#calendar-responsive').addClass('selected');
    </script>
</html>