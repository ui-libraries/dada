<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <?php endif; ?>
    <?php    
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <?php    
    queue_css_file(array('style'));
    echo head_css();
    queue_js_file(array('main.min'));
    echo head_js();
    ?>
    
      
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>    
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

        <header class="header">
        <div class="container">
            <a href="<?php echo WEB_ROOT; ?>" class="logo" title="DADA">DADA</a>
            <nav class="menu">
                <div class="trigger"><span></span><span></span><span></span></div>
                <ul class="main-nav">
                    <li><a href="#" class="call-sub">DIGITAL DADA LIBRARY</a></li>
                    <li><a class="sub-scroll" href="#BIBLIOGRAPHY">BIBLIOGRAPHY/CATALOG</a></li>
                    <li><a class="sub-scroll" href="#DADAISTS">DADAISTS</a></li>
                    <li><a class="sub-scroll" href="#DADA">DADA/ SURREALISM JOURNAL</a></li>
                    <li><a class="sub-scroll" href="#RESOURCES">RESOURCES</a></li>
                    <li><a href="mailto:timothy-shipe@uiowa.edu">CONTACT</a></li>
                </ul>
                <div class="sub-nav">
                    <ul>
                        <li><a href="#"><span>PERIODICALS</span></a>
                            <div class="cols">
                                <ul>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/1">291</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/2">391</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/3">ACTION</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/4">AESTHETE 1925</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/5">ALMANACH DER<br>FREIEN ZEITUNG</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/6">ALMANACH DER<br>NEUEN JUGEND</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/7">DER ARARAT</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/8">AVENTURE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/9">BLINDMAN</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/10">DER BLUTIGE ERNST</a></li>
                                </ul>
                                <ul>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/11">CABARET VOLTAIRE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/12">CANNIBALE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/13">LE COEUR À BARBE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/14">DADA</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/15">DER DADA</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/16">L'ÉLAN</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/17">FREIE STRASSE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/18">DIE FREUDE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/19">LITTÉRATURE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/20">MAINTENANT</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/21">MANUSCRIPTS (MSS)</a></li>
                                </ul>
                                <ul>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/22">DER MARSTALL</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/23">MÉCANO</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/24">MENSCHEN</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/25">MERZ</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/26">NEUE JUGEND</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/27">PEREVOZ DADA</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/28">DIE PLEITE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/29">PROJECTEUR</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/30">PROVERBE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/31">DIE SCHAMMMADE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/32">SIC</a></li>
                                </ul>
                                <ul>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/33">DE STIJL</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/34">Z</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/35">ZENIT</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/36">DER ZWEEMANN</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#"><span>BOOKS BY AUTHOR</span></a>
                            <div class="cols-2">
                                <ul>
                                    <li>
                                        <span>PIERRE ALBERT-BIROT:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">LAROUNTALA</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>CELINE ARNAULD:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">TOURNEVIRE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JEAN ARP:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">NEUE FRANZÖSISCHE MALEREI</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DIE WOLKENPUMPE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>LOUIS ARAGON:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ANICET</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">LES AVENTURES DE TÉLÉMAQUE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">FEU DE JOIE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JOAHNNES BAADER:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">[POSTKARTE HINDENBURG]</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>HUGO BALL:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">FLAMETTI</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ZUR KRITIK DER DEUTSCHEN INTELLIGENZ</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>SERGE CHARCHOUNE:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DADAIZM: KOMPILIATSIIA</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>THEO VAN DOESBURG:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ANTHOLOGIE-BONSET</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">CLASSIQUE BAROQUE MODERNE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DE NIEUWE BEWEGING IN DE SCHILDERKUNST</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DRIE VOORDRACHTEN OVER DE NIEUWE BEELDENDE KUNST</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">WAT IS DADA?</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>CARL EINSTEIN:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">AFRIKANISCHE PLASTIK</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">NEGERPLASTIK</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>PAUL ELUARD:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">LES ANIMAUX ET LEURS HOMMES</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">LES NÉCESSITÉS DE LA VIE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MAX ERNST:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">EXPOSITION MAX ERNST</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JULIUS EVOLA:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ARTE ASTRATTA</a></li>
                                        </ul>
                                    </li>
                                    <li class="long">
                                        <span>EDGAR FIRN (KARL DÖHMAN) (DAIMONIDES):</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">BIBERGEIL</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>GEORGE GROSZ:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DAS GESICHT DER HERRSCHENDEN KLASSE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">MIT PINSEL UND SCHERE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MARSDEN HARTLEY:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ADVENTURES IN THE ARTS</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>RAOUL HAUSMANN:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">PRÉSENTISMUS</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>EMMY HENNINGS:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DAS BRANDMAL</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">GEFÄNGNIS</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DIE LETZTE FREUDE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>WIELAND HERZFELDE:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">SCHUTZHAFT</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">TRAGIGROTESKEN DER NACHT</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>RICHARD HUELSENBECK:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DADA ALMANACH</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DADA SIEGT</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DEUTSCHLAND MUSS UNTERGEHEN</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DOCTOR BILLIG AM ENDE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">EN AVANT DADA</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">PHANTASTISCHE GEBETE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">SCHALABEN, SCHALABAI, SCHALAMEZOMAI</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">VERWANDLUNGEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>Iliazd (Ilia Zdanevich):</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">LIDANTIU FARAM (LEDANTU LE PHARE)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MATTHEW JOSEPHSON:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">GALIMATHIAS</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>FRANZ JUNG:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ARBEITSFRIEDE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">HUNGER AN DER WOLGA</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">OPFERUNG</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">PROLETARIER</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DIE ROTE WOCHE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">SAUL</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">SOPHIE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DER SPRUNG AUS DER WELT</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DIE TECHNIK DES GLÜCKS</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DAS TROTTELBUCH</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>LAJOS KÁSSAK</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">NOVELLÁSKÖNYV</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JULIUS KREKEL<br>(CLÉMENT PANSAERS):</span>
                                        <ul>
                                            <li></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ZIEK; EENE MOEDER; HERTETOLKEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MAN RAY:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">UNE BONNE NOUVELLE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">EXPOSITION DADA MAN RAY</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>WALTER MEHRING:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ALGIER</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DAS KETZERBREVIER</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DAS POLITISCHE CABARET</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>Paul van Ostaijen:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">BEZETTE STAD</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>CLÉMENT PANSAERS:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">L'APOLOGIE DE LA PARESSE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">BAR NICANOR</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">LE PAN PAN AU CUL DU NU NÈGRE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ZIEK; EENE MOEDER; HERTETOLKEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>WALTER PETRY:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DIE DADAISTISCHE KORRUPTION</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>FRANCIS PICABIA:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">L'ATHLÈTE DES POMPES FUNÈBRES</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">EXPOSITION DADA FRANCIS PICABIA</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">JÉSUS CHRIST RASTAQUOUÈRE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">PENSÉES SANS LANGAGE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">POÈMES ET DESSINS DE LA FILLE NÉE SANS MÈRE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">UNIQUE EUNUQUE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>GEORGES<br>RIBEMONT-DESSAIGNES:</span>
                                        <ul>
                                            <li></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">EMPEREUR DE CHINE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">EXPOSITION DADA GEORGES RIBEMONT-DESSAIGNES</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">LEDANTU LE PHARE (PREFACE TO THE POEM BY ILIAZD)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>ALFRED SAUERMANN</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DADA-ENZYKLOPAEDIE DES OSIRIS</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>BRUNO SCHÖNLANK:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">SONNIGES LAND</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>KURT SCHWITTERS:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ANNA BLUME DICHTUNGEN (1ST PRINTING)</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ANNA BLUME DICHTUNGEN (2ND PRINTING)</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">MEMOIREN ANNA BLUMES IN BLEIE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>ARTHUR SEGAL:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">VOM STRANDE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>WALTER SERNER:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">LETZTE LOCKERUNG: MANIFEST DADA</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DIE SITTENVERDERBNIS</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ZUM BLAUEN AFFEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>PHILIPPE SOUPAULT:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">GARAGE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ROSE DES VENTS</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">WESTWEGO</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>CHRISTOF SPENGEMANN:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">KUNST KÜNSTLER PUBLIKUM</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DIE WAHRHEIT ÜBER ANNA BLUME</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>SHINKICHI TAKAHASHI:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DADA</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>TRISTAN TZARA:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">VINGT-CINQ POÈMES</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">LA PREMIÈRE AVENTURE CÉLÉSTE DE MR. ANTIPYRINE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JACQUES VACHÉ:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">LETTRES DE GUERRE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MELCHIOR VISCHER</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DER TEEMEISTER</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>HERMYNIA ZUR MÜHLEN:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">WAS PETERCHENS FREUNDE ERZÄHLEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>EPHEMERA:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">DADA AUSSTELLUNG: DADA VORFRÜHLING</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">ERSTE INTERNATIONALE DADA-MESSE: KATALOG</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">EXCURSIONS & VISITES DADA: 1 ÈRE VISITE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/">PAPILLONS DADA</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- / navigation -->
        </div>
        <!-- / container -->
    </header>
        
        <article id="content" role="main" tabindex="-1">
        
            <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
