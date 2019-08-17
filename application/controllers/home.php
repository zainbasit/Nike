<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	/*/**
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('test');
		$this->load->view('footer');

	}

    public function category()
	{
		$this->load->view('header');
		$this->load->view('category');
		$this->load->view('footer');
	}


    public function singleproduct()
	{
		$this->load->view('header');
		$this->load->view('singleproduct');
		$this->load->view('footer');
	}

	public function checkout()
	{
		$this->load->view('header');
		$this->load->view('checkout');
		$this->load->view('footer');
	}

	public function confirmation()
	{
		$this->load->view('header');
		$this->load->view('confirmation');
		$this->load->view('footer');
	}

	public function cart()
	{
		$this->load->view('header');
		$this->load->view('cart');
		$this->load->view('footer');
	}

	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function singleblog()
	{
		$this->load->view('header');
		$this->load->view('singleblog');
		$this->load->view('footer');
	}

	public function blog()
	{
		$this->load->view('header');
		$this->load->view('blog');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function tracking()
	{
		$this->load->view('header');
		$this->load->view('tracking');
		$this->load->view('footer');
	}

	public function elements()
	{
		$this->load->view('header');
		$this->load->view('elements');
		$this->load->view('footer');
	}



}
