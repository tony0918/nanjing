<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

  public function index() {
    $this->pagerender->page_render_body($this, 'result', '成绩查询');
  }
}
