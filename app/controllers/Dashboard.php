<?php 
class Dashboard extends Controller {
    public function __construct()
    {
        if (!isset($_SESSION['logged_in']) && $_SERVER['REQUEST_URI'] != '/public/dashboard/search_address') {
            // User is not logged in and is not accessing the allowed route
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
    }

    public function index()
    {
        header('Location: ' . BASEURL . '/dashboard/home');
    }

    // done here
    public function home()
    {
        // Title
        $data['title'] = 'Dashboard - Sirvice';
        // Get user data
        $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
        // Get notification data
        $this->model('Notifications_model')->createNotificationToday($_SESSION['user_id']);
        $data['notification'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
        // Get dashboard data
        $data['upcoming_order'] = $this->model('Orders_model')->upcomingOrders($_SESSION['user_id']);
        $data['appointment_scheduled'] = $this->model('Orders_model')->countUpcomingOrders($_SESSION['user_id']);
        $data['total_order'] = $this->model('Orders_model')->countTotalOrders($_SESSION['user_id']);
        $data['global_ratings'] = $this->model('Reviews_model')->getAverageRatingReviews();
        $data['technician'] = $this->model('Technicians_model')->getTechnician();
        $data['tips'] = $this->model('Tips_model')->getFirstTips();
        // Load view
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/home', $data);
        $this->view('templates/dashboard/footer');
    }

    public function order($orderId = 0)
    {
        if (is_int($orderId)) {
            // do something if $my_var is an integer
            if ($orderId != 0) {
                // Get user data
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['orders'] = $this->model('Orders_model')->getOrderById($orderId);
                $data['title'] = 'Order - Sirvice';
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/order/detail', $data);
                $this->view('templates/dashboard/footer');
                return;
            } else {
                // Get user data
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['title'] = 'Order - Sirvice';
                $data['inprogress_orders'] = $this->model('Orders_model')->inprogressOrders($_SESSION['user_id']);
                $data['scheduled_orders'] = $this->model('Orders_model')->scheduledOrders($_SESSION['user_id']);
                $data['history_orders'] = $this->model('Orders_model')->historyOrders($_SESSION['user_id']);
                $data['technician'] = $this->model('Technicians_model')->getTechnician();
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/order/main', $data);
                $this->view('templates/dashboard/footer');
            }
        } else {
            // do something else if $my_var is not an integer
            header('Location: ' . BASEURL . '/notfound/index');
        }
        
    }

    public function newOrder()
    {
        // Get user data
        $data['user']['name'] = $_SESSION['user_name'];
        $data['user']['email'] = $_SESSION['user_email'];
        $data['title'] = 'New Order - Sirvice';
        // $data['services'] = $this->model('Services_model')->getServices();
        // $data['technicians'] = $this->model('Technicians_model')->getTechnician();
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/order/new', $data);
        $this->view('templates/dashboard/footer');
    }

    public function profile()
    {
        $data['title'] = 'Profile - Sirvice';
        // Get user data
        $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
        $data['addresses'] = $this->model('Address_model')->getAddressByUserId($_SESSION['user_id']);
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/profile/main', $data);
        $this->view('templates/dashboard/footer');
    }

    public function update_profile()
    {
        if ($this->model('Users_model')->updateUser($_SESSION['user_id'],$_POST) > 0) {
            // Flash message
            header('Location: ' . BASEURL . '/dashboard/profile');
            exit;
        } else {
            // Flash message
            header('Location: ' . BASEURL . '/dashboard/profile');
            exit;
        }
    }

    // search address
    public function search_address()
    {
        $addressQuery = $_POST['address'];
        $data = $this->model('Address_model')->searchAddress($addressQuery, $_SESSION['user_id']);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function delete_profile()
    {
        if ($this->model('Users_model')->deleteUser($_SESSION['user_id']) > 0) {
            // Flash message
            header('Location: ' . BASEURL . '/auth/logout');
            exit;
        } else {
            // Flash message
            header('Location: ' . BASEURL . '/dashboard/profile');
            exit;
        }
    }

    public function tips()
    {
        $data['title'] = 'Tips - Sirvice';
        // Get user data
        $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/tips/main', $data);
        $this->view('templates/dashboard/footer');
    }

    public function detailtips()
    {
        $data['title'] = 'Tips - Sirvice';
        // Get user data
        $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/tips/detail', $data);
        $this->view('templates/dashboard/footer');
    }
}