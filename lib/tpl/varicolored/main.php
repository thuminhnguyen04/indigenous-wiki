<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
http://n33.co
https://aj.lkn.io/
Released for free under a Creative Commons Attribution 2.5 License

Name       : Varicolored  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130121

Converted to dokuwiki by desbest http://desbest.com

-->
<?php
/**
 * DokuWiki Varicolored Template
 * Based on the starter template and a theme by Free CSS Templates
 *
 * @link     http://dokuwiki.org/template:varicolored
 * @author   desbest <afaninthehouse@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

if (!defined('DOKU_INC')) die(); /* must be run from within DokuWiki */
@require_once(dirname(__FILE__).'/tpl_functions.php'); /* include hook for template functions */
header('X-UA-Compatible: IE=edge,chrome=1');

$showTools = !tpl_getConf('hideTools') || ( tpl_getConf('hideTools') && !empty($_SERVER['REMOTE_USER']) );
$showSidebar = page_findnearest($conf['sidebar']) && ($ACT=='show');
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang'] ?>"
  lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>" class="no-js">
<head>
    <meta charset="UTF-8" />
    <title><?php tpl_pagetitle() ?> [<?php echo strip_tags($conf['title']) ?>]</title>
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
    <?php tpl_metaheaders() ?>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <?php echo tpl_favicon(array('favicon', 'mobile')) ?>
    <?php tpl_includeFile('meta.html') ?>
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans:400,300,700|Yesteryear" rel="stylesheet" type="text/css" />
</head>

<body id="dokuwiki__top">


<div id="menu-wrapper">
    <div id="menu">
        <ul>
            <!-- <li class="current_page_item"><a href="#">Homepage</a></li> -->
             <!-- SITE TOOLS -->
            <h3 class="a11y"><?php echo $lang['site_tools'] ?></h3>
                <?php tpl_toolsevent('sitetools', array(
                    'recent'    => tpl_action('recent', 1, 'li', 1),
                    'media'     => tpl_action('media', 1, 'li', 1),
                    'index'     => tpl_action('index', 1, 'li', 1),
                )); ?>
        </ul>
    </div>
    <!-- end #menu -->
</div>
<div id="header-wrapper">
    <?php tpl_includeFile('header.html') ?>
    <div id="header">
        <div id="logo">
            <!-- <h1><a href="#">Vari<span>colored</span></a></h1> -->
            <h1><?php tpl_link(wl(),$conf['title'],'accesskey="h" title="[H]"') ?></h1>
            <?php /* how to insert logo instead (if no CSS image replacement technique is used):
                    upload your logo into the data/media folder (root of the media manager) and replace 'logo.png' accordingly:
                    tpl_link(wl(),'<img src="'.ml('logo.png').'" alt="'.$conf['title'].'" />','id="dokuwiki__top" accesskey="h" title="[H]"') */ ?>
            <?php if ($conf['tagline']): ?>
                <p class="claim"><?php echo $conf['tagline'] ?></p>
            <?php endif ?>

            <ul class="a11y skip">
                <li><a href="#dokuwiki__content"><?php echo $lang['skip_to_content'] ?></a></li>
            </ul>
        </div>
    </div>
