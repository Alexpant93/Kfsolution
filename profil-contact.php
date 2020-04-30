<div class="container-profil">
	<h4 class="titre text-center"> NEVER GIVE UP </h4>
	<h4 class="titre1 text-center"> MAKE THINGS HAPPEN</h4>
	<!-- Corps de la carte  -->
	   <!-- Contenue de la page profil -->
	   <div class="avatar">
	      <img alt="Karin Fraunfelder" src="http://kfsolution.ch//wp-content/themes/Kfsolutionv1/Images/contacts4.JPG">
	   </div>
	   <div class="info">
	      <?php
	         $id = 33;
	         $billet = get_post($id);			
	         $contenu = $billet->post_content;
	         $contenu = apply_filters('the_content', $contenu);
	         $contenu = str_replace(']]>', ']]&gt;', $contenu);
	         ?>
	      <!-- PERMET D'AFFICHER LE RESULTAT DE MA REQUETE -->	            
	      <?php echo "$contenu"; ?>
	   </div>
	   <!--  FIN CONTENUE INFO-->
	   <div class="container-btn">
		   	<button tabindex="0" data-trigger="focus" type="button" class="btn btn-primary" data-toggle="popover" style="margin-right:10px;">
		   	Références <i class="fa fa-link"></i></button>
		   	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-formulaire"> Contactez-moi</button>
		   	
	   </div>

    <div style="padding-top: 20px;text-align: center;">
     <p style="border: 1px solid;padding: 18px;letter-spacing: 1px;">Tenu par le secret professionnel et la confidentialité j’applique les normes professionnelles et directives éthiques selon ICF <br>(International Coach Federation)</p>
    </div>
</div>

<script>		
	$(document).ready(function(){
		 $('[data-toggle="popover"]').popover({
		    placement : 'top',
		    html : true,
		    content : '<div class="media"> <a href="http://www.ecole-coaching.ch" target="-blank" class="pull-left"> <img src="http://kfsolution.ch//wp-content/themes/Kfsolutionv1/Images/new-perspectives.jpg"class="media-object" alt="Sample Image" width="120px" height="60"> </a> <a href="http://www.solutionsurfers.com" target="-blank" class="pull-left"> <img src="http://kfsolution.ch//wp-content/themes/Kfsolutionv1/Images/logoSurfers.png"class="media-object" alt="Sample Image" width="140px" height="30px">  </a> </div>'
		        
   });
});		
</script>
