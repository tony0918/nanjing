<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index() {
    $timezone = new DateTimeZone('Asia/Shanghai');
    $now = new DateTime('NOW', $timezone);
    $target = new DateTime('2018-4-1 8:30:00', $timezone);
    $dif = $target->diff($now, TRUE);
    if ($now >= $target) {
      $this->pagerender->page_render_body($this, 'home', '首页', array('d' => 0, 'h' => 0, 'i' => 0));
    }
    else {
      $this->pagerender->page_render_body($this, 'home', '首页', array(
        'd' => $dif->days,
        'h' => $dif->h,
        'i' => $dif->i
      ));
    }
  }
}
