<div id="page_wrapper">
<?php print render($page['page_top']);?>

<header>
<?php print render($page['header']);?>

	<div id="logo">
	<?php if ($logo):  ?>
	<a href="<?php print $base_path;?>" title="<?php print t('Click to return to the homepage');?>"/>
	<img src="<?php print $logo;?>" alt="<?php print t('Home');?>"/></a>
	<?php endif;?>
	</div>
	
	<nav>
	<!-- #header-menu -->
<div id="header-menu">
	<!-- #header-menu-inside -->
    <div id="header-menu-inside" class="container_12 clearfix">
    
    	<div class="grid_12">
            <div id="navigation" class="clearfix">
            <?php if ($page['navigation']) :?>
            <?php print drupal_render($page['navigation']); ?>
            <?php else :
            if (module_exists('i18n_menu')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
            } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
            }
            print drupal_render($main_menu_tree);
            endif; ?>
            </div>
        </div>
        
    </div><!-- EOF: #header-menu-inside -->

</div><!-- EOF: #header-menu -->
	</nav>
	

</header>

<div id="slideshow"><?php print render($page['slideshow']);?></div>

<div id="social">

<!--feedicons-->
<?php print render($page[‘social’]);?>
</div>


<article>
<!--breadcrumb-->
<?phpif($breadcrumb):?>
<?phpprint$breadcrumb;?>
<?phpendif;?>


<!--title-->
<?phpprintrender($title_prefix);?>
	<?phpif($title):?>
	<h1><?phpprint$title;?></h1>
	<?phpendif;?>
<?phpprintrender($title_suffix);?>




<!--tabs-->
<?phpif($tabs):?>
<?phpprintrender($tabs);?>
<?phpendif;?>


<!--messages-->
<?phpprint$messages;?>



<!--content-->
<?php print render($page['content']);?></article>
<footer><?php print render($page['footer']);?></footer>

<?php print render($page['page_bottom']);?>
</div>