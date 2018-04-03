<?php 
class Zsp_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_alap()
    {
        $query = $this->db->get_where('alap_adatok', array('id' => 1));
        return $query->row_array();
    }

    public function get_targy()
    {
        $query = $this->db->get('tantargyak');
        return $query->result_array();
    }

    public function get_tipus()
    {
        $query = $this->db->get('osztalyzat_tipusok');
        return $query->result_array();
    }

    public function get_ertek()
    {
        $query = $this->db->get('osztalyzat_zsebpenz');
        return $query->result_array();
    }

    public function update_datum()
    {
        $data = array('kezdo_datum' => $this->input->post('datum'));
        $this->db->update('alap_adatok', $data, "id=1");
    }

    public function update_alap()
    {
        $data = array('heti_alap' => $this->input->post('alap'));
        $this->db->update('alap_adatok', $data, "id=1");
    }

    public function set_targy()
    {
        $data = array(
            'targy_nev' => $this->input->post('targy')
        );
        return $this->db->insert('tantargyak', $data);
    }

    public function update_targy()
    {
        $id = $this->input->post('id');
        $data = array(
            'targy_nev' => $this->input->post('targy')
        );

        $this->db->where('id', $id);
        $this->db->update('tantargyak', $data);
    }

    public function set_tipus()
    {
        $data = array(
            'osztalyzat_tipus_nev' => $this->input->post('tipus'),
            'szorzo' => $this->input->post('szorzo')
        );
        return $this->db->insert('osztalyzat_tipusok', $data);
    }

    public function update_tipus()
    {
        $id = $this->input->post('id');
        $data = array(
            'osztalyzat_tipus_nev' => $this->input->post('tipus'),
            'szorzo' => $this->input->post('szorzo')
        );

        $this->db->where('id', $id);
        $this->db->update('osztalyzat_tipusok', $data);
    }

    public function update_ertek()
    {
        $osztalyzat = $this->input->post('osztalyzat');
        $data = array(
            'zsebpenz' => $this->input->post('zsebpenz')
        );

        $this->db->where('osztalyzat', $osztalyzat);
        $this->db->update('osztalyzat_zsebpenz', $data);
    }
}

