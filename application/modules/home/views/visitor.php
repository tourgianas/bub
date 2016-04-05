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
			<div class="collapsible-header"><i class="material-icons">stay_current_portrait</i>Κινητά Τηλέφωνα</div>
			<div class="collapsible-body"><p>Εδώ θα βρείτε τα πάντα για τα κινητά.</p>
				<ul class="collection">
			        <li class="collection-item dismissable"><div>Samsung<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			        <li class="collection-item dismissable"><div>Nokia<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			        <li class="collection-item dismissable"><div>LG<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			        <li class="collection-item dismissable"><div>Apple<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			    </ul>
			</div>
			</li>
			<li>
			<div class="collapsible-header"><i class="material-icons">view_list</i>Ψυγεία</div>
			<div class="collapsible-body"><p>Όλα τα ψυγεία της αγοράς.</p>
				<ul class="collection">
			        <li class="collection-item dismissable"><div>Bosch<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			        <li class="collection-item dismissable"><div>Siemens<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			        <li class="collection-item dismissable"><div>Pitsos<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			        <li class="collection-item dismissable"><div>Whirlpool<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			    </ul>
			</div>
			</li>
			<li>
			<div class="collapsible-header"><i class="material-icons">list</i>Άλλα</div>
			<div class="collapsible-body"><p>Διάφορα.</p></div>
			</li>
		</ul>	

	</div>

	<div class="col s12 m8 l9"> 

     	<div class="slider">
		    <ul class="slides">
		      <li>
		        <img src="<?php echo base_url("images/BUB_imag.jpg"); ?>"> 
		        <div class="caption center-align">
		          <h3>This is our big Tagline!</h3>
		          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
		      </li>
		      <li>
		        <img src="<?php echo base_url("images/Mobiles.jpg"); ?>"> 
		        <div class="caption left-align">
		          <h3>Left Aligned Caption</h3>
		          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
		      </li>
		      <li>
		        <img src="<?php echo base_url("images/fridge.jpg"); ?>"> 
		        <div class="caption right-align">
		          <h3>Right Aligned Caption</h3>
		          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
		      </li>
		    </ul>
		  </div>



	</div>

</div>