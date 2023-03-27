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
        if( $this->model('Auth_model')->register($_POST) > 0 ) {
            // Flash register successfull
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        } else {
            // Flash register failed
            header('Location: ' . BASEURL . '/auth/register');
            exit;
        }
    }
        $data['title'] = 'Register - Sirvice';
        $this->view('auth/register');
    }

    public function login() 
    {
        $data['title'] = 'Login - Sirvice';
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
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
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
        session_destroy();
        header('Location: ' . BASEURL . '/auth/login');
        exit;
    }
}