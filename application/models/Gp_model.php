<?php

class Gp_model extends CI_Model
{
    public function getserv()
    {
        $data=$this->db->get('services');
        return $data->result();
    }
    public function getabout()
    {
        $data=$this->db->get('aboutus');
        return $data->result();
    }
    public function getwhyus()
    {
        $fata=$this->db->get('features');
        return $fata->result();
    }
    public function gethome()
    {
        $data=$this->db->get('home');
        return $data->result();
    }
    public function getclients()
    {
        $data=$this->db->get('clients');
        return $data->result();
    }
    public function getteam()
    {
        $data=$this->db->get('team');
        return $data->result();
    }
    public function getcontact()
    {
        $data=$this->db->get('contact');
        return $data->result();
    }
    public function save_contactmsg($data)
    {
        $this->db->insert('contactmsg', $data);
    }
}


?>