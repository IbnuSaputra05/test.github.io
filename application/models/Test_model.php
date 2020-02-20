<?php

class Test_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('tb_test')->result_array();
    }

    public function TambahData()
    {
        $data = [
            "Name" => $this->input->post('Name'),
            "Email" => $this->input->post('Email'),
            "Gender" => $this->input->post('Gender'),
            "City" => $this->input->post('City'),
            "Status" => $this->input->post('Status')
        ];

        $this->db->insert('tb_test', $data);
    }

    public function HapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_test');
    }

    public function getData($id)
    {
        return $this->db->get_where('tb_test', ['id' => $id])->row_array();
    }

    public function EditData()
    {
        $data = [
            "Name" => $this->input->post('Name'),
            "Email" => $this->input->post('Email'),
            "Gender" => $this->input->post('Gender'),
            "City" => $this->input->post('City'),
            "Status" => $this->input->post('Status')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_test', $data);
    }
}