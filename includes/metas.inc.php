<?php if(!empty($keywordsPagina)){ ?>
	<meta name="keywords" content="<?= $keywordsPagina ?>" />
<?php }else { ?>
	<meta name="keywords" content="" />
<?php } ?>
<?php if(!empty($descriptionPagina)){ ?>
	<meta name="description" content="<?= $descriptionPagina; ?>" />
<?php }else{ ?>
	<meta name="description" content="A Solução de Valor nasceu da iniciativa de ofertar soluções de valor às empresas, atuando de forma eficiente e criativa. A Solução de Valor conta com o que há de melhor em tecnologia e modelos de gestão que, através de uma base sólida, gera credibilidade no mercado, conjunto somado à eficiência, ética e seriedade." />
<?php } ?>
<!-- Metas Facebook -->
<meta property="og:site_name" content="" />
<?php if(empty($metasFacebook)) { ?>    
    <meta property="og:url" content="<?=$config['urlSite'];?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?=$config['titleBase'];?>" />
    <meta property="og:description" content="<?=$config['descriptionSite'];?>" />
    <meta property="og:image" content="<?=$config['urlSite'];?>images/compartilhar.png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <meta property="fb:app_id" content="" />
<?php }else { echo $metasFacebook; } ?>
<!-- Fim Metas Facebook -->
<!-- Metas Twitter -->
<meta name="twitter:card" value="summary" />
<meta name="twitter:site" content="" /><!-- Conta do Twitter do site (incluindo arroba) -->
<?php if(empty($metasTwitter)) { ?>    
    <!--<meta name="twitter:title" content="" /><!-- Título da página -->
    <!--<meta name="twitter:creator" content="" /> <!-- Conta do Twitter do autor do texto (incluindo arroba) -->
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />
<?php }else { echo $metasTwitter; } ?>
<!-- Fim Metas Twitter -->