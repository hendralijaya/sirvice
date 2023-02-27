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
        echo 'dashboard <a href="' . BASEURL . '/auth/logout">Logout</a>';
    }
}