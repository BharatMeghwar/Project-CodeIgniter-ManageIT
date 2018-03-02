<?php


class Task_model extends CI_Model { //Make sure that the Controller is loaded. Check it in config/autoload


    public function get_task($task_id) {

        $this->db->where('id', $task_id);

        $query = $this->db->get('tasks');

        return $query->row();

    }


    public function get_all_tasks($user_id){    //We are using the user_id

        $this->db->where('project_user_id', $user_id); //to go into the projects basically
        $this->db->join('tasks', 'projects.id = tasks.project_id'); //We are joining the table where ID in the projects table is equal to the project_id in the tasks table
        $query = $this->db->get('projects'); //Then we are getting projects out of it.

        return $query->result();

    }


    public function create_task($data){

        $query = $this->db->insert('tasks', $data);

        return $query;

    }


    public function get_task_project_id($task_id) {

        $this->db->where('id', $task_id);

        $query = $this->db->get('tasks');

        return $query->row()->project_id;

    }


    public function get_project_name($project_id){

        $this->db->where('id', $project_id);

        $query = $this->db->get('projects');

        return $query->row()->project_name;

    }


    public function get_task_project_data($task_id){

        $this->db->where('id', $task_id);

        $query = $this->db->get('tasks');

        return $query->row();

    }


    public function edit_task($task_id, $data){

        $this->db->where('id', $task_id);

        $this->db->update('tasks', $data);

        return TRUE;

    }


    public function delete_task($task_id) {

        $this->db->where('id', $task_id);
        $this->db->delete('tasks');

    }


    public function mark_task_complete($task_id) {

        $this->db->set('status', 1);
        $this->db->where('id', $task_id);
        $this->db->update('tasks');

        return true;

    }


    public function mark_task_incomplete($task_id) {

        $this->db->set('status', 0);
        $this->db->where('id', $task_id);
        $this->db->update('tasks');

        return true;

    }


//    public function incomplete_tasks_project_id($task_id) {
//
//        $this->db->where('id', $task_id);
//        $this->db->where('status', 0);
//        $query = $this->db->count_all_results();
//
//        return $query;
//    }


}


?>
