<?php 

class Auth extends Controller {
  public function __construct()
  {
      if (isset($_SESSION['logged_in']) && $_SERVER['REQUEST_URI'] != '/public/auth/logout') {
          header('Location: ' . BASEURL . '/dashboard');
          exit;
      }
  }
  

    public function index()
    {
        header('Location: ' . BASEURL . '/auth/login');
    }

    public function register()
    {
        
      if( isset($_POST['register']) ) {
        // Validate required register fields
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['repassword']) || empty($_POST['phone_number']) || empty($_POST['register'])) {
            Flasher::setFlash('All fields are required', 'register', 'danger');
            $data['title'] = 'Register - Sirvice';
            $this->view('auth/register', $data);
            exit;
        }
        // Validate phone number is numeric
        if( !is_numeric($_POST['phone_number']) ) {
            Flasher::setFlash('Phone number must be numeric', 'register', 'danger');
            $data['title'] = 'Register - Sirvice';
            $this->view('auth/register', $data);
            exit;
        }
        // Validate password and repassword
        if( $_POST['password'] != $_POST['repassword'] ) {
            Flasher::setFlash('Password and repassword must be same', ' in register', 'danger');
            $data['title'] = 'Register - Sirvice';
            $this->view('auth/register', $data);
            exit;
        }
        $_POST['verification_code'] = uniqid();
        if( $this->model('Auth_model')->register($_POST) > 0) {
            $_SESSION['email'] = $_POST['email'];
            $mailer = Helper::setUpMailConfiguration($_POST['email'], $_POST['name'], 'Verification Code', '<a href="' . BASEURL . '/auth/verify/' . $_POST['verification_code'] . '">Click here to verify your account</a>');
            $success = $mailer->send();
            if ($success) {
                header('Location: ' . BASEURL . '/auth/verification');
                exit;
            } else {
                Flasher::flash('Message could not be sent. Mailer Error: ', 'register', 'danger');
                header('Location: ' . BASEURL . '/auth/login');
                exit;
            }
            
        } else {
            // Flash register failed
            Flasher::setFlash('Register failed : ', 'email or phone number is duplicate', 'danger');
            $data['title'] = 'Register - Sirvice';
            $this->view('auth/register', $data);
            exit;
        }
    }
        $data['title'] = 'Register - Sirvice';
        $this->view('auth/register', $data);
    }

    public function verify($verificationCode)
    {
        if( $this->model('Auth_model')->verify($verificationCode) > 0 ) {
            // Flash verification success
            Flasher::setFlash('Verification success : ', 'you can login now', 'success');
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        } else {
            // Flash verification failed
            Flasher::setFlash('You are not ', 'allowed', 'danger');
            header('Location: ' . BASEURL . '/auth/register');
            exit;
        }
    }

    public function login() 
    {
        unset($_SESSION['email']);
        unset($_SESSION['password_reset_token']);
        $user = $this->getRememberMeUser();
        if ($user) {
            $this->setSession($user);
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
        if (isset($_POST['login'])) {
            $user = $this->model('Auth_model')->login($_POST);
            if ($user) {
                if (isset($_POST['remember_me'])) {
                    $this->setRememberMeCookie($user['id']);
                }
                $this->setSession($user);
                header('Location: ' . BASEURL . '/dashboard');
                exit;
            }
            Flasher::setFlash('Login failed : ', 'email or password is incorrect', 'danger');
        }
        $data['title'] = 'Login - Sirvice';
        $this->view('auth/login', $data);
        $this->view('templates/auth/carousel');
    }

    private function getRememberMeUser() 
    {
        if (isset($_COOKIE['remember_me'])) {
            list($selector, $token) = explode(':', $_COOKIE['remember_me']);
            $validator = base64_decode($token);
            $rememberMeToken = $this->model('Remember_Me_Token_model')->getRememberMeToken($selector);
            if ($rememberMeToken && hash_equals($rememberMeToken['token'], hash('sha256', $validator))) {
                $user = $this->model('Users_model')->getUserById($rememberMeToken['user_id']);
                return $user;
            }
            $this->model('Remember_Me_Token_model')->deleteRememberMeToken($selector);
        }
        return null;
    }

    private function getResetPasswordUser($selectorToken) 
    {
        list($selector, $token) = explode(':', $selectorToken);
        $validator = base64_decode($token);
        $passwordResetToken = $this->model('Password_Reset_Token_model')->getPasswordResetToken($selector);
        if ($passwordResetToken && hash_equals($passwordResetToken['token'], hash('sha256', $validator))) {
            $user = $this->model('Users_model')->getUserById($passwordResetToken['user_id']);
            $this->model('Password_Reset_Token_model')->deletePasswordResetToken($selector);
            return $user;
        }
        var_dump($this->model('Password_Reset_Token_model')->deletePasswordResetToken($selector));
        exit;
        return null;
    }

    private function setSession($user) 
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];
        session_regenerate_id(true);
    }

    private function setRememberMeCookie($userId) 
    {
        $selector = bin2hex(random_bytes(8));
        $validator = random_bytes(32);
        $token = hash('sha256', $validator);
        $expires = time() + 60 * 60 * 24 * 7;
        $this->model('Remember_Me_Token_model')->insertRememberMeToken($userId, $token, $selector);
        setcookie('remember_me', $selector . ':' . base64_encode($validator), $expires, '/');
    }

    private function setPasswordResetToken($userId) 
    {
        $selector = bin2hex(random_bytes(8));
        $validator = random_bytes(32);
        $token = hash('sha256', $validator);
        $currentTime = new DateTime();
        // Add one day to the current datetime
        $tomorrowDatetime = $currentTime->modify('+1 day');
        // Format the tomorrow datetime
        $tomorrowFormatted = $tomorrowDatetime->format('Y-m-d H:i:s');
        $this->model('Password_Reset_Token_model')->insertPasswordResetToken($userId, $token, $selector, $tomorrowFormatted);
        return $selector . ':' . base64_encode($validator);
    }

    public function logout()
    {
        // Delete remember me token from database
        if (isset($_COOKIE['remember_me'])) {
            list($selector, $token) = explode(':', $_COOKIE['remember_me']);
            $this->model('Remember_Me_Token_model')->deleteRememberMeToken($selector);
        }
        setcookie('remember_me', '', time() - 3600, '/');
        session_start();
        session_unset();
        Flasher::setFlash('Logout success : ', 'you have been logged out', 'success');
        header('Location: ' . BASEURL . '/auth/login');
        exit;
    }

    public function forgotpassword() {
        if (isset($_POST['forgot_password'])) {
            $user = $this->model('Auth_model')->getUserByEmail($_POST['email']);
            if ($user) {
                // Generate token
                $token = $this->setPasswordResetToken($user['id']);
                $_SESSION['password_reset_token'] = $token;
                $mailer = Helper::setUpMailConfiguration($_POST['email'], $user['name'], 'Password Recovery', '<a href="' . BASEURL . '/auth/changepassword/' . $token . '">Click here to change your password</a>');
                if(!$mailer->send()) {
                    // FLASH FAILED
                    // echo 'Message could not be sent. Mailer Error: ' . $mailer->ErrorInfo;
                    Flasher::flash('Message could not be sent. Mailer Error: ' . $mailer->ErrorInfo, 'forgot_password', 'danger');
                } else {
                    // FLASH SUCCESS
                    Flasher::flash('Message has been sent for ', 'forgot password', 'success');
                    $_SESSION['email'] = $_POST['email'];
                    header('Location: ' . BASEURL . '/auth/passwordrecovery/');
                    exit;
                }
            }else {
                // Flash email not found
                Flasher::flash('Email not found : ', 'email is not registered', 'danger');
            }
        }
        $data['title'] = 'Forgot Password - Sirvice';
        $this->view('auth/forgot-password', $data);
        $this->view('templates/auth/carousel');
    }

    public function passwordrecovery() {
        if (isset($_SESSION['email'])) {
            $data['title'] = 'Password Recovery - Sirvice';
            $data['email'] = $_SESSION['email'];
            $this->view('auth/password-recovery', $data);
            $this->view('templates/auth/carousel');
        } else {
            Flasher::flash('You are not ', 'allowed', 'danger');
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
        
    }

    public function changepassword($token = '') {
        if (isset($_POST['change_password'])) {
            $user = $this->getResetPasswordUser($_SESSION['password_reset_token']);
            if ($user) {
                if ($_POST['password'] == $_POST['repassword']) {
                    
                    if ($this->model('Auth_model')->changePassword($user['id'], $_POST['password'])) {
                        // FLASH SUCCESS
                        Flasher::setFlash('Password changed ', 'successfully', 'success');
                        header('Location: ' . BASEURL . '/auth/login');
                        exit;
                    } else {
                        // FLASH FAILED
                        Flasher::setFlash('Password change failed', 'change_password', 'danger');
                    }
                } else {
                    // FLASH FAILED
                    Flasher::setFlash('Password change failed : ', 'password and password confirmation does not match', 'danger'); 
                }
            } else {
                // FLASH FAILED
                Flasher::setFlash('Password change failed : ', 'token is invalid', 'danger'); 
            }
            $data['title'] = 'Change Password - Sirvice';
            $this->view('auth/change-password', $data);
            $this->view('templates/auth/carousel');
            exit;
        } else if ($token != '') {
            $data['title'] = 'Change Password - Sirvice';
            $this->view('auth/change-password', $data);
            $this->view('templates/auth/carousel');
            exit;
        } if($token == '') {
            Flasher::flash('You are not ', 'allowed', 'danger');
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        } else {
            Flasher::flash('You are not ', 'allowed', 'danger');
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
    }

    public function verification() {
        if (isset($_SESSION['email'])) {
            $data['title'] = 'Verification Sent - Sirvice';
            $data['email'] = $_SESSION['email'];
            $this->view('auth/verification', $data);
            $this->view('templates/auth/carousel');
        } else {
            Flasher::flash('You are not ', 'allowed', 'danger');
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
    }
}