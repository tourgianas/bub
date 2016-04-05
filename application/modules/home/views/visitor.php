<script>

  $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });
        
</script>
<br>
  <!-- Navbar goes here -->

    <!-- Page Layout here -->
    <div class="row">

      <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
        
			  <ul class="collapsible" data-collapsible="accordion">
			    <li>
			      <div class="collapsible-header"><i class="material-icons">stay_current_portrait</i>Κινητά Τηλέφωνα</div>
			      <div class="collapsible-body"><p>Εδώ θα βρείτε τα πάντα για τα κινητά.</p></div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">view_list</i>Ψυγεία</div>
			      <div class="collapsible-body"><p>Όλα τα ψυγεία της αγοράς.</p></div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">list</i>Άλλα</div>
			      <div class="collapsible-body"><p>Διάφορα.</p></div>
			    </li>
			  </ul>	
			  <!-- Grey navigation panel
              This content will be:
          3-columns-wide on large screens,
          4-columns-wide on medium screens,
          12-columns-wide on small screens  -->

      </div>

      <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
        <!-- Teal page content

              This content will be:
          9-columns-wide on large screens,
          8-columns-wide on medium screens,
          12-columns-wide on small screens  -->

      </div>

    </div>