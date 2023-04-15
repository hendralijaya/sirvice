<?php 
class NotFound extends Controller {
    public function index()
    {
        $data['title'] = '404 - Sirvice';
        $this->view('templates/landing-page/header', $data);
        $this->view('notfound/index');
        $this->view('templates/landing-page/footer');
    }
}