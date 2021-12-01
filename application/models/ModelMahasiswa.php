<?php
class ModelMahasiswa extends CI_Model
{
    public function get_mahahsiswa()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
}
