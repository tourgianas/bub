<?php
    class home_model extends CI_Model
    {
		
        public function all_home_page_participants()
        {
            $query = $this->db->query("SELECT * FROM home_page");

            return $query; //return the data
        }
    }
?>
