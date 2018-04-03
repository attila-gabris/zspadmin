<?php
class Settings extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('zsp_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        
        $data['alap'] = $this->zsp_model->get_alap();

        $this->load->view('templates/header');
        $this->load->view('settings/index', $data);
        $this->load->view('templates/footer');
    }

    public function targy()
    {
        
        $data['targy'] = $this->zsp_model->get_targy();

        $this->load->view('templates/header');
        $this->load->view('settings/targy', $data);
        $this->load->view('templates/footer');
    }

    public function tipus()
    {
        
        $data['tipus'] = $this->zsp_model->get_tipus();

        $this->load->view('templates/header');
        $this->load->view('settings/tipus', $data);
        $this->load->view('templates/footer');
    }

    public function ertek()
    {
        
        $data['ertek'] = $this->zsp_model->get_ertek();

        $this->load->view('templates/header');
        $this->load->view('settings/ertek', $data);
        $this->load->view('templates/footer');
    }

    public function create_targy()
    {
        
        $this->form_validation->set_rules('targy', 'Tárgy', 'required');

        if ($this->form_validation->run()){
            $this->zsp_model->set_targy();
        }
        
        $this->targy();

    }
    
    public function create_tipus()
    {
        
        $this->form_validation->set_rules('tipus', 'Típus', 'required');
        $this->form_validation->set_rules('szorzo', 'Szorzó', 'required|numeric');

        if ($this->form_validation->run()){
            $this->zsp_model->set_tipus();
        }
        
        $this->tipus();

    }

    public function update_targy()
    {
        
        $this->form_validation->set_rules('targy', 'Tárgy', 'required');

        if ($this->form_validation->run()){
            $this->zsp_model->update_targy();
        }
        
        $this->targy();
    }

    public function update_tipus()
    {
        
        $this->form_validation->set_rules('tipus', 'Típus', 'required');
        $this->form_validation->set_rules('szorzo', 'Szorzó', 'required|numeric');

        if ($this->form_validation->run()){
            $this->zsp_model->update_tipus();
        }
        
        $this->tipus();
    }
    
    public function update_ertek()
    {
        
        $this->form_validation->set_rules('zsebpenz', 'Érték', 'required|numeric');

        if ($this->form_validation->run()){
            $this->zsp_model->update_ertek();
        }
        
        $this->ertek();
    }

    public function update_datum()
    {
        $this->form_validation->set_rules('datum', 'Dátum', 'required');

        if ($this->form_validation->run()){
            $this->zsp_model->update_datum();
        }
        
        $this->index();
    }

    public function update_alap()
    {
        $this->form_validation->set_rules('alap', 'Alap', 'required|numeric');

        if ($this->form_validation->run()){
            $this->zsp_model->update_alap();
        }
        
        $this->index();
    }
}