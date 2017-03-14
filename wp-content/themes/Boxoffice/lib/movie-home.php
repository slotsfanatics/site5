<div id="content">
<!-- SLIDER -->
<?php if (qtranxf_getLanguage() == 'de') { ?>
<script type="text/javascript" src="slider/engine2/jquery.js"></script>
<div id="wowslider-de" style="margin-bottom:50px;">
<div class="ws_images"><ul>
		<li><a href="https://banners.livepartners.com/view.php?z=45796"><img src="slider/data2/images/denetbet.png" alt="de-netbet" title="de-netbet" id="wows2_0"/></a></li>
		<li><a href="https://www.supergaminator.com/nrgs/de/landing?refererId=82407&lang=de???"><img src="slider/data2/images/supergaminator.jpg" alt="de-supergaminator" title="de-supergaminator" id="wows2_1"/></a></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="de-netbet"><span><img src="slider/data2/tooltips/denetbet.png" alt="de-netbet"/>1</span></a>
		<a href="#" title="de-supergaminator"><span><img src="slider/data2/tooltips/supergaminator.jpg" alt="de-supergaminator"/>2</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">css slider</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="slider/engine2/wowslider.js"></script>
<script type="text/javascript" src="slider/engine2/script.js"></script>
<?php } ?>
<!-- -->
<?php
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('post_type=post'.'&p=1');
while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>

<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="entry">
<?php the_content('Read the rest of this entry &raquo;'); ?>
</div>
<div class="clear"></div>
<?php endwhile; ?>
</div>

<?php
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('post_type=movies'.'&paged='.$paged);
?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>	


<div class="box " id="post-<?php the_ID(); ?>">

<div class="boxim">
<?php
if ( has_post_thumbnail() ) { ?>
	<a href="<?php echo get_post_meta($post->ID, 'wtf_video', true); ?>"><div class="boxim-frame"><span class="boxim-helper"></span><img class="boximg" src="<?php get_image_url(); ?>" alt=""/></div></a>
<?php } else { ?>
	<a href="<?php echo get_post_meta($post->ID, 'wtf_video', true); ?>"><img class="boximg" src="<?php bloginfo('template_directory'); ?>/images/dummy.png" alt="" /></a>
<?php } ?>

<div class="scorebox">
<span class="sholder"> <span class="scorebar score-<?php $rscore=get_post_meta($post->ID, 'wtf_rscore', true); echo $rscore; ?>"> </span>    </span>
</div>

</div>

<div class="boxentry">
<div class="btitle">
	<h2><a href="<?php echo get_post_meta($post->ID, 'wtf_video', true); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
	<span class="bonusammount"><?php echo get_post_meta($post->ID, 'wtf_ryear', true); ?>&nbsp;</span>
	<?php echo get_post_meta($post->ID, 'wtf_dirctr', true); ?></a></h2>
</div>
<div class="bmeta">
<span class="mgenre"><?php echo get_post_meta($post->ID, 'wtf_runtime', true); ?></span> <span class="mcom"><?php //comments_popup_link('0', '1', '%'); ?></span>
</div>
<div class="clear"></div>
</div>
</div>

<?php if(++$counter % 4 == 0) : ?>
<div class="clear"></div>
<?php endif; ?>

<?php endwhile; ?>

<div class="clear"></div>
<?php getpagenavi(); ?>
<?php $wp_query = null; $wp_query = $temp;?>

<div>
<?php $wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('post_type=post'.'&p=8');
while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>

<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
</div>

<div class="clear"></div>
<?php endwhile; ?>
<?php echo do_shortcode('[vegashero-lobby]'); ?>


</div>
</div>