
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {


public function cek_user(){
	$u = $this->input->post('username');
	$p = $this->input->post('password');

  $query = $this->db->where('username',$u)
                    ->where('password',$p)
                    ->get('tb_admin');
  if ($this->db->affected_rows()>0) {
    $data_login = $query->row();
    $data_session = array(
                            'username'  => $data_login->username,
                            'logged_in' => TRUE,
                            'level'     =>$data_login->level
                          );
    $this->session->set_userdata($data_session);

    return TRUE;
  } else {
      return FALSE;
  }
}
}



?>
