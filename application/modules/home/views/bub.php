<script>
  $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });


   
    $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
        
        
        
</script>

<div class="row">

	<div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
        
		<ul class="collapsible" data-collapsible="accordion">
			<li>
			<div class="collapsible-header"><a href="mobile"><i class="material-icons">stay_current_portrait</i>Κινητά Τηλέφωνα</a></div>
			<div class="collapsible-body"><p>Εδώ θα βρείτε τα πάντα για τα κινητά.</p></div>
			</li>

			<li>
			<div class="collapsible-header"><a href="fridge"><i class="material-icons">view_list</i>Ψυγεία</a></div>
			<div class="collapsible-body"><p>Όλα τα ψυγεία της αγοράς.</p></div>
			</li>

			<li>
			<div class="collapsible-header"><a href="other"><i class="material-icons">list</i>Άλλα</a></div>
			<div class="collapsible-body"><p>Διάφορα.</p></div>
			</li>
		</ul>	

	</div>

	<div class="col s12 m8 l9"> 
	<script type="text/javascript" src="<?php echo base_url("assets/js/gsm-arena-search-widget.js");?>"></script>

     	<!--<div class="slider">
		    <ul class="slides">
		      <li>
		        <img src="<?php echo base_url("images/BUB_imag.jpg"); ?>"> 
		        <div class="caption center-align">
		          <h3>Τεράστια ποικιλία προιόντων.</h3>
		          <h5 class="light grey-text text-lighten-3">Στο πιο εύχρηστο site.</h5>
		        </div>
		      </li>

		      <li>
		        <img src="<?php echo base_url("images/Mobiles.jpg"); ?>"> 
		        <div class="caption left-align">
		          <h3>Τα πάντα για τα κινητά</h3>
		          <h5 class="light grey-text text-lighten-3"></h5>
		        </div>
		      </li>

		      <li>
		        <img src="<?php echo base_url("images/fridge.jpg"); ?>"> 
		        <div class="caption right-align">
		          <h3></h3>
		          <h5 class="light grey-text text-lighten-3"></h5>
		        </div>
		      </li>
		    </ul>
		  </div>
		-->


	</div>

</div>