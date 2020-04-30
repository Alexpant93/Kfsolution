<!-- Modal -->
<div class="modal fade " id="life" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="background-color:white;margin-top: 20px;">
    <div class="modal-content modal-lg" style="margin-top: 20px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="life" style="color: white"> Business Coaching </h2>
      </div>
      <div class="modal-body" style="background-color: white;padding: 17px 86px;
    font-size: 15px">
          <?php
	            $id = 198;
	            $billet = get_post($id);									
	            $contenu = $billet->post_content;
	            $contenu = apply_filters('the_content', $contenu);
	            $contenu = str_replace(']]>', ']]&gt;', $contenu);
	          ?>
		         
		     <?php echo "$contenu"; ?>
      </div>
      <div class="modal-footer">
        <button onclick="redirection()" type="button" class="btn btn-primary">Me contacter</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="love" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog modal-lg" role="document" style="background-color:white;margin-top: 20px;">
    <div class="modal-content modal-dialog modal-lg" style="margin-top: 20px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;<img src="../wp-content/themes/Kfsolutionv1/Images/cancel.png"</span></button>
        <h2 class="modal-title" id="love" style="color: white">Love Coaching</h2>
      </div>
      <div class="modal-body" style="background-color: white;padding: 17px 86px;
    font-size: 15px">
        <?php
	            $id = 200;
	            $billet = get_post($id);									
	            $contenu = $billet->post_content;
	            $contenu = apply_filters('the_content', $contenu);
	            $contenu = str_replace(']]>', ']]&gt;', $contenu);
	          ?>
		         
		     <?php echo "$contenu"; ?>
      </div>
      <div class="modal-footer">
            <button onclick="redirection()" type="button" class="btn btn-primary">Me contacter</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade " id="buissines" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog modal-lg" role="document" style="background-color:white;margin-top: 20px;">
    <div class="modal-content modal-dialog modal-lg" style="margin-top: 20px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="buissines" style="color: white"> Life Coaching</h2>
      </div>
      <div class="modal-body" style="background-color: white;padding: 17px 86px;
    font-size: 15px">
        <?php
	            $id =196 ;
	            $billet = get_post($id);									
	            $contenu = $billet->post_content;
	            $contenu = apply_filters('the_content', $contenu);
	            $contenu = str_replace(']]>', ']]&gt;', $contenu);
	          ?>
		         
		     <?php echo "$contenu"; ?>
      </div>
      <div class="modal-footer">
        <button onclick="redirection()" type="button" class="btn btn-primary">Me contacter</button>
      </div>
    </div>
  </div>
</div>




 
<SCRIPT LANGUAGE="JavaScript">
	function redirection() {
		window.location
          	window.location = "http://www.kfsolution.ch/contact";
          	 
}
	

</SCRIPT>
	







