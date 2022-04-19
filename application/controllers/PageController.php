<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller{
    public function index(){
        echo 'page index controller Home!';
    }

    public function aboutUs(){
        echo 'page abouts controller';
    }

    public function blog($blog_url = ''){
            echo "$blog_url";
          $this->load->view('blogview');
    }

    public function demo(){
        $this->load->model('StudentModel');
        $title = $this->StudentModel->demo();

        $data['title']=$title;
        //$data['title']="i am test titre";
        $data['body']="i am test corps";
         $this->load->view('demopage',$data);
    }
}
?>