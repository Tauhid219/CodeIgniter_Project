<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin/index');
	}
	public function services_insert()
	{
		$this->load->view('admin/services_insert');
	}
	public function services_save()
	{
		$boxicon=$this->input->post('boxicon');
		$headline=$this->input->post('headline');
		$subtitle=$this->input->post('subtitle');
		$this->load->model('Admin_model');
		$this->Admin_model->save_services($boxicon, $headline, $subtitle);
		redirect(base_url('services_insert'), 'refresh');

	}
	public function services_list()
	{
		// $this->load->model('Admin_model');
        $data['servlist']=$this->Admin_model->getserviceslist();
        $this->load->view('admin/services_list', $data);
	}
	public function services_edit($id)
	{
		// $this->load->model('Admin_model');
		$data['servedit']=$this->Admin_model->getservicesedit($id);
		$this->load->view('admin/services_edit', $data);
	}
	public function services_update($id)
	{
		$boxicon=$this->input->post('boxicon');
		$headline=$this->input->post('headline');
		$subtitle=$this->input->post('subtitle');
		// $this->load->model('Admin_model');
		$this->Admin_model->update_services($id, $boxicon, $headline, $subtitle);
		redirect(base_url('services_list'), 'refresh');
	}
	public function services_delete($id)
	{
		$this->Admin_model->delete_services($id);
		redirect(base_url('services_list'), 'refresh');
	}
	public function aboutus_list()
	{
		$data['about']=$this->Admin_model->getabout();
        $this->load->view('admin/aboutus', $data);
	}
	public function aboutus_edit($id)
	{
		// $this->load->model('Admin_model');
		$data['abedit']=$this->Admin_model->getaboutusedit($id);
		$this->load->view('admin/aboutus_edit', $data);
	}
	public function aboutus_update($id)
	{
		$headline=$this->input->post('headline');
		$subtitle=$this->input->post('subtitle');
		$list1=$this->input->post('list1');
		$list2=$this->input->post('list2');
		$list3=$this->input->post('list3');
		$detail=$this->input->post('detail');
		// $this->load->model('Admin_model');
		$this->Admin_model->update_aboutus($id, $headline, $subtitle, $list1, $list2, $list3, $detail);
		redirect(base_url('welcome/aboutus_list'), 'refresh');
	}
	public function home()
	{
		$data['home']=$this->Admin_model->gethome();
        $this->load->view('admin/home', $data);
	}
	public function home_edit($id)
	{
		// $this->load->model('Admin_model');
		$data['homedit']=$this->Admin_model->gethomeedit($id);
		$this->load->view('admin/home_edit', $data);
	}
	public function home_update($id)
	{
		$headline=$this->input->post('headline');
		$subtitle=$this->input->post('subtitle');
		$target1=$this->input->post('target1');
		$target2=$this->input->post('target2');
		$target3=$this->input->post('target3');
		$target4=$this->input->post('target4');
		$target5=$this->input->post('target5');
		// $this->load->model('Admin_model');
		$this->Admin_model->update_home($id, $headline, $subtitle, $target1, $target2, $target3, $target4, $target5);
		redirect(base_url('welcome/home'), 'refresh');
	}
	public function whyus_insert()
	{
		$this->load->view('admin/whyus_insert');
	}
	public function whyus_save()
	{
		$boxicon=$this->input->post('boxicon');
		$headline=$this->input->post('headline');
		$subtitle=$this->input->post('subtitle');
		$this->load->model('Admin_model');
		$this->Admin_model->save_whyus($boxicon, $headline, $subtitle);
		redirect(base_url('Welcome/whyus_insert'), 'refresh');

	}
	public function whyus_list()
	{
		// $this->load->model('Admin_model');
        $data['whylist']=$this->Admin_model->getwhyuslist();
        $this->load->view('admin/whyus_list', $data);
	}
	public function whyus_edit($id)
	{
		// $this->load->model('Admin_model');
		$data['whyedit']=$this->Admin_model->getwhyusedit($id);
		$this->load->view('admin/whyus_edit', $data);
	}
	public function whyus_update($id)
	{
		$boxicon=$this->input->post('boxicon');
		$headline=$this->input->post('headline');
		$subtitle=$this->input->post('subtitle');
		// $this->load->model('Admin_model');
		$this->Admin_model->update_whyus($id, $boxicon, $headline, $subtitle);
		redirect(base_url('Welcome/whyus_list'), 'refresh');
	}
	public function whyus_delete($id)
	{
		$this->Admin_model->delete_whyus($id);
		redirect(base_url('Welcome/whyus_list'), 'refresh');
	}
	public function clients_insert()
	{
		$this->load->view('admin/clients_insert');
	}
	public function clients_save()
	{
		$data=$this->input->post();
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 500;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		// $config['encrypt_name']           = true;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('photo'))
		{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload_form', $error);
		}
		else
		{
				$info =  $this->upload->data();
				// echo "<pre>";
				$data['photo']=$info['file_name'];
		}
		$this->Admin_model->save_clients($data);
		redirect(base_url('Welcome/clients_insert'), 'refresh');
	}
	public function clients_list()
	{
		$data['cllist']=$this->Admin_model->getclientslist();
        $this->load->view('admin/clients_list', $data);
	}
	public function clients_delete($id)
	{
		$this->Admin_model->delete_clients($id);
		redirect(base_url('Welcome/clients_list'), 'refresh');
	}
	public function team_insert()
	{
		$this->load->view('admin/team_insert');
	}
	public function team_save()
	{
		$data=$this->input->post();
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 500;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		// $config['encrypt_name']           = true;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('photo'))
		{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload_form', $error);
		}
		else
		{
				$info =  $this->upload->data();
				// echo "<pre>";
				$data['photo']=$info['file_name'];
		}
		$this->Admin_model->save_team($data);
		redirect(base_url('Welcome/team_insert'), 'refresh');
	}
	public function team_list()
	{
		$data['teamlist']=$this->Admin_model->getteamlist();
        $this->load->view('admin/team_list', $data);
	}
	public function team_delete($id)
	{
		$this->Admin_model->delete_team($id);
		redirect(base_url('Welcome/team_list'), 'refresh');
	}
	public function contact_list()
	{
		$data['contact']=$this->Admin_model->getcontact();
        $this->load->view('admin/contact_list', $data);
	}
	public function contact_edit($id)
	{
		// $this->load->model('Admin_model');
		$data['conedit']=$this->Admin_model->getcontactedit($id);
		$this->load->view('admin/contact_edit', $data);
	}
	public function contact_update($id)
	{
		$map=$this->input->post('map');
		$location=$this->input->post('location');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		// $this->load->model('Admin_model');
		$this->Admin_model->update_contact($id, $map, $location, $email, $phone);
		redirect(base_url('welcome/contact_list'), 'refresh');
	}
	public function contact_msg()
	{
		$data['cmsg']=$this->Admin_model->getcontactmsg();
        $this->load->view('admin/contact_msg', $data);
	}
	public function contactmsg_delete($id)
	{
		$this->Admin_model->delete_contactmsg($id);
		redirect(base_url('Welcome/contact_msg'), 'refresh');
	}

}
