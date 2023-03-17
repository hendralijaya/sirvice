<?php 

class LandingPage extends Controller {
    public function __construct()
    {
        if (isset($_SESSION['logged_in'])) {
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
    }
    
    public function index()
    {
        header('Location: ' . BASEURL . '/landingpage/home');
    }

    public function home()
    {
        $data['title'] = 'Home - Sirvice';
        $this->view('templates/landing-page/header', $data);
        $this->view('landing-page/home', $data);
        $this->view('templates/landing-page/footer');
    }

    public function aboutus()
    {
        $data['title'] = 'About - Sirvice';
        $this->view('templates/landing-page/header', $data);
        $this->view('landing-page/aboutus', $data);
        $this->view('templates/landing-page/footer');
    }

    public function services()
    {
        $data['title'] = 'Services - Sirvice';
        $this->view('templates/landing-page/header', $data);
        $this->view('landing-page/services', $data);
        $this->view('templates/landing-page/footer');
    }
}