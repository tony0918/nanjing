<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sponsor extends CI_Controller {

  public function index() {
    $this->pagerender->page_render_body($this, 'sponsor', '赞助商');
  }
}
