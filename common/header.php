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
    <?php    
    queue_css_file(array('style'));
    echo head_css();
    ?>    
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>    
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

        <header class="header">
        <div class="container">
            <a href="#" class="logo" title="DADA">DADA</a>
            <nav class="menu">
                <div class="trigger"><span></span><span></span><span></span></div>
                <ul class="main-nav">
                    <li><a href="#" class="call-sub">DIGITAL DADA LIBRARY</a></li>
                    <li><a class="sub-scroll" href="#BIBLIOGRAPHY">BIBLIOGRAPHY/CATALOG</a></li>
                    <li><a class="sub-scroll" href="#DADAISTS">DADAISTS</a></li>
                    <li><a class="sub-scroll" href="#DADA">DADA/ SURREALISM JOURNAL</a></li>
                    <li><a class="sub-scroll" href="#RESOURCES">RESOURCES</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
                <div class="sub-nav">
                    <ul>
                        <li><a href="#"><span>PERIODICALS</span></a>
                            <div class="cols">
                                <ul>
                                    <li><a href="#">291</a></li>
                                    <li><a href="#">391</a></li>
                                    <li><a href="#">ACTION</a></li>
                                    <li><a href="#">AESTHETE 1925</a></li>
                                    <li><a href="#">ALMANACH DER<br>FREIEN ZEITUNG</a></li>
                                    <li><a href="#">ALMANACH DER<br>NEUEN JUGEND</a></li>
                                    <li><a href="#">DER ARARAT</a></li>
                                    <li><a href="#">AVENTURE</a></li>
                                    <li><a href="#">BLINDMAN</a></li>
                                    <li><a href="#">DER BLUTIGE ERNST</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">CABARET VOLTAIRE</a></li>
                                    <li><a href="#">CANNIBALE</a></li>
                                    <li><a href="#">LE COEUR À BARBE</a></li>
                                    <li><a href="#">DADA</a></li>
                                    <li><a href="#">DER DADA</a></li>
                                    <li><a href="#">L'ÉLAN</a></li>
                                    <li><a href="#">FREIE STRASSE</a></li>
                                    <li><a href="#">DIE FREUDE</a></li>
                                    <li><a href="#">LITTÉRATURE</a></li>
                                    <li><a href="#">MAINTENANT</a></li>
                                    <li><a href="#">MANUSCRIPTS (MSS</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">DER MARSTALL</a></li>
                                    <li><a href="#">MÉCANO</a></li>
                                    <li><a href="#">MENSCHEN</a></li>
                                    <li><a href="#">MERZ</a></li>
                                    <li><a href="#">NEUE JUGEND</a></li>
                                    <li><a href="#">PEREVOZ DADA</a></li>
                                    <li><a href="#">DIE PLEITE</a></li>
                                    <li><a href="#">PROJECTEUR</a></li>
                                    <li><a href="#">PROVERBE</a></li>
                                    <li><a href="#">DIE SCHAMMMADE</a></li>
                                    <li><a href="#">SIC</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">DE STIJL</a></li>
                                    <li><a href="#">Z</a></li>
                                    <li><a href="#">ZENIT</a></li>
                                    <li><a href="#">DER ZWEEMANN</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#"><span>BOOKS BY AUTHOR</span></a>
                            <div class="cols-2">
                                <ul>
                                    <li>
                                        <span>PIERRE ALBERT-BIROT:</span>
                                        <ul>
                                            <li><a href="#">LAROUNTALA</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>CELINE ARNAULD:</span>
                                        <ul>
                                            <li><a href="#">TOURNEVIRE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JEAN ARP:</span>
                                        <ul>
                                            <li><a href="#">NEUE FRANZÖSISCHE MALEREI</a></li>
                                            <li><a href="#">DIE WOLKENPUMPE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>LOUIS ARAGON:</span>
                                        <ul>
                                            <li><a href="#">ANICET</a></li>
                                            <li><a href="#">LES AVENTURES DE TÉLÉMAQUE</a></li>
                                            <li><a href="#">FEU DE JOIE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JOAHNNES BAADER:</span>
                                        <ul>
                                            <li><a href="#">[POSTKARTE HINDENBURG]</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>HUGO BALL:</span>
                                        <ul>
                                            <li><a href="#">FLAMETTI</a></li>
                                            <li><a href="#">ZUR KRITIK DER DEUTSCHEN INTELLIGENZ</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>SERGE CHARCHOUNE:</span>
                                        <ul>
                                            <li><a href="#">DADAIZM: KOMPILIATSIIA</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>THEO VAN DOESBURG:</span>
                                        <ul>
                                            <li><a href="#">ANTHOLOGIE-BONSET</a></li>
                                            <li><a href="#">CLASSIQUE BAROQUE MODERNE</a></li>
                                            <li><a href="#">DE NIEUWE BEWEGING IN DE SCHILDERKUNST</a></li>
                                            <li><a href="#">DRIE VOORDRACHTEN OVER DE NIEUWE BEELDENDE KUNST</a></li>
                                            <li><a href="#">WAT IS DADA?</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>CARL EINSTEIN:</span>
                                        <ul>
                                            <li><a href="#">AFRIKANISCHE PLASTIK</a></li>
                                            <li><a href="#">NEGERPLASTIK</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>PAUL ELUARD:</span>
                                        <ul>
                                            <li><a href="#">LES ANIMAUX ET LEURS HOMMES</a></li>
                                            <li><a href="#">LES NÉCESSITÉS DE LA VIE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MAX ERNST:</span>
                                        <ul>
                                            <li><a href="#">EXPOSITION MAX ERNST</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JULIUS EVOLA:</span>
                                        <ul>
                                            <li><a href="#">ARTE ASTRATTA</a></li>
                                        </ul>
                                    </li>
                                    <li class="long">
                                        <span>EDGAR FIRN (KARL DÖHMAN) (DAIMONIDES):</span>
                                        <ul>
                                            <li><a href="#">BIBERGEIL</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>GEORGE GROSZ:</span>
                                        <ul>
                                            <li><a href="#">DAS GESICHT DER HERRSCHENDEN KLASSE</a></li>
                                            <li><a href="#">MIT PINSEL UND SCHERE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MARSDEN HARTLEY:</span>
                                        <ul>
                                            <li><a href="#">ADVENTURES IN THE ARTS</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>RAOUL HAUSMANN:</span>
                                        <ul>
                                            <li><a href="#">PRÉSENTISMUS</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>EMMY HENNINGS:</span>
                                        <ul>
                                            <li><a href="#">DAS BRANDMAL</a></li>
                                            <li><a href="#">GEFÄNGNIS</a></li>
                                            <li><a href="#">DIE LETZTE FREUDE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>WIELAND HERZFELDE:</span>
                                        <ul>
                                            <li><a href="#">SCHUTZHAFT</a></li>
                                            <li><a href="#">TRAGIGROTESKEN DER NACHT</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>RICHARD HUELSENBECK:</span>
                                        <ul>
                                            <li><a href="#">DADA ALMANACH</a></li>
                                            <li><a href="#">DADA SIEGT</a></li>
                                            <li><a href="#">DEUTSCHLAND MUSS UNTERGEHEN</a></li>
                                            <li><a href="#">DOCTOR BILLIG AM ENDE</a></li>
                                            <li><a href="#">EN AVANT DADA</a></li>
                                            <li><a href="#">PHANTASTISCHE GEBETE</a></li>
                                            <li><a href="#">SCHALABEN, SCHALABAI, SCHALAMEZOMAI</a></li>
                                            <li><a href="#">VERWANDLUNGEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>Iliazd (Ilia Zdanevich):</span>
                                        <ul>
                                            <li><a href="#">LIDANTIU FARAM (LEDANTU LE PHARE)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MATTHEW JOSEPHSON:</span>
                                        <ul>
                                            <li><a href="#">GALIMATHIAS</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>FRANZ JUNG:</span>
                                        <ul>
                                            <li><a href="#">ARBEITSFRIEDE</a></li>
                                            <li><a href="#">HUNGER AN DER WOLGA</a></li>
                                            <li><a href="#">OPFERUNG</a></li>
                                            <li><a href="#">PROLETARIER</a></li>
                                            <li><a href="#">DIE ROTE WOCHE</a></li>
                                            <li><a href="#">SAUL</a></li>
                                            <li><a href="#">SOPHIE</a></li>
                                            <li><a href="#">DER SPRUNG AUS DER WELT</a></li>
                                            <li><a href="#">DIE TECHNIK DES GLÜCKS</a></li>
                                            <li><a href="#">DAS TROTTELBUCH</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>LAJOS KÁSSAK</span>
                                        <ul>
                                            <li><a href="#">NOVELLÁSKÖNYV</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JULIUS KREKEL<br>(CLÉMENT PANSAERS):</span>
                                        <ul>
                                            <li></li>
                                            <li><a href="#">ZIEK; EENE MOEDER; HERTETOLKEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MAN RAY:</span>
                                        <ul>
                                            <li><a href="#">UNE BONNE NOUVELLE</a></li>
                                            <li><a href="#">EXPOSITION DADA MAN RAY</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>WALTER MEHRING:</span>
                                        <ul>
                                            <li><a href="#">ALGIER</a></li>
                                            <li><a href="#">DAS KETZERBREVIER</a></li>
                                            <li><a href="#">DAS POLITISCHE CABARET</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>Paul van Ostaijen:</span>
                                        <ul>
                                            <li><a href="#">BEZETTE STAD</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>CLÉMENT PANSAERS:</span>
                                        <ul>
                                            <li><a href="#">L'APOLOGIE DE LA PARESSE</a></li>
                                            <li><a href="#">BAR NICANOR</a></li>
                                            <li><a href="#">LE PAN PAN AU CUL DU NU NÈGRE</a></li>
                                            <li><a href="#">ZIEK; EENE MOEDER; HERTETOLKEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>WALTER PETRY:</span>
                                        <ul>
                                            <li><a href="#">DIE DADAISTISCHE KORRUPTION</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>FRANCIS PICABIA:</span>
                                        <ul>
                                            <li><a href="#">L'ATHLÈTE DES POMPES FUNÈBRES</a></li>
                                            <li><a href="#">EXPOSITION DADA FRANCIS PICABIA</a></li>
                                            <li><a href="#">JÉSUS CHRIST RASTAQUOUÈRE</a></li>
                                            <li><a href="#">PENSÉES SANS LANGAGE</a></li>
                                            <li><a href="#">POÈMES ET DESSINS DE LA FILLE NÉE SANS MÈRE</a></li>
                                            <li><a href="#">UNIQUE EUNUQUE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>GEORGES<br>RIBEMONT-DESSAIGNES:</span>
                                        <ul>
                                            <li></li>
                                            <li><a href="#">EMPEREUR DE CHINE</a></li>
                                            <li><a href="#">EXPOSITION DADA GEORGES RIBEMONT-DESSAIGNES</a></li>
                                            <li><a href="#">LEDANTU LE PHARE (PREFACE TO THE POEM BY ILIAZD)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>ALFRED SAUERMANN</span>
                                        <ul>
                                            <li><a href="#">DADA-ENZYKLOPAEDIE DES OSIRIS</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>BRUNO SCHÖNLANK:</span>
                                        <ul>
                                            <li><a href="#">SONNIGES LAND</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>KURT SCHWITTERS:</span>
                                        <ul>
                                            <li><a href="#">ANNA BLUME DICHTUNGEN (1ST PRINTING)</a></li>
                                            <li><a href="#">ANNA BLUME DICHTUNGEN (2ND PRINTING)</a></li>
                                            <li><a href="#">MEMOIREN ANNA BLUMES IN BLEIE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>ARTHUR SEGAL:</span>
                                        <ul>
                                            <li><a href="#">VOM STRANDE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>WALTER SERNER:</span>
                                        <ul>
                                            <li><a href="#">LETZTE LOCKERUNG: MANIFEST DADA</a></li>
                                            <li><a href="#">DIE SITTENVERDERBNIS</a></li>
                                            <li><a href="#">ZUM BLAUEN AFFEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>PHILIPPE SOUPAULT:</span>
                                        <ul>
                                            <li><a href="#">GARAGE</a></li>
                                            <li><a href="#">ROSE DES VENTS</a></li>
                                            <li><a href="#">WESTWEGO</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>CHRISTOF SPENGEMANN:</span>
                                        <ul>
                                            <li><a href="#">KUNST KÜNSTLER PUBLIKUM</a></li>
                                            <li><a href="#">DIE WAHRHEIT ÜBER ANNA BLUME</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>SHINKICHI TAKAHASHI:</span>
                                        <ul>
                                            <li><a href="#">DADA</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>TRISTAN TZARA:</span>
                                        <ul>
                                            <li><a href="#">VINGT-CINQ POÈMES</a></li>
                                            <li><a href="#">LA PREMIÈRE AVENTURE CÉLÉSTE DE MR. ANTIPYRINE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JACQUES VACHÉ:</span>
                                        <ul>
                                            <li><a href="#">LETTRES DE GUERRE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MELCHIOR VISCHER</span>
                                        <ul>
                                            <li><a href="#">DER TEEMEISTER</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>HERMYNIA ZUR MÜHLEN:</span>
                                        <ul>
                                            <li><a href="#">WAS PETERCHENS FREUNDE ERZÄHLEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>EPHEMERA:</span>
                                        <ul>
                                            <li><a href="#">DADA AUSSTELLUNG: DADA VORFRÜHLING</a></li>
                                            <li><a href="#">ERSTE INTERNATIONALE DADA-MESSE: KATALOG</a></li>
                                            <li><a href="#">EXCURSIONS & VISITES DADA: 1 ÈRE VISITE</a></li>
                                            <li><a href="#">PAPILLONS DADA</a></li>
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
