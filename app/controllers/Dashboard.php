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
        if (is_numeric($orderId)) {
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
            Flasher::setFlash('Order ', 'not found', 'danger');
            header('Location: ' . BASEURL . '/dashboard/order');
        }
        
    }

    public function newOrder()
    {
        // Get user data
        if(isset($_POST['order'])) {
            if ($this->model('Orders_model')->createOrder($_SESSION['user_id'],$_POST, $_FILES) > 0) {
                $this->model('Notifications_model')->createNotification($_SESSION['user_id'], 'New Order', 'You have a new order');
                Flasher::setFlash('Order has been ', 'created', 'success');
                header('Location: ' . BASEURL . '/dashboard/order');
                exit;
            } else {
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['addresses'] = $this->model('Address_model')->getAddressByUserId($_SESSION['user_id']);
                $data['title'] = 'New Order - Sirvice';
                $data['date'] = date('Y-m-d');
                // Error Flash Message
                Flasher::setFlash('Order : All field is ', 'required', 'danger');
                // $data['services'] = $this->model('Services_model')->getServices();
                // $data['technicians'] = $this->model('Technicians_model')->getTechnician();
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/order/new', $data);
                $this->view('templates/dashboard/footer');
                exit;
            }
        }
        $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
        $data['addresses'] = $this->model('Address_model')->getAddressByUserId($_SESSION['user_id']);
        $data['services'] = $this->model('Services_model')->getAllServices();
        $data['title'] = 'New Order - Sirvice';
        $data['date'] = date('Y-m-d');
        // $data['services'] = $this->model('Services_model')->getServices();
        // $data['technicians'] = $this->model('Technicians_model')->getTechnician();
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/order/new', $data);
        $this->view('templates/dashboard/footer');
    }

    public function detailOrder(){ 
        $data['title'] = 'Detail Order - Sirvice';
        $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
        // $data['orders'] = $this->model('Orders_model')->getOrderById($_POST['order_id']);
        // $data['services'] = $this->model('Services_model')->getServices();
        // $data['technicians'] = $this->model('Technicians_model')->getTechnician();
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/order/detail', $data);
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
        if ($this->model('Users_model')->updateUser($_SESSION['user_id'],$_POST,$_FILES) > 0) {
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

    public function address() {
        $data['title'] = 'Address - Sirvice';
        // Get user data
        $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
        $data['addresses'] = $this->model('Address_model')->getAddressByUserId($_SESSION['user_id']);
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/profile/address', $data);
        $this->view('templates/dashboard/footer');
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

    public function tips($tipId = 0)
    {
        if (is_numeric($tipId)) {
            // do something if $my_var is an integer
            if ($tipId != 0) {
                // Get user data
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['tips'] = $this->model('Tips_model')->getTipsById($tipId);
                $data['title'] = 'Tips - Sirvice';
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/tips/detail', $data);
                $this->view('templates/dashboard/footer');
                return;
            } else {
                // Get user data
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['title'] = 'Tips - Sirvice';
                $data['tips'] = $this->model('Tips_model')->getAllTips();
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/tips/main', $data);
                $this->view('templates/dashboard/footer');
            }
        } else {
            // do something else if $my_var is not an integer
            header('Location: ' . BASEURL . '/notfound/index');
        }
    }

    public function notification(){
        $data['title'] = 'Notification - Sirvice';
        // Get user data
        $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
        $data['notification'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/notification/main', $data);
        $this->view('templates/dashboard/footer');
    }

    public function new_address($addressId = 0){
        if(is_numeric($addressId)){
            if ($addressId != 0) {
                // Get user data
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['address'] = $this->model('Address_model')->getAddressById($addressId);
                $data['title'] = 'New Address - Sirvice';
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/profile/address', $data);
                $this->view('templates/dashboard/footer');
                return;
            } else {
                // Get user data
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['title'] = 'New Address - Sirvice';
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/profile/address', $data);
                $this->view('templates/dashboard/footer');
            }
        } else {
            // do something else if $my_var is not an integer
            header('Location: ' . BASEURL . '/notfound/index');
        }
    }

    public function add_address(){
        if ($this->model('Address_model')->createAddress($_SESSION['user_id'],$_POST) > 0) {
            // Flash message
            Flasher::setFlash('Address successfully ', 'added', 'success');
            header('Location: ' . BASEURL . '/dashboard/profile');
            exit;
        } else {
            // Flash message
            Flasher::setFlash('Address failed to be ', 'added', 'danger');
            header('Location: ' . BASEURL . '/dashboard/profile');
            exit;
        }
    }

    public function update_address($addressId = 0){
        if(is_numeric($addressId)){
            if($addressId > 0){
                if ($this->model('Address_model')->updateAddress($_SESSION['user_id'],$addressId,$_POST) > 0) {
                    // Flash message
                    Flasher::setFlash('Address successfully ', 'updated', 'success');
                    header('Location: ' . BASEURL . '/dashboard/profile');
                    exit;
                } else {
                    // Flash message
                    Flasher::setFlash('Address failed to be ', 'updated', 'danger');
                    header('Location: ' . BASEURL . '/dashboard/profile');
                    exit;
                }
            } else {
                // Flash message
                Flasher::setFlash('Address id ', 'not found', 'danger');
                header('Location: ' . BASEURL . '/dashboard/profile');
                exit;
            }
        }
    }

    public function delete_address($addressId = 0){
        if(is_numeric($addressId)){
            if($addressId > 0) {
                if ($this->model('Address_model')->deleteAddress($_SESSION['user_id'], $addressId) > 0) {
                    // Flash message
                    Flasher::setFlash('Address successfully ', 'deleted', 'success');
                    header('Location: ' . BASEURL . '/dashboard/profile');
                    exit;
                } else {
                    // Flash message
                    Flasher::setFlash('Address not found failed to be ', 'deleted', 'danger');
                    header('Location: ' . BASEURL . '/dashboard/profile');
                    exit;
                }
            }
        }else{
            Flasher::setFlash('Address not found failed to be ', 'deleted', 'danger');
            header('Location: ' . BASEURL . '/dashboard/profile');
        }
    }
}