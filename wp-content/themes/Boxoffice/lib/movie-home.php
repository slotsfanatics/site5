
<div id="content">
<?php
$temp = $wp_query;
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

<?php if(++$counter % 3 == 0) : ?>
<div class="clear"></div>
<?php endif; ?>

<?php endwhile; ?>

<div class="clear"></div>
<?php getpagenavi(); ?>
<?php $wp_query = null; $wp_query = $temp;?>
</div>