<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Race extends CI_Controller {

  public function index() {
    $this->pagerender->page_render_body($this, 'race');
  }

  public function rule() {
    $this->pagerender->page_render_body($this, 'rule');
  }
}
