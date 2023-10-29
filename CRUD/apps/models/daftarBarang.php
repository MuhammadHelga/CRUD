<?php


class daftarBarang extends model{
    private $daftar = [];
    public function getDataAll() {
        // return $this->daftar;
        $stmt = "select * from daftarbarang ";
        $query = $this->db->query( $stmt );

        while ($result = $this->db->fetch_array($query)) {
            $data []= $result; 
        }
        return $data;
    }

    public function getDataById($id) {
        $stmt = "select * from daftarbarang where id = $id";
        $query = $this->db->query( $stmt );

        $data = $this->db->fetch_array($query);
        return $data;
    }
    
}
?>