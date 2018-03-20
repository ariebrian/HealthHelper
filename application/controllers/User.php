<?php

class User extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->helper('html');
        $this->load->helper(array('url','form'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('User2');
    }


    public function login()
    {
        $this->load->view('Header');
        $this->load->view('Login');
    }

    public function login_process() {

        $val_login = array(
                            array(
                                'field' => 'username',
                                'label' => 'username',
                                'rules' => 'required',
                                 'errors' => array('required' =>'Anda harus mengisi %s.'),
                            ),
                            array(
                                'field' => 'password',
                                'label' => 'password',
                                'rules' => 'required',
                                'errors' => array('required' =>'Anda harus mengisi %s.'),
                            ),
  
                    );
        $this->form_validation->set_rules($val_login);

        if ($this->form_validation->run() == FALSE) {
                
            $this->load->view('Login');
           
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
                );
            $result = $this->User2->login($data);
            if ($result == true) {
                $username = $this->input->post('username');
                $result = $this->User2->read_user_information($username);
                if ($result != false) {
                    $session_data = array(
                        'id' => $result[0]->id,
                        'username' => $result[0]->username,
                        // 'email' => $result[0]->email,
                  //      var_dump($result)
                        );
                    // Add user data in session
                   $this->session->set_userdata($session_data);
                    if ($this->session->userdata('username') == 'admin') {
                  //  	redirect('Home/Admin');
                    	$this->load->view('Admin');
                    }else{	
                    //	redirect('Home/Index');
                        $this->load->view('Header');
                        $this->load->view('content');                    }
                }
            } else {
/*                $data = array('message_display' => 'Nama Pengguna atau Password Salah');
                
                $this->session->set_userdata( $data );
*/
                echo '<script>alert("Username dan Password anda tidak cocok");</script>';
                redirect('home');
            }
        }
    }
    public function user_registration() 
    {
       $this->load->view('Header');
        $this->load->view('Register');
//        $this->load->view('footer');
	}

	public function reg_user()
	{
        $val_reg = array(
                            array(
                                'field' => 'username',
                                'label' => 'Username',
                                'rules' => 'required|is_unique[user.username]',
                                 'errors' => array('required' =>'Anda harus mengisi %s.',
                                                    'is_unique' => '%s sudah dipakai'),
                            ),
                            array(
                                'field' => 'password',
                                'label' => 'assword',
                                'rules' => 'required|min_length[6]',
                                'errors' => array('required' =>'Anda harus mengisi %s.',
                                                    'min_length' => '%s minimal 6 karakter'),
                            ),
                            array(
                                'field' => 'cpassword',
                                'label' => 'Konfirmasi Password',
                                'rules' => 'required|matches[password]',
                                'errors' => array('required' =>'Anda harus mengisi %s.',
                                                    'matches' => '%s tidak sesuai dengan password'),
                            ),
                    
                            // array(
                            //     'field' => 'email',
                            //     'label' => 'Email',
                            //     'rules' => 'required|is_unique[user.email]',
                            //      'errors' => array('required' =>'Anda harus mengisi %s.',
                            //                         'is_unique' => '%s sudah dipakai'),
                            // ),
  
                    );

        $this->form_validation->set_rules($val_reg);


	    if ($this->form_validation->run() == FALSE) {
	        $this->load->view('Header');
	        $this->load->view('Register');
//	        $this->load->view('footer');
	    }else{
	        $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')) ,
                // 'email' =>$this->input->post('email') 
                ); 

	        $this->User2->register($data);
	        echo '<script>alert("Anda telah berhasil Register!  Silahkan Login");</script>';
	        redirect('User/login','refresh');
//	        $this->load->view('Login');
	    }
	}
}
?>
