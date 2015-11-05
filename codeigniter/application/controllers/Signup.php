<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

  public function index() {
    $this->pagerender->page_render_body($this, 'signup', '立即报名');
  }

  public function query() {
    $this->pagerender->page_render_body($this, 'query', '报名查询');
  }

  public function guidelines() {
    $this->pagerender->page_render_body($this, 'guidelines', '报名须知');
  }
}
