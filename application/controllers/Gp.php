<?php

class Gp extends CI_Controller
{
    public function index()
    {
        $this->load->view('gp/index');
    }
    public function innerpage()
    {
        $this->load->view('gp/inner-page');
    }
    public function homepage()
    {
        // $this->load->view('gp/homepage');
        $data['home']=$this->Gp_model->gethome();
        $this->load->view('gp/homepage', $data);
    }
    public function aboutpage()
    {
        // $this->load->view('gp/aboutpage');
        $data['about']=$this->Gp_model->getabout();
        $data['whyus']=$this->Gp_model->getwhyus();
        $data['clients']=$this->Gp_model->getclients();
        $this->load->view('gp/aboutpage', $data);
        // $this->load->view('gp/aboutpage', $fata);
    }
    public function servicespage()
    {
        // $this->load->view('gp/servicespage');

        // $this->load->model('Gp_model');
        $data['serv']=$this->Gp_model->getserv();
        $this->load->view('gp/servicespage', $data);
    }
    public function portfoliopage()
    {
        $this->load->view('gp/portfoliopage');
    }
    public function teampage()
    {
        // $this->load->view('gp/teampage');
        $data['team']=$this->Gp_model->getteam();
        $this->load->view('gp/teampage', $data);
    }
    public function contactpage()
    {
        // $this->load->view('gp/contactpage');
        $data['contact']=$this->Gp_model->getcontact();
        $this->load->view('gp/contactpage', $data);
    }
    public function contactmsg_save()
	{
		$data=$this->input->post();
		// $this->load->model('Gp_model');
		$this->Gp_model->save_contactmsg($data);
		redirect(base_url('Gp/contactpage'), 'refresh');

	}
}


?>