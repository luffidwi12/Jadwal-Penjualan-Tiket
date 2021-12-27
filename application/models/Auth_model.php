<?php 

class Auth_model extends CI_Model{
    public function registrasi($enc_password)
    {
        // User data array
   $data = array(
    'name' => $this->input->post('name'),
    'email' => $this->input->post('email'),
    'password' => $enc_password
   );

   // Insert user
    $this->db->insert('user', $data);


    }
}