<?php 

class Jobs extends CI_Model {

    var $description   = '';
    var $timestamp = '';
    

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all_jobs()
    {
   		$this->load->database();
        $query = $this->db->get('jobs');
        return $query->result();
    }
    
    function get_oldest_job()
    {
    	$this->load->database();
    	$this->db->order_by("timestamp", "asc"); 
        $query = $this->db->get('jobs',1);
        return $query->result();
    }
    

    function insert_entry()
    {
        $this->description   = $_POST['description']; // please read the below note
  
        $this->timestamp    = time();

        $this->db->insert('jobs', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}

?>