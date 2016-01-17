<?php
class Home extends CI_Controller {

	public function index() {
		if ( ! file_exists(APPPATH . '/views/pages/home.php'))
		{
		        // Whoops, we don't have a page for that!
		        show_404();
		}

		$css_files = array(
			'main.css',
			'test.css'
		);

		$js_files = array(
			'main-min.css'
		);

		$data = array(
		'page' => 'home',
		'tags' => new Tags(),
		'css' => buildStyleAssets($css_files),
		'js' => buildScriptAssets($js_files),			
		);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer', $data);
	}
}