<?php

class Pegawai_model extends CI_Model
{
	private $_table = 'pegawai';
    private $dbread;

    public function __construct()
    {
        parent::__construct();
        $this->dbread = $this->load->database('dbread',true);
    }

	public function get()
	{

		$query = $this->dbread->get($this->_table);
		return $query->result();
	}

	public function add($data)
    {

        $this->db->insert('pegawai', $data);
        $insert_id = $this->db->insert_id();

        if ($insert_id) {
            log_activity('New pegawai Added [ID: ' . $insert_id . '.' . $data['pegawai'] . ']');
            log_trail_insert('pegawai', json_encode($data), $insert_id);

            return $insert_id;
        }

        return false;
    }


    public function update($data, $id)
    {
        $affectedRows = 0;

        $this->db->where('pegawai_id', $id);
        $this->db->update('pegawai', $data);

        if ($this->db->affected_rows() > 0) {
            $affectedRows++;
        }

        if ($affectedRows > 0) {
            log_activity('pegawai Updated [ID: ' . $id . ', pegawai Name: ' . $data['pegawai_nama'] . ']');

            return true;
        }

        return false;
    }

    public function delete($id)
    {

      
        $this->db->where('pegawai_id', $id);
        $this->db->delete('pegawai');

       

            return true;
        

     
    }

    public function find($id)
	{

		$query = $this->dbread->get_where($this->_table, array('pegawai_id' => $id));
		return $query->row();
	}

    public function getbyid($id = '')
    {
        if (is_numeric($id)) {

            $pegawai = $this->app_object_cache->get('pegawai-' . $id);

            if ($pegawai) {
                return $pegawai;
            }

            $this->dbread->where('pegawai_id', $id);

            $pegawai = $this->dbread->get('pegawai')->row();
           

            $this->app_object_cache->add('pegawai-' . $id, $pegawai);

            return $pegawai;
        }

        return $this->dbread->get('pegawai')->result_array();
    }

}