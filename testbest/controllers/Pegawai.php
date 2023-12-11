<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends AdminController
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pegawai_model');
  }

  public function index()
    {
        if (!has_permission('pegawai', '', 'view')) {
            access_denied('pegawai');
        }
        if ($this->input->is_ajax_request()) {
            $this->app->get_table_data('pegawai');
        }
        $data['title'] = _l('Pegawai');
        $this->load->view('admin/pegawai/manage', $data);
        
    }


    public function datadiri()
    {
        if (!has_permission('pegawai', '', 'view')) {
            access_denied('pegawai');
        }
        if ($this->input->is_ajax_request()) {
            $this->app->get_table_data('pegawai');
        }
        $data['title'] = _l('Form Data Diri');
        $this->load->view('admin/pegawai/datadiri', $data);
        
    }

  public function pegawai($id = '')
    {
        if (!has_permission('pegawai', '', 'view')) {
            access_denied('pegawai');
        }
        if ($this->input->post()) {
            if ($id == '') {
                if (!has_permission('pegawai', '', 'create')) {
                    access_denied('pegawai');
                }
                $id = $this->pegawai_model->add($this->input->post());
                if ($id) {
                    set_alert('success', _l('added_successfully', _l('pegawai')));
                    redirect(admin_url('pegawai'));
                }
            } else {
                if (!has_permission('pegawai', '', 'edit')) {
                    access_denied('pegawai');
                }
                $success = $this->pegawai_model->update($this->input->post(), $id);
                if ($success) {
                    set_alert('success', _l('updated_successfully', _l('pegawai')));
                }
                //redirect(admin_url('pegawai/pegawai/' . $id));
                redirect(admin_url('pegawai'));
            }
        }

        if ($id == '') {
            $title = _l('add_new', _l('pegawai'));
            
        } else {
            
            $pegawai               = $this->pegawai_model->getbyid($id);
            $data['pegawai']       = $pegawai;
            $title              = _l('edit', _l('pegawai'));
        }
        $data['title'] = $title;

        $this->load->view('admin/pegawai/pegawai', $data);
    }

    public function delete($id)
    {
        if (!has_permission('pegawai', '', 'delete')) {
            access_denied('pegawai');
        }
        if (!$id) {
            redirect(admin_url('pegawai'));
        }
        $response = $this->pegawai_model->delete($id);
      
        set_alert('success', _l('deleted', _l('pegawai')));
        
        redirect(admin_url('pegawai'));
    }

}