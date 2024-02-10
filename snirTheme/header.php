<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <input id="hamburger" class="hamburger" type="checkbox" />
        <label class="hamburger" for="hamburger">
            <i></i>
            <text>
                <close>סגירה</close>
                <open>פתיחה</open>
            </text>
        </label>
        <section class="drawer-list">
            <ul>
                <li><a href="/">דף הבית</a></li>
                <li><a href="#">צור קשר</a></li>
            </ul>
        </section>
    </header>

</body>