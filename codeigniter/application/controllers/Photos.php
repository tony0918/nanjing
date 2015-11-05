<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photos extends CI_Controller {

  public function index() {
    $this->pagerender->page_render_body($this, 'photos', '照片下载');
  }
}
