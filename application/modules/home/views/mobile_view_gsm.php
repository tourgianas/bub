<?php
	if(isset($_GET['name']) || isset($_GET['manufacturer'])){
		$name = $_GET['name'];
		$manufacturer = $_GET['manufacturer'];

		$this->db->select('*');

		$where = "Name='".$name."' AND Manufacturer='".$manufacturer."'";
		$this->db->where($where); 
		$query = $this->db->get('mobile');

		$stuff = $query->row();
		
	}
?>
<div class="container">
<br>
	<div class="row">
		<div class="col s6">
			<?php
					echo "<img width=400 height=400 src=".base_url($stuff->Photo).">";
			?>
		</div>
		<div class="col s6">
		<h2>
			<?php
					echo $stuff->Name;
			?>
		</h2>
		<p>
			<?php
					echo "<br>Μέγεθος Οθόνης: ";
					echo $stuff->Screen_Size;
					echo "<br>Επεξεργαστής: ";
					echo $stuff->CPU_type." ".$stuff->CPU;
					echo "<br>Εσωτερική Μνήμη: ";
					echo $stuff->Internal_Memory;
					echo "<br>Card Slot: ";
					echo $stuff->Card_Slot;
					echo "<br>Μνήμη Ram: ";
					echo $stuff->Ram;
					echo " GB<br>Φωτογραφική Μηχανή: ";
					echo $stuff->Camera;
					echo " MP<br>Λειτουργικό Σύστημα: ";
					echo $stuff->OS;
					echo "<br>Μπαταρία: ";
					echo $stuff->Battery;
					echo "<br>Κατασκευαστής: ";
					echo $stuff->Manufacturer;
					echo "<br>Ανάλυση Οθόνης: ";
					echo $stuff->Resolution;
					echo " pixels";
			?>
			</p>
		</div>

	</div>
</div>