<!doctype html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charaset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body>
        <div class="wrapper">
            <header class="header">
                <div class="inner header__inner">
                    <div class="header__logo">
                        <a href="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="logo" />
                        </a>
                        <p class="header__lead">WEBに関する知識や技術共有サイト</p>
                    </div>
                    <div class="header__nav">
                        <nav class="header__gnav">
                            <ul class="header__gnav__list">
                                <li class="header__gnav__list__item">
                                    <a href="">TECH</a>
                                </li>
                                <li class="header__gnav__list__item">
                                    <a href="">TOPICS</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__search">
                            <form class="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <input id="search-box" type="text" class="search-box" placeholder="Search Keywords" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                                <input type="submit" id="search-submit" class="search-submit"/>
                            </form>
                        </div>
                        <div class="search-iconbox">
                            <div class="search-icon"></div>
                            <div class="search-close">
                                <span></span>
                            </div>
                        </div>
                    <div class="header__menu">
                        <span></span>
                    </div>
                </div>
            </header>