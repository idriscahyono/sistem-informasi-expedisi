<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends CI_Model {

    public function read()
    {
        $this->db->select('transaksi.*,barang.nama_barang,pelanggan.Nama,jenis.nama as Nama_jenis');
        $this->db->join('barang','transaksi.id_barang=barang.id_barang');
        $this->db->join('pelanggan','transaksi.id_pelanggan=pelanggan.id_pelanggan');
        $this->db->join('jenis','transaksi.id_jenis=jenis.id');
        return $this->db->get('transaksi')->result_array();
    }
    public function tambah_barang()
    {
        $post = $this->input->post();
        $this->db->insert('barang',$post);
        return $this->db->insert_id();
    }
    public function transaksi($id)
    {
        $data = array(
            'tanggal_transaksi' => date('Y-m-d'),
            'alamat_rinci' => $this->input->post('alamat_rinci'),
            'penerima' => $this->input->post('penerima'),
            'telepon_penerima' => $this->input->post('telepon_penerima'),
            'id_barang' => $id,
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'id_jenis' => $this->input->post('id_jenis')
        );
        $this->db->insert('transaksi',$data);
    }
}