</div>
<div id="wrapper">
    <!-- end #header -->

    <div id="page">
        <?php html_msgarea() /* occasional error and info messages on top of the page */ ?>
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <div class="post">
                        <!-- <h2 class="title"><a href="#">Welcome to Varicolored</a></h2> -->
                        <!-- <p class="meta"><span class="date">January 15, 2013</span><span class="posted">Posted by <a href="#">Someone</a></span></p> -->
                              <!-- BREADCRUMBS -->
                        <?php if($conf['breadcrumbs']){ ?>
                            <div class="breadcrumbs"><?php tpl_breadcrumbs() ?></div>
                        <?php } ?>
                        <?php if($conf['youarehere']){ ?>
                            <div class="breadcrumbs"><?php tpl_youarehere() ?></div>
                        <?php } ?>
                        <div style="clear: both;">&nbsp;</div>
                        <div class="entry">
                          <!-- ********** CONTENT ********** -->
                            <div id="dokuwiki__content" class="site <?php echo tpl_classes(); ?> <?php echo ($showSidebar) ? 'hasSidebar' : ''; ?>"><div class="pad">
                                <?php tpl_flush() /* flush the output buffer */ ?>
                                <?php tpl_includeFile('pageheader.html') ?>

                                <div class="page">
                                    <!-- wikipage start -->
                                    <?php tpl_content() /* the main content */ ?>
                                    <!-- wikipage stop -->
                                    <div class="clearer"></div>
                                </div>

                                <?php tpl_flush() ?>
                                <?php tpl_includeFile('pagefooter.html') ?>
                            </div></div><!-- /c
                        ontent -->
                        </div>
                    </div>
                    <!-- <div class="post post-alt">
                        <h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2>
                        <p class="meta"><span class="date">January 10, 2013</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
                        <div style="clear: both;">&nbsp;</div>
                        <div class="entry">
                            <p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. Suspendisse lacus turpis, cursus egestas at sem. Sed lacus. Donec lectus. </p>
                            <p class="links"><a href="#" class="button">Read More</a></p>
                        </div>
                    </div>
                    <div class="post">
                        <h2 class="title"><a href="#">Consecteteur hendrerit </a></h2>
                        <p class="meta"><span class="date">January 08, 2013</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
                        <div style="clear: both;">&nbsp;</div>
                        <div class="entry">
                            <p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. </p>
                            <p class="links"><a href="#" class="button">Read More</a></p>
                        </div>
                    </div> -->
                    <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->
                <div id="sidebarelement">
                    <ul>
                        <li>
                            <h2>Search Here</h2>
                            <div id="search" >
                                <?php tpl_searchform() ?>
                                <!-- <form method="get" action="#">
                                    <div>
                                        <input type="text" name="s" id="search-text" value="" />
                                        <input type="submit" id="search-submit" value="" />
                                    </div>
                                </form> -->
                            </div>
                            <div style="clear: both;">&nbsp;</div>
                        </li>
                          <li>
                                <!-- ********** ASIDE ********** -->
                            <?php if ($showSidebar): ?>
                                <div id="writtensidebar"><div class="pad aside include group">
                                    <?php tpl_includeFile('sidebarheader.html') ?>
                                    <?php tpl_include_page($conf['sidebar'], 1, 1) /* includes the nearest sidebar page */ ?>
                                    <?php tpl_includeFile('sidebarfooter.html') ?>
                                    <div class="clearer"></div>
                                </div></div><!-- /aside -->
                            <?php endif; ?>

                        </li>
                        <li>
                            <!-- PAGE ACTIONS -->
                            <?php if ($showTools): ?>
                            <h2>Page Tools</h2>
                            <ul>
                            <h3 class="a11y"><?php echo $lang['page_tools'] ?></h3>
                            <?php tpl_toolsevent('pagetools', array(
                                'edit'      => tpl_action('edit', 1, 'li', 1),
                                'discussion'=> _tpl_action('discussion', 1, 'li', 1),
                                'revisions' => tpl_action('revisions', 1, 'li', 1),
                                'backlink'  => tpl_action('backlink', 1, 'li', 1),
                                'subscribe' => tpl_action('subscribe', 1, 'li', 1),
                                'revert'    => tpl_action('revert', 1, 'li', 1),
                                'top'       => tpl_action('top', 1, 'li', 1),
                            )); ?>
                            </ul>
                            <?php endif; ?>
                            </li>
                          
                        <li>
                        
                                <!-- USER TOOLS -->
                                <?php if ($conf['useacl'] && $showTools): ?>
                                        <h2>User Tools</h2>
                                <ul>
                                <h3 class="a11y"><?php echo $lang['user_tools'] ?></h3>
                                <?php
                                    if (!empty($_SERVER['REMOTE_USER'])) {
                                        echo '<li class="user">';
                                        tpl_userinfo(); /* 'Logged in as ...' */
                                        echo '</li>';
                                    }
                                ?>
                                <?php /* the optional second parameter of tpl_action() switches between a link and a button,
                                         e.g. a button inside a <li> would be: tpl_action('edit', 0, 'li') */
                                ?>
                                <?php tpl_toolsevent('usertools', array(
                                    'admin'     => tpl_action('admin', 1, 'li', 1),
                                    'userpage'  => _tpl_action('userpage', 1, 'li', 1),
                                    'profile'   => tpl_action('profile', 1, 'li', 1),
                                    'register'  => tpl_action('register', 1, 'li', 1),
                                    'login'     => tpl_action('login', 1, 'li', 1),
                                )); ?>
                                </ul>
                                <?php endif ?>
                        </li>
                    </ul>
                </div>
                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- end #page -->
</div>
<div id="footer">
    <p>&copy; 2013 Sitename.com. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://dokuwiki.org/template:variclored">FCT and converted by desbest</a>.</p>
   <div class="doc"><?php tpl_pageinfo() /* 'Last modified' etc */ ?></div>
    <?php tpl_license('button') /* content license, parameters: img=*badge|button|0, imgonly=*0|1, return=*0|1 */ ?>
    <div class="no"><?php tpl_indexerWebBug() /* provide DokuWiki housekeeping, required in all templates */ ?></div>
    <?php tpl_includeFile('footer.html') ?>
</div>
<!-- end #footer -->



    <?php /* with these Conditional Comments you can better address IE issues in CSS files,
             precede CSS rules by #IE8 for IE8 (div closes at the bottom) */ ?>
    <!--[if lte IE 8 ]><div id="IE8"><![endif]-->

    <?php /* the "dokuwiki__top" id is needed somewhere at the top, because that's where the "back to top" button/link links to */ ?>
    <?php /* tpl_classes() provides useful CSS classes; if you choose not to use it, the 'dokuwiki' class at least
             should always be in one of the surrounding elements (e.g. plugins and templates depend on it) */ ?>
  

    
</body>
</html>
