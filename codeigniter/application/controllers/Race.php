<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Race extends CI_Controller {

  public function index() {
    $this->pagerender->page_render_body($this, 'race', '有关赛事');
  }

  public function rule() {
    $this->pagerender->page_render_body($this, 'rule', '竞赛规则');
  }

  public function faq() {
    $this->pagerender->page_render_body($this, 'faq', '常见问题');
  }

  public function map() {
    $this->pagerender->page_render_body($this, 'map', '赛事线路图');
  }

  public function accommodation() {
    $this->pagerender->page_render_body($this, 'accommodation', '酒店与交通');
  }

  public function souvenir() {
    $this->pagerender->page_render_body($this, 'souvenir', '纪念卫衣');
  }
}
