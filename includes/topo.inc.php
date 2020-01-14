<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?=$config['urlSite'];?>images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=$config['urlSite'];?>images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$config['urlSite'];?>images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$config['urlSite'];?>images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$config['urlSite'];?>images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=$config['urlSite'];?>images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=$config['urlSite'];?>images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=$config['urlSite'];?>images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$config['urlSite'];?>images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=$config['urlSite'];?>images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$config['urlSite'];?>images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=$config['urlSite'];?>images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$config['urlSite'];?>images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=$config['urlSite'];?>images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=$config['urlSite'];?>images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title><?php echo $titPag; ?></title>
    <?php include('includes/metas.inc.php'); ?>
    <base href="<?php echo $config['urlSite']; ?>" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/styles.css<?=(!empty($config['cacheFiles']))? '?cacheFile=' . $config['cacheFiles']:'';?>" type="text/css" media="screen" /> 
</head>

<body>
	
    <div id="root">
        
        <header class="topo">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <a class="navbar-brand" href="#"><img src="images/logo.svg" class="pr-logo" alt="Pague Rápido" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse pb-3 pb-sm-0" id="navbarSupportedContent">
                        
                        <div class="d-flex justify-content-between flex-column flex-column-reverse flex-sm-row  w-100">

                            <button type="button" class="btn btn-primary pr-btn-contrate font-getone-bold color-231941 font-18 ml-0 ml-sm-5 mt-3 mt-sm-0" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000">Contrate para sua empresa</button>

                            <ul class="navbar-nav font-18 mt-2 mt-sm-0 pt-sm-1">
                                <li class="nav-item"><a class="nav-link color-231941 font-getone-bold" href="#">Quem Somos</a></li>
                                <li class="nav-item"><a class="nav-link color-231941 font-getone-bold" href="fale-conosco">Fale Conosco</a></li>                            
                            </ul>                        

                        </div>


                    </div>
                </nav>
            </div>
        </header><!-- topo -->