<div class="container">
<?php
	if(isset($search_name)){
		$search_name = strtolower($search_name);
		$this->db->select('*');
		$this->db->like('Name', $search_name); 
		$this->db->or_like('Manufacturer', $search_name); 
		$this->db->order_by("Manufacturer, Name"); 
		$query = $this->db->get('mobile');

        if($query->num_rows() > 0)
        {
?>
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

?>


        </tbody>
      </table>
<?php

            }else{
            	echo "Δεν βρέθηκε κάτι με αυτό το όνομα στη βάση δεδομένων.";
            }
	}
?>
</div>