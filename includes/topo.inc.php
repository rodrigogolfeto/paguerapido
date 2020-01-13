<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
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

                            <button type="button" class="btn btn-primary pr-btn-contrate font-getone-bold color-231941 font-18 ml-0 ml-sm-5 mt-3 mt-sm-0">Contrate para sua empresa</button>

                            <ul class="navbar-nav font-18 mt-2 mt-sm-0 pt-sm-1">
                                <li class="nav-item"><a class="nav-link color-231941 font-getone-bold" href="#">Quem Somos</a></li>
                                <li class="nav-item"><a class="nav-link color-231941 font-getone-bold" href="#">Fale Conosco</a></li>                            
                            </ul>                        

                        </div>


                    </div>
                </nav>
            </div>
        </header><!-- topo -->