<!doctype html>
<html lang="<?= SITE["lang"]; ?>" itemscope itemtype="https://schema.org/Article">

<head>
    <meta charset="utf-8">

    <!--CANONICAL-->
    <link rel="canonical" href="<?= get_site_url(); ?>" />
    <base href="<?= get_site_url(); ?>">
    <link rel="alternate" href="<?= get_site_url(); ?>" hreflang="x-default" />
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->

    <title><?= SITE['name'] ?></title>

    <meta name="description" content="<?= SITE["desc"]; ?>">
    <meta name="keywords" content="<?= SITE["keywords"]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- REGION -->
    <meta name="geo.region" content="<?= REGION["region"]; ?>" />
    <meta name="geo.placename" content="<?= REGION["placename"]; ?>" />
    <meta name="geo.position" content="<?= REGION["position"]; ?>" />
    <meta name="ICBM" content="<?= REGION["icbm"]; ?>" />

    <!-- ROBOTS -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">

    <meta name="author" content="<?= SITE["name"]; ?> - <?= SITE["domain"]; ?>">
    <link rel="shortcut icon" href="<?= image('favicon.svg'); ?>">

    <!-- OPEN GRAPH -->
    <meta property="og:locale" content="<?= SITE["locale"]; ?>"/>
    <meta property="og:region" content="Brasil">
    <meta property="og:title" content="<?= SITE["name"] ?>">
    <meta property="og:image" content="<?= get_template_directory_uri() . '/assets/images/' . SITE["image"]; ?>"/>
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="700">
    <meta property="og:image:height" content="500">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= get_site_url(); ?>">
    <meta property="og:description" content="<?= SITE["desc"]; ?>">
    <meta property="og:site_name" content="<?= SITE["name"] ?>">

    <!-- SCHEMA.ORG -->
    <meta itemprop="name" content="<?= SITE["name"] ?>">
    <meta itemprop="description" content="<?= SITE["desc"]; ?>">
    <meta itemprop="image" content="<?= get_template_directory_uri() . '/assets/images/' . SITE["image"]; ?>"/>
    <meta itemprop="url" content="<?= get_site_url(); ?>">

    <!-- TWITTER -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:domain" content="<?= DEV['domain']; ?>"/>
    <meta name="twitter:title" content="<?= SITE["name"] ?>" />
    <meta name="twitter:description" content="<?= SITE["desc"]; ?>"/>
    <meta name="twitter:image" content="<?= get_template_directory_uri() . '/assets/images/' . SITE["image"]; ?>"/>
    <meta name="twitter:url" content="<?= get_site_url(); ?>"/>

    <?php if(SITE['gtm'] != null): ?>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','<?= SITE['gtm']; ?>');</script>
        <!-- End Google Tag Manager -->

    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body id="home" >
<?php if(SITE['gtm'] != null): ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=<?= SITE['gtm']; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
<?php endif; ?>

<h1 class="d-none"><?= SITE['name']; ?></h1>

<?php
if(!is_404()):
?>
<!--header-->
<?php get_template_part('template-parts/header/header', '03'); ?>
<!--end of header-->

<!-- whatsapp -->
<?php get_template_part('template-parts/header/header', 'whatsapp'); ?>
<!-- end of whatsapp -->
<!-- main -->
<main> <?php endif ?>