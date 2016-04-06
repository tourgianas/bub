<input type="text" placeholder="Search..." id="search" style="width: 100%; height: 40px; border: 1px">
<div class="row">

	<div class="col s12 m4 l3"> <!-- Side bar -->
        
		<ul class="collapsible" data-collapsible="accordion">
			<li>
			<div class="collapsible-header active"><i class="material-icons">stay_current_portrait</i>Κινητά Τηλέφωνα</div>
			<div class="collapsible-body"><p>Εδώ θα βρείτε τα πάντα για τα κινητά.</p>
  				<ul class="collapsible" data-collapsible="expandable">
  				<li>
				<div class="collapsible-header active"><i class="material-icons"></i>Κατασκευαστής</div>
				<div class="collapsible-body">
					    <p>
	        <?php  			
						$this->db->select('*');
						$this->db->group_by("Manufacturer"); 
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
					      		echo "<input type='checkbox' rel='".$stuff->Manufacturer."' value='".$stuff->Manufacturer."' id='".$stuff->Manufacturer."' />";
			            		echo "<label for='".$stuff->Manufacturer."'>".$stuff->Manufacturer."</label>";
			            	}
			            }
    		?>
					    </p>
			    </div></li>

  				<li>
				<div class="collapsible-header active"><i class="material-icons"></i>Μνήμη Ram</div>
				<div class="collapsible-body">
			        	<p>
		    <?php  			
						$this->db->select('*');
						$this->db->group_by("Ram"); 
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
					      		echo "<input type='checkbox' rel='".$stuff->Ram."' value='".$stuff->Ram."' id='".$stuff->Ram."' />";
			            		echo "<label for='".$stuff->Ram."'>".$stuff->Ram."</label>";
			            	}
			            }
    		?>
    					</p>
			    </div></li>

  				<li>
				<div class="collapsible-header active"><i class="material-icons"></i>Επεξεργαστής</div>
				<div class="collapsible-body">
			        	<form action="#">
			        	<p>
		    <?php  			
						$this->db->select('*');
						$this->db->group_by("CPU_type"); 
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
					      		echo "<input type='checkbox' rel='".$stuff->CPU_type."' value='".$stuff->CPU_type."' id='".$stuff->CPU_type."' />";
			            		echo "<label for='".$stuff->CPU_type."'>".$stuff->CPU_type."</label>";
			            	}
			            }
    		?>
    					</p>
					    </form>
			    </div></li>

  				<li>
				<div class="collapsible-header active"><i class="material-icons"></i>Μέγεθος Οθόνης</div>
				<div class="collapsible-body">
			        	<form action="#">
			        	<p>
		    <?php  			
						$this->db->select('*');
						$this->db->group_by("Screen_Size"); 
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
					      		echo "<input type='checkbox' rel='".$stuff->Screen_Size."' value='".$stuff->Screen_Size."' id='".$stuff->Screen_Size."' />";
			            		echo "<label for='".$stuff->Screen_Size."'>".$stuff->Screen_Size."</label>";
			            	}
			            }
    		?>
    					</p>
					    </form>
			    </div></li>

  				<li>
				<div class="collapsible-header active"><i class="material-icons"></i>Εσωτερική Μνήμη</div>
				<div class="collapsible-body">
			        	<form action="#">
			        	<p>
		    <?php  			
						$this->db->select('*');
						$this->db->group_by("Internal_Memory"); 
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
					      		echo "<input type='checkbox' rel='".$stuff->Internal_Memory."' value='".$stuff->Internal_Memory."' id='".$stuff->Internal_Memory."' />";
			            		echo "<label for='".$stuff->Internal_Memory."'>".$stuff->Internal_Memory."</label>";
			            	}
			            }
    		?>
    					</p>
					    </form>
			    </div></li>

  				<li>
				<div class="collapsible-header active"><i class="material-icons"></i>Κάμερα</div>
				<div class="collapsible-body">
			        	<form action="#">
			        	<p>
		    <?php  			
						$this->db->select('*');
						$this->db->group_by("Camera"); 
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
					      		echo "<input type='checkbox' rel='".$stuff->Camera."' value='".$stuff->Camera."' id='".$stuff->Camera."' />";
			            		echo "<label for='".$stuff->Camera."'>".$stuff->Camera."</label>";
			            	}
			            }
    		?>
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


      <table class="bordered centered">
        <thead>

          <tr class="first">
              <th>Όνομα</th>
              <th>Μέγεθος Οθόνης</th>
              <th>Επεξεργαστής</th>
              <th>Εσωτερική Μνήμη</th>
              <th>Μνήμη Ram</th>
              <th>Φωτογραφική Μηχανή</th>
              <th>Κατασκευαστής</th>
          </tr>
        </thead>

        <tbody>

        <?php

			$this->db->select('*');
			$this->db->order_by("Manufacturer, Name"); 
			$query = $this->db->get('mobile');

            if($query->num_rows() > 0)
            {
            	foreach ($query->result() as $stuff) {
					echo "<tr class='searchme'>";
        
					echo "<td class='searchname'>";
            		echo "<a href='mobile_view?id=".$stuff->ID."'><img width=60 height=80 src=".base_url($stuff->Photo)."></a><br>";
            		echo $stuff->Name;
            		echo "</td><td class='".$stuff->Screen_Size."' rel='".$stuff->Screen_Size."'>";
            		echo $stuff->Screen_Size;
            		echo "</td><td class='".$stuff->CPU_type."' rel='".$stuff->CPU_type."'>";
            		echo $stuff->CPU_type;
            		echo " ";
            		echo $stuff->CPU;
            		echo "</td><td class='".$stuff->Internal_Memory."' rel='".$stuff->Internal_Memory."'>";
            		echo $stuff->Internal_Memory;
            		echo "</td><td class='".$stuff->Ram."' rel='".$stuff->Ram."'>";
            		echo $stuff->Ram;
            		echo "</td><td class='".$stuff->Camera."' rel='".$stuff->Camera."'>";
            		echo $stuff->Camera;
            		echo "</td><td class='".$stuff->Manufacturer."' rel='".$stuff->Manufacturer."'>";
            		echo $stuff->Manufacturer;
            		echo "</td>";
          			echo "</tr>";
            	}
            }

    	?>


        </tbody>
      </table>

	</div>

</div>

<script>
  $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });

$("input:checkbox").click(function () {
    var showAll = true;
    $('tr').not('.first').hide();
    $('input[type=checkbox]').each(function () {
        if ($(this)[0].checked) {
            showAll = false;
            var status = $(this).attr('rel');
            var value = $(this).val();            
            $('td.' + status + '[rel="' + value + '"]').parent('tr').show();
        }
    });
    if(showAll){
        $('tr').show();
    }
});

</script>