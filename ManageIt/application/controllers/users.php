<?php
/**
 * Created by PhpStorm.
 * User: gonca
 * Date: 2/12/2018
 * Time: 6:22 PM
 */


class Users extends CI_Controller
{

//
///*Controller*/
//    public function show($user_id) {
//
//
//        //$this->load->model('user_model');
//
//        $data['results'] = $this->user_model->get_users($user_id, 'rico'); /*Communicating with the Model*/
//
//        $this->load->view('user_view', $data); /*Communicating with the View*/
//
//
//        //foreach ($result as $object) {
//
//            //echo $object->username . "<br>";
//
//
//        }
//
//
//        public function insert() {
//
//            $usernme = "peter";
//            $password = "secret";
//
//            $this->user_model->create_users([
//
//                'username' => $usernme,
//                'password' => $password
//
//            ]);
//
//        }
//
//
//        public function update() {
//
//            $id = 3;
//
//            $usernme = "William";
//            $password = "Not so secret";
//
//            $this->user_model->update_users([
//
//                'username' => $usernme,
//                'password' => $password
//
//            ], $id);
//
//        }
//
//
//    public function delete() {
//
//        $id = 3;
//
//        $this->user_model->delete_users($id);
//
//


    public function register() {

        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[5]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

        if($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'users/register_view';

            $this->load->view('layouts/main', $data);

        }
        else {

            if($this->user_model->create_user()) {

                $this->session->set_flashdata('user_registered', 'Thank you for signing up!');
                redirect('home');

            }
            else {



            }



        }




    }



    public function login()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
//        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

        if ($this->form_validation->run() == FALSE) {

            $data = array(

                'errors' => validation_errors()

            );

            $this->session->set_flashdata($data);

            redirect('home');

        } else {


            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login_user($username, $password);

            if ($user_id) {

                $user_data = array(  //When we login we create a session called $user_data

                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true

                );


                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('login_success', 'You are now logged in');



//                $data['main_view'] = "admin_view";
//
//                $this->load->view('layouts/main', $data);


                redirect('home/');


            } else {

                $this->session->set_flashdata('login_failed', 'Sorry, you are not logged in.');

                redirect('home/');

            }


        }

    }


//        echo $this->input->post('username');


    public function logout()
    {

        $this->session->sess_destroy();
        redirect('home/index');

    }

}