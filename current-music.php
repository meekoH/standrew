<?php
//    $xml = simplexml_load_file("http://www.digitalmarketingbox.com/unoapp/webcalendarevents2.php?rss&assetid=34551");
    $xml = simplexml_load_file("http://www.digitalmarketingbox.com/unoapp/webcalendarevents2.php?rss&assetid=34044");
    $items = $xml->{'channel'}->{'item'};
    
    $myFile = "MYLOG.txt";
    $fh1 = fopen($myFile, 'a+') or die("can't open file");
    fwrite($fh1, "Item list::" . print_r($items,true).'\n\r');
    fclose($fh1);
    
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
        <title>The Church of St-Andrew and St-Paul - Music</title>
        <style>
            .music-sub {
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
                    Music
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>Current Music</h1>

                    <?php
                        for ($i = 0; $i < count($md5hash); $i++) {
                            if($event[$i] == 'Music,List') {
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

                    <!-- <h3>2014 Fall Music List</h3>
                    <div class="person-section">
                        <p>Fifteenth Sunday after Pentecost - <span style="color:#149371;">September 21, 2014</span><br>
                            <span style="color:#149371;">Hymns</span> : 385 (WARRINGTON); 366 (MELCOMBE); 291 (AUSTRIA); 233 (HYFRYDOL)<br>
                            <span style="color:#149371;">Prelude</span> : Cantilene and Adagio, from <span style="font-style:italic;">Symphonie III</span> (Vierne)<br>
                            <span style="color:#149371;">Introit</span> : Fight the good fight (Gardner)<br>
                            <span style="color:#149371;">Anthem</span> : Let the people praise thee, O God (Mathias)<br>
                            <span style="color:#149371;">Postlude</span> : Carillon-Sortie (Mulet)</p>
                    </div>
                    <div class="person-section">
                        <p>Sixteenth Sunday after Pentecost - <span style="color:#149371;">September 28, 2014</span><br>
                            <span style="color:#149371;">Hymns</span> : <br>
                            <span style="color:#149371;">Prelude</span> : 2nd movement, from <span style="font-style:italic;">Organ Symphony</span> (Sowerby)<br>
                            <span style="color:#149371;">Introit</span> : From the end of the earth (Hovhaness)<br>
                            <span style="color:#149371;">Anthem</span> : O thou, the central orb (Wood)<br>
                            <span style="color:#149371;">Postlude</span> : Fantasia and Toccata, op. 57 (Stanford)</p>
                    </div>
                    <div class="person-section">
                        <p>World Communion Sunday - <span style="color:#149371;">October 5, 2014</span><br>
                            <span style="color:#149371;">Hymns</span> : 61 (LASST UNS ERFREUEN); 284 (CAITHNESS); COMMUNION HYMN: INSERT (REPTON); 90 (ABBOT'S LEIGH)<br>
                            <span style="color:#149371;">Prelude</span> : Voluntary for Double Organ (Purcell and Blow)<br>
                            <span style="color:#149371;">Setting</span> : Communion Service in A minor (Darke)<br>
                            <span style="color:#149371;">Anthem</span> : O God, thou art my God (Purcell)<br>
                            <span style="color:#149371;">Motets</span> : Salvator mundi (Blow); Christ, our Passover (Willan)<br>
                            <span style="color:#149371;">Postlude</span> : Epilogue (Willan)</p>
                    </div>
                    <div class="person-section">
                        <p><a href="http://lectionary.library.vanderbilt.edu/texts.php?id=322" target="_blank">Thanksgiving Sunday</a> - <span style="color:#149371;">October 12, 2014</span><br>
                            <span style="color:#149371;">Hymns</span> : 567 (ST. GEORGE'S, WINDSOR); CHILDREN'S HYMN 105 (ROYAL OAK); 570 (ALL THROUGH THE NIGHT); 103 (NUN DANKET)<br>
                            <span style="color:#149371;">Prelude</span> : Psalm Prelude, Set 2 no. 1 (Howells)<br>
                            <span style="color:#149371;">Introit</span> : Sing we merrily (Campbell)<br>
                            <span style="color:#149371;">Anthem</span> : Festival Te Deum (Britten)<br>
                            <span style="color:#149371;">Postlude</span> : Psalm Prelude, Set 2 no. 3 (Howells)</p>
                    </div>
                    <div class="person-section">
                        <p>Nineteenth Sunday after Pentecost - <span style="color:#149371;">October 19, 2014</span><br>
                            <span style="color:#149371;">Hymns</span> : 277 (NICAEA); METRICAL PSALM 46 (COLCHESTER); INSERT (ROCKINGHAM - "What shall I render to the Lord"); 238 (LAUDATE DOMINUM)<br>
                            <span style="color:#149371;">Prelude</span> : Canzona in G flat, op. 46 II B (Karg-Elert)<br>
                            <span style="color:#149371;">Introit</span> : If ye love me (Tallis)<br>
                            <span style="color:#149371;">Anthem</span> : Verleih' uns Frieden (Mendelssohn)<br>
                            <span style="color:#149371;">Postlude</span> : Jerusalem, du hochgebaute Stadt, op. 65 (Karg-Elert)</p>
                    </div>
                    <div class="person-section">
                        <p>Reformation Sunday - <span style="color:#149371;">October 26, 2014</span><br>
                            <span style="color:#149371;">Hymns</span> : 86 (EIN FESTE BURG); METRICAL PSALM 56 (OLD 124TH); 290 (LIEBSTER JESU); 306 (THORNBURY)<br>
                            <span style="color:#149371;">Prelude</span> : Vater unser im Himmelreich, BWV 683 &amp; 684 (Bach)<br>
                            <span style="color:#149371;">Introit</span> : Jubilate Deo (Walton)<br>
                            <span style="color:#149371;">Anthem</span> : Psalm 100 (Sch&uuml;tz)<br>
                            <span style="color:#149371;">Postlude</span> : Ein feste Burg ist unser Gott, op. 65 no. 47 (Karg-Elert)</p>
                    </div>
                    <div class="person-section">
                        <p><a href="http://lectionary.library.vanderbilt.edu/texts.php?id=166" target="_blank">All Saints Sunday</a> (observed) - <span style="color:#149371;">November 2, 2014</span><br>
                            <span style="color:#149371;">Hymns</span> : <br>
                            <span style="color:#149371;">Prelude</span> : Nun bitten wir den heilgen Geist (L&uuml;beck)<br>
                            <span style="color:#149371;">Introit</span> : O quam gloriosum (Victoria)<br>
                            <span style="color:#149371;">Anthem</span> : My soul, there is a country (Parry)<br>
                            <span style="color:#149371;">Postlude</span> : Praeludium in G, BuxWV 149 (Buxtehude)</p>
                    </div>
                    <div class="person-section">
                        <p>Remembrance Sunday - <span style="color:#149371;">November 9, 2014</span><br>
                            <span style="color:#149371;">Hymns</span> : <br>
                            <span style="color:#149371;">Prelude</span> : Sonata in E minor, BWV 528 (Bach)<br>
                            <span style="color:#149371;">Introit</span> : Justorum animae (Stanford)<br>
                            <span style="color:#149371;">Anthem</span> : Dirge for Two Veterans, from <span style="font-style:italic;">Dona nobis pacem</span> (Vaughan Williams)<br>
                            <span style="color:#149371;">Postlude</span> : 1st movement, from <span style="font-style:italic;">Symphonie VI</span> (Widor)</p>
                    </div>
                    <div class="person-section">
                        <p>Stewardship Sunday - <span style="color:#149371;">November 16, 2014</span><br>
                            <span style="color:#149371;">Hymns</span> : <br>
                            <span style="color:#149371;">Prelude</span> : Tryptique (Langlais)<br>
                            <span style="color:#149371;">Introit</span> : Sing joyfully (Byrd)<br>
                            <span style="color:#149371;">Anthem</span> : The fear of the Lord (Howells)<br>
                            <span style="color:#149371;">Postlude</span> : F&ecirc;te (Langlais)</p>
                    </div>
                    <div class="person-section">
                        <p><a href="http://lectionary.library.vanderbilt.edu/texts.php?id=170" target="_blank">Reign of Christ</a> - <span style="color:#149371;">November 23, 2014</span><br>
                            <span style="color:#149371;">Hymns</span> : <br>
                            <span style="color:#149371;">Prelude</span> : Sonata in E flat (Bartmuss)<br>
                            <span style="color:#149371;">Introit</span> : Antiphon, from Five Mystical Songs (Vaughan Williams)<br>
                            <span style="color:#149371;">Anthem</span> : Sing ye to the Lord (Bairstow)<br>
                            <span style="color:#149371;">Postlude</span> : Toccata, from <span style="font-style:italic;">Suite no. 1</span> (Hampton)</p>
                    </div> -->
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#music').addClass('selected');
        $('#music-responsive').addClass('selected');
        $('#currentMusic').addClass('selected');
    </script>
</html>