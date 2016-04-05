<?php
    class home_model extends CI_Model
    {
		
        public function all_mobiles()
        {
            $query = $this->db->query("SELECT * FROM mobile");

            return $query; //return the data
        }
    }
?>
