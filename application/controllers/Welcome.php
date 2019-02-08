<?php


use Curl\Curl;

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
    public function about()
    {
        $this->load->view('about');
    }
    public function ad_med()
    {
        $this->load->view('ad-med');
    }
    public function contact()
    {
        $this->load->view('contact');
    }
    public function health_centers()
    {
        $curl = new Curl();
        $curl->setHeader('Content-type', 'application/json');
        $curl->setOpt(CURLOPT_SSL_VERIFYPEER, FALSE);
        $curl->setOpt(CURLOPT_SSL_VERIFYHOST, FALSE);
        $curl->get('https://ad-hoc-referral.com/api/healthcentre/');

        if ($curl->error) {
            echo $curl->getErrorMessage();
        }
        else {
            $data['data'] = json_decode($curl->response);
            $this->load->view('health_centers', $data);
        }
    }
    public function location()
    {
        $id = $_GET['id'];
        $curl = new Curl();
        $curl->setHeader('Content-type', 'application/json');
        $curl->setOpt(CURLOPT_SSL_VERIFYPEER, FALSE);
        $curl->setOpt(CURLOPT_SSL_VERIFYHOST, FALSE);
        $curl->get('https://ad-hoc-referral.com/api/healthcentre/'.$id);
        if ($curl->error) {
            echo $curl->getErrorMessage();
        }
        else {
            $data['data'] = json_decode($curl->response);
            $this->load->view('location', $data);
        }

    }
}
