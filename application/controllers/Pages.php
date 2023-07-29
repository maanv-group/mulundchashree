<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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
		$data['page'] = [
			'title' => "सार्वजनिक उत्सव मंडळ",
			'gallery' => $this->gallery()
		];
		$this->load->view('pages/index', $data);
	}
	
	public function about()
	{
		$data['page'] = [
			'title' => "मंडळाची माहिती - सार्वजनिक उत्सव मंडळ"
		];
		$this->load->view('pages/about', $data);
	}

	public function gallery()
	{
		$this->load->model('FileSystemModel');
		$path =  FCPATH .'assets/gallery/2022/';
		$images = $this->FileSystemModel->scan_dir($path);
		return array_slice($images, 2, count($images));
		// print_r($images);
		// print_r($path);
	}
}
