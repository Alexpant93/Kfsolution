<?php get_header(); ?>
<!--IMPORTATION DES LIENS PAGE HEADER-->
<div class="container">


<div class="row">
		<div class="col-md-12 col-sm-12" style="background-image: url('http://kfsolution.ch//wp-content/themes/Kfsolutionv1/Images/Motif-contact.png')">
		
			<div class="coaching">	
				<?php
					$id = 186;
					 $billet = get_post($id);
											
					 $contenu = $billet->post_content;
					 $contenu = apply_filters('the_content', $contenu);
					  $contenu = str_replace(']]>', ']]&gt;', $contenu);
				?>
				<?php echo "$contenu"; ?>
			</div>
		</div><!--premier -->
	</div>



<div class="container-type-coaching">
<div class="row" style="background-image: url('http://kfsolution.ch//wp-content/themes/Kfsolutionv1/Images/Motif-contact.png');padding-bottom:35px;text-align: center">
		<div class="col-md-4">
	        <?php
	            $id = 131;
	            $billet = get_post($id);									
	            $contenu = $billet->post_content;
	            $contenu = apply_filters('the_content', $contenu);
	            $contenu = str_replace(']]>', ']]&gt;', $contenu);
            ?>
            <div class="grayscale">
	            <div class="image item">
		            <h4 class="titreSolution ">Life Coaching</h4>
		             <?php echo "$contenu"; ?>
		            <button type="button" class="btn btn-primary btn-lg btn-lg btn-block" data-toggle="modal" data-target="#buissines">Découvrir
					</button>
				</div>
		    </div>
      	</div>
	  		
	  	<div class="col-md-4">
        	 <?php
			 	$id = 152;
			 	$billet = get_post($id);					
			 	$contenu = $billet->post_content;
			 	$contenu = apply_filters('the_content', $contenu);
			 	$contenu = str_replace(']]>', ']]&gt;', $contenu);
            ?>
			<div class="grayscale">
            	<div class="image item">
					<h4 class="titreSolution">Love Coaching</h4>
					<?php echo "$contenu"; ?>
					<button type="button" class="btn btn-primary btn-lg btn-lg btn-block" data-toggle="modal" data-target="#love">Découvrir
					</button>  
				</div>
         	</div>
		</div>

		<div class="col-md-4">
         	<?php
           		 $id = 154;
            	 $billet = get_post($id);
				 $contenu = $billet->post_content;
				 $contenu = apply_filters('the_content', $contenu);
				 $contenu = str_replace(']]>', ']]&gt;', $contenu);
            ?>
			<div class="grayscale">
            	<div class="image item">
					<h4 class="titreSolution">Business Coaching</h4>
					<?php echo "$contenu"; ?>
					<button type="button" class="btn btn-primary btn-lg btn-lg btn-block" data-toggle="modal" data-target="#life">Découvrir
					</button>            
				</div>
         	</div>
        </div>
</div>


<?php include 'wp-content/themes/Kfsolutionv1/modal-box-coaching.php'?>
				
<?php get_footer(); ?>
