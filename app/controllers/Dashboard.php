<?php 
class Dashboard extends Controller {
    public function __construct()
    {
        if (!isset($_SESSION['logged_in']) && $_SERVER['REQUEST_URI'] != '/public/dashboard/search_address' && $_SERVER['REQUEST_URI'] != '/public/dashboard/search_tips') {
            // User is not logged in and is not accessing the allowed route
            Flasher::setFlash('You are not logged in ', 'Please login to access the dashboard', 'danger');
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
        $data['notifications'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
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
            if ($orderId > 0 && $this->model('Orders_model')->checkOrderById($orderId, $_SESSION['user_id'])) {
                // Get user data
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['order'] = $this->model('Orders_model')->getOrderById($orderId, $_SESSION['user_id']);
                $data['address'] = $this->model('Address_model')->getAddressById($_SESSION['user_id'], $data['order']['address_id']);
                $data['technician'] = $this->model('Technicians_model')->getTechnicianById($data['order']['technician_id']);
                $data['title'] = 'Order - Sirvice';
                $data['notifications'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
                $data['services'] = $this->model('Services_model')->getServiceByOrderId($orderId);
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/order/detail', $data);
                $this->view('templates/dashboard/footer');
                return;
            } else if ($orderId == 0) {
                // Get user data
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['title'] = 'Order - Sirvice';
                $data['inprogress_orders'] = $this->model('Orders_model')->inprogressOrders($_SESSION['user_id']);
                $data['scheduled_orders'] = $this->model('Orders_model')->scheduledOrders($_SESSION['user_id']);
                $data['history_orders'] = $this->model('Orders_model')->historyOrders($_SESSION['user_id']);
                $data['technician'] = $this->model('Technicians_model')->getTechnician();
                $data['notifications'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/order/main', $data);
                $this->view('templates/dashboard/footer');
            } else {
                // Get user data
                Flasher::setFlash('Order ', 'not found', 'danger');
                header('Location: ' . BASEURL . '/dashboard/order');
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
            $orderId = $this->model('Orders_model')->createOrder($_SESSION['user_id'],$_POST, $_FILES);
            if ($orderId > 0) {
                $this->model('Notifications_model')->createNotification($_SESSION['user_id'], 'Order Successful!', 'Congratulations, your order has been successfully processed! You can now check the progress of your order, and we look forward to providing you with the best possible experience.', 'http://sirvice/public/dashboard/order/'.$orderId, 'check_circle', 'check', $orderId, $_POST['scheduled_date']);
                Flasher::setFlash('Order has been ', 'created', 'success');
                header('Location: ' . BASEURL . '/dashboard/order');
                exit;
            } else {
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['addresses'] = $this->model('Address_model')->getAddressByUserId($_SESSION['user_id']);
                $data['title'] = 'New Order - Sirvice';
                $data['date'] = date('Y-m-d');
                $data['notifications'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
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
        $data['notifications'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/order/new', $data);
        $this->view('templates/dashboard/footer');
    }

    // public function detailOrder(){ 
    //     $data['title'] = 'Detail Order - Sirvice';
    //     $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
    //     // $data['orders'] = $this->model('Orders_model')->getOrderById($_POST['order_id']);
    //     // $data['services'] = $this->model('Services_model')->getServices();
    //     // $data['technicians'] = $this->model('Technicians_model')->getTechnician();
        
    //     $this->view('templates/dashboard/header-sidebar', $data);
    //     $this->view('dashboard/order/detail', $data);
    //     $this->view('templates/dashboard/footer');

    // }

    public function profile()
    {
        $data['title'] = 'Profile - Sirvice';
        // Get user data
        $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
        $data['addresses'] = $this->model('Address_model')->getAddressByUserId($_SESSION['user_id']);
        $data['notifications'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/profile/main', $data);
        $this->view('templates/dashboard/footer');
    }

    public function change_password()
    {
        if (isset($_POST['change_password'])){
            if ($this->model('Users_model')->changePassword($_SESSION['user_id'],$_POST) > 0) {
                // Flash message
                Flasher::setFlash('Password has been ', 'changed', 'success');
                header('Location: ' . BASEURL . '/dashboard/profile');
                exit;
            } else {
                // Flash message
                Flasher::setFlash('Password : ', 'wrong password', 'danger');
                header('Location: ' . BASEURL . '/dashboard/profile');
                exit;
            }
        } else {
            // Flash message
            Flasher::setFlash('You are not ', 'allowed', 'danger');
            header('Location: ' . BASEURL . '/dashboard/profile');
            exit;
        }
    }

    public function update_profile()
    {
        if(isset($_POST['update_profile'])) {
            if ($this->model('Users_model')->updateUser($_SESSION['user_id'],$_POST,$_FILES) > 0) {
                // Flash message
                header('Location: ' . BASEURL . '/dashboard/profile');
                exit;
            } else {
                // Flash message
                Flasher::setFlash('Profile : ', 'failed to update', 'danger');
                header('Location: ' . BASEURL . '/dashboard/profile');
                exit;
            }
        } else {
            // Flash message
            Flasher::setFlash('You are not ', 'allowed', 'danger');
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

    public function tips($tipId = 0)
    {
        if (is_numeric($tipId)) {
            // do something if $my_var is an integer
            if ($tipId != 0) {
                // Get user data
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['tips'] = $this->model('Tips_model')->getTipsById($tipId);
                $data['title'] = 'Tips - Sirvice';
                $data['notifications'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/tips/detail', $data);
                $this->view('templates/dashboard/footer');
                return;
            } else {
                // Get user data
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['title'] = 'Tips - Sirvice';
                $data['tips'] = $this->model('Tips_model')->getAllTips();
                $data['notifications'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/tips/main', $data);
                $this->view('templates/dashboard/footer');
            }
        } else {
            // do something else if $my_var is not an integer
            header('Location: ' . BASEURL . '/notfound/index');
        }
    }

    // search tips
    public function search_tips()
    {
        $tipsQuery = $_POST['tips'];
        $data = $this->model('Tips_model')->searchTips($tipsQuery);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function notification(){
        $data['title'] = 'Notification - Sirvice';
        // Get user data
        $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
        $data['notifications'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
        $this->view('templates/dashboard/header-sidebar', $data);
        $this->view('dashboard/notification/main', $data);
        $this->view('templates/dashboard/footer');
    }

    public function address($addressId = 0){
        if (isset($_POST['add_address'])) {
            if ($this->model('Address_model')->addAddress($_SESSION['user_id'],$_POST) > 0) {
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
        if (isset($_POST['update_address']) && isset($_SESSION['address_id'])) {
            if ($this->model('Address_model')->updateAddress($_SESSION['user_id'], $_SESSION['address_id'],$_POST) > 0) {
                // Flash message
                unset($_SESSION['address_id']);
                Flasher::setFlash('Address successfully ', 'updated', 'success');
                header('Location: ' . BASEURL . '/dashboard/profile');
                exit;
            } else {
                // Flash message
                Flasher::setFlash('Address failed to be ', 'updated', 'danger');
                header('Location: ' . BASEURL . '/dashboard/profile');
                exit;
            }
        }
        if(is_numeric($addressId)){
            if ($addressId != 0) {
                // Get user data
                $_SESSION['address_id'] = $addressId;
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['address'] = $this->model('Address_model')->getAddressById($_SESSION['user_id'], $addressId);
                $data['title'] = 'Address - Sirvice';
                $data['view'] = 'update';
                $data['notifications'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/profile/address', $data);
                $this->view('templates/dashboard/footer');
                return;
            } else {
                // Get user data
                $data['user'] = $this->model('Users_model')->getUserById($_SESSION['user_id']);
                $data['title'] = 'Address - Sirvice';
                $data['view'] = 'add';
                $data['notifications'] = $this->model('Notifications_model')->getNotifications($_SESSION['user_id']);
                $this->view('templates/dashboard/header-sidebar', $data);
                $this->view('dashboard/profile/address', $data);
                $this->view('templates/dashboard/footer');
            }
        } else {
            // do something else if $my_var is not an integer
            header('Location: ' . BASEURL . '/notfound/index');
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