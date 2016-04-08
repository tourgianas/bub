<div class="row">

	<div class="col s12 m4 l3"> <!-- Side bar -->
        
		<ul class="collapsible" data-collapsible="accordion">
			<li>
			<div class="collapsible-header active"><a href="mobile?ch=0"><i class="material-icons">stay_current_portrait</i>Κινητά Τηλέφωνα</a></div>
			<div class="collapsible-body"><p>Εδώ θα βρείτε τα πάντα για τα κινητά.<br><a href="mobile?ch=0">Καθαρισμός Φίλτρων<i class="material-icons">close</i></a></p>
  				<ul class="collapsible" data-collapsible="expandable">
  				<li>
				<div class="collapsible-header active"><i class="material-icons"></i>Κατασκευαστής</div>
				<div class="collapsible-body">
					    <p>
	        <?php  		
				if ( isset($_SESSION['data']) ) {
					list($manufacturer, $ram, $cpu, $screen_size, $internal_memory, $camera) = explode(":", $_SESSION['data']);

					if (isset($_GET['ch'])) {
					
						switch ($_GET['ch']) {
							case '1':
								if ($manufacturer == '' ) {
									$manufacturer = "Manufacturer='".$_GET['temp']."'";
								}else{
									$manufacturer = $manufacturer." OR Manufacturer='".$_GET['temp']."'";
								}
								break;
							case '2':
								if ($manufacturer == '') {
									$manufacturer = "Manufacturer=' '";
								}
								$ram = $ram." OR Ram='".$_GET['temp']."'";
								break;
							case '3':
								if ($manufacturer == '') {
									$manufacturer = "Manufacturer=' '";
								}
								$cpu = $cpu." OR CPU_type='".$_GET['temp']."'";
								break;
							case '4':
								if ($manufacturer == '') {
									$manufacturer = "Manufacturer=' '";
								}
								$screen_size = $screen_size." OR Screen_Size='".$_GET['temp']."'";
								break;
							case '5':
								if ($manufacturer == '') {
									$manufacturer = "Manufacturer=' '";
								}
								$internal_memory = $internal_memory." OR Internal_Memory='".$_GET['temp']."'";
								break;
							case '6':
								if ($manufacturer == '') {
									$manufacturer = "Manufacturer=' '";
								}
								$camera = $camera." OR Camera='".$_GET['temp']."'";
								break;
							case '0':
								$manufacturer = "";
								$ram = "";
								$cpu = "";
								$screen_size = "";
								$internal_memory = "";
								$camera = "";
								$data = $manufacturer.":".$ram.":".$cpu.":".$screen_size.":".$internal_memory.":".$camera; 
								$where = $manufacturer.$ram.$cpu.$screen_size.$internal_memory.$camera;
								$_SESSION['data'] = $data;
								break;
						}	
					}
					
					$where = $manufacturer.$ram.$cpu.$screen_size.$internal_memory.$camera;
					$data = $manufacturer.":".$ram.":".$cpu.":".$screen_size.":".$internal_memory.":".$camera;
					$_SESSION['data'] = $data;

				}else{		           

					$manufacturer = "";
					$ram = "";
					$cpu = "";
					$screen_size = "";
					$internal_memory = "";
					$camera = "";
					$data = $manufacturer.":".$ram.":".$cpu.":".$screen_size.":".$internal_memory.":".$camera; 
					$where = $manufacturer.$ram.$cpu.$screen_size.$internal_memory.$camera;
					$_SESSION['data'] = $data;

				}	
						$this->db->select('Manufacturer');
						$this->db->group_by("Manufacturer"); 
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
			            		if (strpos($manufacturer, $stuff->Manufacturer)) {
			            			echo "<input type='checkbox' id='".$stuff->Manufacturer."' checked/>";
			            		}else{
					      			echo "<input type='checkbox' id='".$stuff->Manufacturer."' />";
					      		}
			            		echo "<label for='".$stuff->Manufacturer."'><a href='mobile?ch=1&temp=".$stuff->Manufacturer."'>".$stuff->Manufacturer."</a></label>";
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
						$this->db->select('Ram');
						$this->db->group_by("Ram"); 
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
			            		if (strpos($ram, $stuff->Ram)) {
			            			echo "<input type='checkbox' id='".$stuff->Ram."' checked/>";
			            		}else{
					      			echo "<input type='checkbox' id='".$stuff->Ram."' />";
					      		}
			            		echo "<label for='".$stuff->Ram."'><a href='mobile?ch=2&temp=".$stuff->Ram."'>".$stuff->Ram."</a></label>";
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
						$this->db->select('CPU_type');
						$this->db->group_by("CPU_type"); 
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
			            		if (strpos($cpu, $stuff->CPU_type)) {
			            			echo "<input type='checkbox' id='".$stuff->CPU_type."' checked/>";
			            		}else{
					      			echo "<input type='checkbox' id='".$stuff->CPU_type."' />";
					      		}
			            		echo "<label for='".$stuff->CPU_type."'><a href='mobile?ch=3&temp=".$stuff->CPU_type."'>".$stuff->CPU_type."</a></label>";
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
						$this->db->select('Screen_Size');
						$this->db->group_by("Screen_Size"); 
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
			            		if (strpos($screen_size, $stuff->Screen_Size)) {
			            			echo "<input type='checkbox' id='".$stuff->Screen_Size."' checked/>";
			            		}else{
					      			echo "<input type='checkbox' id='".$stuff->Screen_Size."' />";
					      		}
			            		echo "<label for='".$stuff->Screen_Size."'><a href='mobile?ch=4&temp=".$stuff->Screen_Size."'>".$stuff->Screen_Size."</a></label>";
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
						$this->db->select('Internal_Memory');
						$this->db->group_by("Internal_Memory"); 
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
			            		if (strpos($internal_memory, $stuff->Internal_Memory)) {
			            			echo "<input type='checkbox' id='".$stuff->Internal_Memory."' checked/>";
			            		}else{
					      			echo "<input type='checkbox' id='".$stuff->Internal_Memory."' />";
					      		}
			            		echo "<label for='".$stuff->Internal_Memory."'><a href='mobile?ch=5&temp=".$stuff->Internal_Memory."'>".$stuff->Internal_Memory."</a></label>";
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
						$this->db->select('Camera');
						$this->db->group_by("Camera"); 
						$query = $this->db->get('mobile');

			            if($query->num_rows() > 0)
			            {
			            	foreach ($query->result() as $stuff) {
			            		if (strpos($camera, $stuff->Camera)) {
			            			echo "<input type='checkbox' id='".$stuff->Camera."' checked/>";
			            		}else{
					      			echo "<input type='checkbox' id='".$stuff->Camera."' />";
					      		}
			            		echo "<label for='".$stuff->Camera."'><a href='mobile?ch=6&temp=".$stuff->Camera."'>".$stuff->Camera."</a></label>";
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

      <table class="bordered">
        <thead>

          <tr class="first">
              <th></th>
              <th></th>
          </tr>
        </thead>

        <tbody>

        <?php

			$this->db->select('*');
			if ($where != "") {
				$this->db->where($where);
			}
			$this->db->order_by("Manufacturer, Name"); 
			$query = $this->db->get('mobile');

            if($query->num_rows() > 0)
            {
            	$count = 1;
            	foreach ($query->result() as $stuff) {
            		if($count == 1){
						echo "<tr>";
            		}
        
					echo "<td>";
		?>
            		<div class="row">

						<div class="col s5">
		<?php
            		echo "<a href='mobile_view?id=".$stuff->ID."'><img width=180 height=200 src=".base_url($stuff->Photo)."></a><br>";
		?>
            			</div>

						<div class="col s7">
						<h5>
		<?php

					echo $stuff->Manufacturer." ".$stuff->Name;
		?>
						</h5>
		<?php

					echo "<br>Ανάλυση Οθόνης: ";
					echo $stuff->Resolution;
					echo " pixels";
            		echo "<br>Μέγεθος Οθόνης: ";
					echo $stuff->Screen_Size;
					echo " inch<br>Επεξεργαστής: ";
					echo $stuff->CPU_type;
					echo "<br>Εσωτερική Μνήμη: ";
					echo $stuff->Internal_Memory;
					echo " GB<br>Μνήμη Ram: ";
					echo $stuff->Ram;
					if ($stuff->Ram > 16) {
						echo " MB";
					}else{
						echo " GB";
					}
					echo "<br>Φωτογραφική Μηχανή: ";
					echo $stuff->Camera." MP";
		?>
            			</div>
        			</div>
		<?php
            		echo "</td>";

            		if($count == 2){
						echo "</tr>";
            			$count = 1;
            		}else{
            			$count = 2;
            		}
            	}
            }

    	?>


        </tbody>
      </table>

  <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
  </div>

            

</div>