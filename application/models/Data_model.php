<?php

class Data_model extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }

    public function list_streamer(){
        $this->db->from('streamer');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_streamer_infos($streamer){
        $this->db->from('streamer');
        $this->db->where('nom', $streamer);
        $query = $this->db->get();
        return $query->row_array();
    }

        public function video_streamer($streamer){
        $this->db->from('video');
        $this->db->where('auteur',$streamer);
        $query = $this->db->get();
        return $query->result_array();
    }
}
