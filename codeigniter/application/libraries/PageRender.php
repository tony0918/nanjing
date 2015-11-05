<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PageRender {
  public function page_render_body(&$self, $page = 'home', $pageTitle = '首页') {
    $language = $self->uri->segment(1, 0);
    $self->load->helper('url');
    $data = new stdClass();
    $data->baseUrl = base_url();
    $data->pageTitle = $pageTitle;
    if ($language === 'en') {
      $page .= '-en';
      $data->baseUrl .= '/en/';
    }
    if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
      show_404();
    }
    else {
      $self->load->view('templates/head', $data);
      $self->load->view('templates/menu', $data);
      $self->load->view('pages/' . $page, $data);
      $self->load->view('templates/footer', $data);
      $self->load->view('templates/foot', $data);
    }
  }
}