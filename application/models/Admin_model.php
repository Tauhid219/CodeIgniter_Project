<?php
class Admin_model extends CI_Model
{
    public function save_services($boxicon, $headline, $subtitle)
    {
        $this->db->insert('services', ['boxicon'=>$boxicon, 'headline'=>$headline, 'subtitle'=>$subtitle]);
    }
    public function getserviceslist()
    {
        $data=$this->db->get('services');
        return $data->result();
    }
    public function getservicesedit($id)
    {
        $data=$this->db->where('id', $id)->get('services');
        return $data->row();
    }
    public function update_services($id, $boxicon, $headline, $subtitle)
    {
        $this->db->where('id', $id)->update('services', ['boxicon'=>$boxicon, 'headline'=>$headline, 'subtitle'=>$subtitle]);
    }
    public function delete_services($id)
    {
        $this->db->where('id', $id)->delete('services');
    }
    public function getabout()
    {
        $data=$this->db->get('aboutus');
        return $data->result();
    }
    public function getaboutusedit($id)
    {
        $data=$this->db->where('id', $id)->get('aboutus');
        return $data->row();  
    }
    public function update_aboutus($id, $headline, $subtitle, $list1, $list2, $list3, $detail)
    {
        $this->db->where('id', $id)->update('aboutus', ['headline'=>$headline, 'subtitle'=>$subtitle, 'list1'=>$list1, 'list2'=>$list2, 'list3'=>$list3, 'detail'=>$detail]);
    }
    public function gethome()
    {
        $data=$this->db->get('home');
        return $data->result();
    }
    public function gethomeedit($id)
    {
        $data=$this->db->where('id', $id)->get('home');
        return $data->row();  
    }
    public function update_home($id, $headline, $subtitle, $target1, $target2, $target3, $target4, $target5)
    {
        $this->db->where('id', $id)->update('home', ['headline'=>$headline, 'subtitle'=>$subtitle, 'target1'=>$target1, 'target2'=>$target2, 'target3'=>$target3, 'target4'=>$target4, 'target5'=>$target5]);
    }
    public function save_whyus($boxicon, $headline, $subtitle)
    {
        $this->db->insert('features', ['boxicon'=>$boxicon, 'headline'=>$headline, 'subtitle'=>$subtitle]);
    }
    public function getwhyuslist()
    {
        $data=$this->db->get('features');
        return $data->result();
    }
    public function getwhyusedit($id)
    {
        $data=$this->db->where('id', $id)->get('features');
        return $data->row();
    }
    public function update_whyus($id, $boxicon, $headline, $subtitle)
    {
        $this->db->where('id', $id)->update('features', ['boxicon'=>$boxicon, 'headline'=>$headline, 'subtitle'=>$subtitle]);
    }
    public function delete_whyus($id)
    {
        $this->db->where('id', $id)->delete('features');
    }
    public function save_clients($data)
    {
        $this->db->insert('clients', $data);
    }
    public function getclientslist()
    {
        $data=$this->db->get('clients');
        return $data->result();
    }
    public function delete_clients($id)
    {
        $this->db->where('id', $id)->delete('clients');
    }
    public function save_team($data)
    {
        $this->db->insert('team', $data);
    }
    public function getteamlist()
    {
        $data=$this->db->get('team');
        return $data->result();
    }
    public function delete_team($id)
    {
        $this->db->where('id', $id)->delete('team');
    }
    public function getcontact()
    {
        $data=$this->db->get('contact');
        return $data->result();
    }
    public function getcontactedit($id)
    {
        $data=$this->db->where('id', $id)->get('contact');
        return $data->row();  
    }
    public function update_contact($id, $map, $location, $email, $phone)
    {
        $this->db->where('id', $id)->update('contact', ['map'=>$map, 'location'=>$location, 'email'=>$email, 'phone'=>$phone]);
    }
    public function getcontactmsg()
    {
        $data=$this->db->get('contactmsg');
        return $data->result();
    }
    public function delete_contactmsg($id)
    {
        $this->db->where('id', $id)->delete('contactmsg');
    }  
}

?>