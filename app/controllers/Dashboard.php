<?php 
class Dashboard extends Controller {
    public function __construct()
    {
        if (!isset($_SESSION['logged_in'])) {
            // Error message
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
    }
    public function index()
    {
        header('Location: ' . BASEURL . '/dashboard/home');
    }

    public function home()
    {
        $data['title'] = 'Dashboard - Sirvice';
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/home', $data);
        $this->view('templates/dashboard/footer');
    }

    public function ordermain()
    {
        $data['title'] = 'Order - Sirvice';
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/order/main', $data);
        $this->view('templates/dashboard/footer');
    }
}