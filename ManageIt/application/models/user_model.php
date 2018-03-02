<?php


class User_model extends CI_Model {



//    public function get_users($user_id, $username){
//
//            $this->db->where([
//                'id' => $user_id,
//                'username' => $username
//            ]);
//
//            $query = $this->db->get('users');
//
//            return $query->result();


        //$this->db->where('id', $user_id);

        //$query = $this->db->query("SELECT * FROM users");

        //return $query->num_fields();


        //return $query->num_rows();


        //$query = $this->db->get('users');

        //return $query->result();


        /*$config['hostname'] = "localhost";
        *$config['username'] = "root";
        *$config['password'] = "";
        *$config['database'] = "errand_db";

        *$config['hostname'] = "localhost";
        *$config['username'] = "root_2";
        *$config['password'] = "";
        *$config['database'] = "errand_db_2";


        *$connection = $this->load->database($config);

        *$connection_2 = $this->load->database($config);
        **/
//
//
//    }
//
//    public function create_users($data) {
//
//        $this->db->insert('users', $data);
//
//    }
//
//
//    public function update_users($data, $id) {
//
//        $this->db->where(['id'=> $id]);
//
//        $this->db->update('users', $data);
//
//    }
//
//
//    public function delete_users($id) {
//
//        $this->db->where(['id'=> $id]);
//
//        $this->db->delete('users');
//
//    }

    public function create_user() {

        $options = ['cost' => 12]; //Number of times that the function is executing - the bigger the better.

        $encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options); //This function will create an automatic salt



        $data = array(

            'first_name' => $this->input->post('first_name'),
            'last_name'  => $this->input->post('last_name'),
            'email'      => $this->input->post('email'),
            'username'   => $this->input->post('username'),
            'password'   => $encripted_pass

        );

        $insert_data = $this->db->insert('users', $data);

        return $insert_data;


    }



    public function login_user($username, $password) {

        $this->db->where('username', $username);

        $result = $this->db->get('users');

        $db_password = $result->row(2)-> password; //Bringing out the password from the Database and assigning to a variable db_password


        if(password_verify($password, $db_password)) { //password_verify is a PHP function that makes sure the both passwords are equal.

            return $result->row(0)->id;

        }

        else {

            return false;

        }

    }




}