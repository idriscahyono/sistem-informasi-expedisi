<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'karyawan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'karyawan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'karyawan/index.html';
            $config['first_url'] = base_url() . 'karyawan/index.html';
        }

        $config['per_page'] = 100;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Karyawan_model->total_rows($q);
        $karyawan = $this->Karyawan_model->get_limit_data($config['per_page'], $start, $q); 

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'karyawan_data' => $karyawan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('karyawan/karyawan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Karyawan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'ID' => $row->ID,
		'Nama' => $row->Nama,
		'JenisKelamin' => $row->JenisKelamin,
		'Alamat' => $row->Alamat,
		'NoHp' => $row->NoHp,
		'Email' => $row->Email,
		'Username' => $row->Username,
		'Password' => $row->Password,
	    );
            $this->load->view('karyawan/karyawan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karyawan'));
        }
    }

    public function create() 
    {
        $data = array(
        'button' => 'Create',
        'action' => site_url('karyawan/create_action'),
	    'ID' => set_value('ID'),
	    'Nama' => set_value('Nama'),
	    'JenisKelamin' => set_value('JenisKelamin'),
	    'Alamat' => set_value('Alamat'),
	    'NoHp' => set_value('NoHp'),
	    'Email' => set_value('Email'),
	    'Username' => set_value('Username'),
	    'Password' => set_value('Password'),
	);
        $this->load->view('karyawan/karyawan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Nama' => $this->input->post('Nama',TRUE),
		'JenisKelamin' => $this->input->post('JenisKelamin',TRUE),
		'Alamat' => $this->input->post('Alamat',TRUE),
		'NoHp' => $this->input->post('NoHp',TRUE),
		'Email' => $this->input->post('Email',TRUE),
		'Username' => $this->input->post('Username',TRUE),
		'Password' => $this->input->post('Password',TRUE),
	    );

            $this->Karyawan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('karyawan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Karyawan_model->get_by_id($id);

        if ($row) {
            $data = array(
        'button' => 'Update',
        'action' => site_url('karyawan/update_action'),
		'ID' => set_value('ID', $row->ID),
		'Nama' => set_value('Nama', $row->Nama),
		'JenisKelamin' => set_value('JenisKelamin', $row->JenisKelamin),
		'Alamat' => set_value('Alamat', $row->Alamat),
		'NoHp' => set_value('NoHp', $row->NoHp),
		'Email' => set_value('Email', $row->Email),
		'Username' => set_value('Username', $row->Username),
		'Password' => set_value('Password', $row->Password),
	    );
            $this->load->view('karyawan/karyawan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karyawan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'Nama' => $this->input->post('Nama',TRUE),
		'JenisKelamin' => $this->input->post('JenisKelamin',TRUE),
		'Alamat' => $this->input->post('Alamat',TRUE),
		'NoHp' => $this->input->post('NoHp',TRUE),
		'Email' => $this->input->post('Email',TRUE),
		'Username' => $this->input->post('Username',TRUE),
		'Password' => $this->input->post('Password',TRUE),
	    );

            $this->Karyawan_model->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('karyawan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Karyawan_model->get_by_id($id);

        if ($row) {
            $this->Karyawan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('karyawan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karyawan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('JenisKelamin', 'jeniskelamin', 'trim|required');
	$this->form_validation->set_rules('Alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('NoHp', 'nohp', 'trim|required');
	$this->form_validation->set_rules('Email', 'email', 'trim|required');
	$this->form_validation->set_rules('Username', 'username', 'trim|required');
	$this->form_validation->set_rules('Password', 'password', 'trim|required');
	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
