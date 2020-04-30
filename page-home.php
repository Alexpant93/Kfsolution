<?php get_header(); ?>
<!--IMPORTATION DES LIENS PAGE HEADER-->
<div class="container">

<div class="row">
	<div class="col-md-12 col-sm-12">
				<div class="desc-coaching">	
					<?php
						$id = 192;
						$billet = get_post($id);						
						$contenu = $billet->post_content;
						$contenu = apply_filters('the_content', $contenu);
						$contenu = str_replace(']]>', ']]&gt;', $contenu);
					?>
					<?php echo "$contenu"; ?>
				</div>
		</div>
	</div><!--premier -->	
</div>				

</div>	
<?php get_footer(); ?>

