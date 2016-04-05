<script>
  $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });

$("input:checkbox").click(function () {
    var showAll = false;
    $('tr').not('.first').hide();
    $('input[type=checkbox]').each(function () {
        if ($(this)[0].checked) {
            showAll = false;
            var value = $(this).val();            
            $('td.[rel="' + value + '"]').parent('tr').show();
        }
    });
    if(showAll){
        $('tr').show();
    }
});

function handleClick(cb) {
  display("Clicked, new value = " + cb.checked);
}
</script>


<div class="row">

	<div class="col s12 m4 l3"> <!-- Side bar -->
        
		<ul class="collapsible" data-collapsible="accordion">
			<li>
			<div class="collapsible-header active"><i class="material-icons">stay_current_portrait</i>Κινητά Τηλέφωνα</div>
			<div class="collapsible-body"><p>Εδώ θα βρείτε τα πάντα για τα κινητά.</p>
  				<ul class="collapsible" data-collapsible="expandable">
  				<li>
				<div class="collapsible-header"><i class="material-icons"></i>Κατασκευαστής</div>
				<div class="collapsible-body">
			        	
					    <p>
	        <?php  			
						$this->db->select('*');
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
					      		echo "<input type='checkbox' value='".$stuff->Manufacturer."' id='".$stuff->ID."' />";
			            		echo "<label for='".$stuff->ID."'>".$stuff->Manufacturer."</label>";
			            	}
			            }
    		?>
					    </p>
					    
			    </div></li>
  				<li>
				<div class="collapsible-header"><i class="material-icons"></i>Μνήμη Ram</div>
				<div class="collapsible-body">
			        	<form action="#">
					    <p>
					      <input type="checkbox" id="test2" />
					      <label for="test2">Επιλογές</label>
					    </p>
					    </form>
			    </div></li>
  				<li>
				<div class="collapsible-header"><i class="material-icons"></i>Επεξεργαστής</div>
				<div class="collapsible-body">
			        	<form action="#">
					    <p>
					      <input type="checkbox" id="test3" />
					      <label for="test3">Επιλογές</label>
					    </p>
					    </form>
			    </div></li>
  				<li>
				<div class="collapsible-header"><i class="material-icons"></i>Μέγεθος Οθόνης</div>
				<div class="collapsible-body">
			        	<form action="#">
					    <p>
					      <input type="checkbox" id="test4" />
					      <label for="test4">Επιλογές</label>
					    </p>
					    </form>
			    </div></li>
  				<li>
				<div class="collapsible-header"><i class="material-icons"></i>Εσωτερική Μνήμη</div>
				<div class="collapsible-body">
			        	<form action="#">
					    <p>
					      <input type="checkbox" id="test5" />
					      <label for="test5">Επιλογές</label>
					    </p>
					    </form>
			    </div></li>
  				<li>
				<div class="collapsible-header"><i class="material-icons"></i>Κάμερα</div>
				<div class="collapsible-body">
			        	<form action="#">
					    <p>
					      <input type="checkbox" id="test6" />
					      <label for="test6">Επιλογές</label>
					    </p>
					    </form>
			    </div></li>
			    </ul>
			</div>
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

	<div class="col s12 m8 l9"> <!-- Results -->


      <table class="bordered">
        <thead>

          <tr class="first">
              <th>Όνομα</th>
              <th>Ανάλυση Οθόνης</th>
              <th>Επεξεργαστής</th>
              <th>Εσωτερική Μνήμη</th>
              <th>Card Slot</th>
              <th>Μνήμη Ram</th>
              <th>Φωτογραφική Μηχανή</th>
              <th>Λειτουργικό Σύστημα</th>
              <th>Μπαταρία</th>
              <th>Κατασκευαστής</th>
              <th>Ανάλυση οθόνης</th>
              <th>Εικόνα</th>
          </tr>
        </thead>

        <tbody>

        <?php

			$this->db->select('*');
			if(isset($ch_cat_id)){
				$this->db->where('ID', $ch_cat_id);
			}
			$query = $this->db->get('mobile');

            if($query->num_rows() > 0)
            {
            	foreach ($query->result() as $stuff) {
					echo "<tr>";
        
					echo "<td>";
            		echo $stuff->Name;
            		echo "</td><td>";
            		echo $stuff->Screen_Size;
            		echo "</td><td>";
            		echo $stuff->Processor;
            		echo "</td><td>";
            		echo $stuff->Internal_Memory;
            		echo "</td><td>";
            		echo $stuff->Card_Slot;
            		echo "</td><td>";
            		echo $stuff->Ram;
            		echo "</td><td>";
            		echo $stuff->Camera;
            		echo "</td><td>";
            		echo $stuff->OS;
            		echo "</td><td>";
            		echo $stuff->Battery;
            		echo "</td><td rel='".$stuff->Manufacturer."'>";
            		echo $stuff->Manufacturer;
            		echo "</td><td>";
            		echo $stuff->Resolution;
            		echo "</td><td>";
            		echo "<img width=60 height=80 src=";
            		echo base_url($stuff->Photo);
            		echo ">";
            		echo "</td>";
          			echo "</tr>";
            	}
            }

    	?>


        </tbody>
      </table>

	</div>

</div>