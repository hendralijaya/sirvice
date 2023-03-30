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
        $data['user']['name'] = $_SESSION['user_name'];
        $data['upcoming_order'] = $this->model('Orders_model')->upcomingOrders($_SESSION['user_id']);
        $data['appointment_scheduled'] = $this->model('Orders_model')->countUpcomingOrders($_SESSION['user_id']);
        $data['appointment_scheduled'] = isset($data['appointments_scheduled']) ? $data['appointments_scheduled'] : 0;
        $data['total_order'] = $this->model('Orders_model')->countTotalOrders($_SESSION['user_id']);
        $data['total_order'] = isset($data['total_orders']) ? $data['total_orders'] : 0;
        $data['global_ratings'] = $this->model('Reviews_model')->getAverageRatingReviews();
        $data['global_ratings'] = isset($data['global_ratings']) ? $data['global_ratings'] : 0;
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/home', $data);
        $this->view('templates/dashboard/footer');
    }

    public function order()
    {
        $data['title'] = 'Order - Sirvice';
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/order/main', $data);
        $this->view('templates/dashboard/footer');
    }

    public function profile()
    {
        $data['title'] = 'Profile - Sirvice';
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/profile/main', $data);
        $this->view('templates/dashboard/footer');
    }
}