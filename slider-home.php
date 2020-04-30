<div class="uk-slidenav-position" data-uk-slideshow>
	<ul class="uk-slideshow uk-slideshow-fullscreen uk-overlay-active" data-uk-slideshow="{kenburns:'10s', autoplay:true}">
		<!-- Première Slide -->
		<li>
			<img src="/wp-content/themes/Kfsolutionv1/Images/slider5.jpg" width="auto" height="100%" >
			<div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
				<p>
					<?php
						$id = 4;
						$billet = get_post($id);
						$contenu = $billet->post_content;
						$contenu = apply_filters('the_content', $contenu);
						$contenu = str_replace(']]>', ']]&gt;', $contenu);
						?>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="Proverbe">
							<?php echo "$contenu"; ?>
						</div>
					</div>
				</div>
				

				</p>
		
		</li>
		
		<!-- Deuxième Slide -->
		<li>
			<img src="/wp-content/themes/Kfsolutionv1/Images/slider4.jpg" width="auto" height="100%" >
			<div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
				<p style="text-align: center;">
					<?php
						$id = 8;
						$billet = get_post($id);
						$contenu = $billet->post_content;
						$contenu = apply_filters('the_content', $contenu);
						$contenu = str_replace(']]>', ']]&gt;', $contenu);
						?>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="Proverbe">
							<?php echo "$contenu"; ?>
						</div>
					</div>
				</div>
				</p>
			</div>
		</li>
		<!-- Troisième Slide -->
		<li >
			<img src="/wp-content/themes/Kfsolutionv1/Images/Slider3.jpg" width="auto" height="100%"s>
			<div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
				<p style="text-align: center;">
					<?php
						$id = 21;
						$billet = get_post($id);
						$contenu = $billet->post_content;
						$contenu = apply_filters('the_content', $contenu);
						$contenu = str_replace(']]>', ']]&gt;', $contenu);
						?>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="Proverbe">
							<?php echo "$contenu"; ?>
						</div>
					</div>
				</div>
				</p>
			</div>
		</li>
	</ul>
	<a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"style="color: rgba(255,255,255,0.4)">
	</a>
	<a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(255,255,255,0.4)">
	</a>
</div>
