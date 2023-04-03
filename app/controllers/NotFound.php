<?php 
class NotFound extends Controller {
    public function index()
    {
        $data['title'] = '404 - Sirvice';
        $this->view('notfound/index');
    }
}