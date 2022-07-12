<?php
Class Model_login extends CI_Model {

    public function login($data) 
    {
        $sql="select * from web_pelanggan where
        userID='$data[name]' and
        PASSWORD=md5('$data[password]')";
        $query = $this->db->query($sql);
        //echo $query->num_rows(); exit();
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function read_user($userid) 
    {
        $sql="select * from web_pelanggan where userID='$userid'";
        $query = $this->db->query($sql);
        if ($query->num_rows() == 1) {
        return $query->result();
        } else {
        return false;
        } 
    }
    public function registrasi_save()
    {
        $post = $this->input->post();
        $sql="insert into web_pelanggan(nama,alamat,kota,provinsi,email,telp,userID,password)
        values('$post[nama]','$post[alamat]','$post[kota]','$post[provinsi]','$post[email]','$post[telp]','$post[nama]',md5('$post[password]'))";
        if($this->db->query($sql))
            return true;
        else
            return false;
    }
}
