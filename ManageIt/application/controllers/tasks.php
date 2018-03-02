<?php


class Tasks extends CI_Controller {


    public function __construct() {
        parent::__construct();


        if(!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_access', 'Sorry, you are not logged in');

            redirect('home/index');
        }
    }


    public function display($task_id) {

        $data['project_id'] = $this->task_model->get_task_project_id($task_id);

        $data['project_name'] = $this->task_model->get_project_name($data['project_id']);

        $data['task'] = $this->task_model->get_task($task_id);

        $data['main_view'] = "tasks/display";

        $this->load->view('layouts/main', $data);


    }


    public function create($project_id) {

        $this->form_validation->set_rules('task_name', 'Task Name', 'trim|required');
        $this->form_validation->set_rules('task_body', 'Task Description', 'trim|required');


        if ($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'tasks/create_task';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(

                'project_id' => $project_id,
                'task_name'  => $this->input->post('task_name'),
                'task_body'  => $this->input->post('task_body'),
                'due_date'   => $this->input->post('due_date')

            );

            if ($this->task_model->create_task($data)) { //If we are able to create some data...

                $this->session->set_flashdata('task_created', 'Your Task has been created');

                redirect("projects/index");
            }
        }
    }


    public function edit($task_id) {

        $this->form_validation->set_rules('task_name', 'Task Name', 'trim|required');
        $this->form_validation->set_rules('task_body', 'Task Description', 'trim|required');


        if ($this->form_validation->run() == FALSE) {


            $data['project_id']   = $this->task_model->get_task_project_id($task_id);
            $data['project_name'] = $this->task_model->get_project_name('project_id');
            $data['the_task']     = $this->task_model->get_task_project_data($task_id);


            $data['main_view'] = 'tasks/edit_task';
            $this->load->view('layouts/main', $data);

        } else {

            $project_id = $this->task_model->get_task_project_id($task_id);

            $data = array(

                'project_id' => $project_id,
                'task_name'  => $this->input->post('task_name'),
                'task_body'  => $this->input->post('task_body'),
                'due_date'   => $this->input->post('due_date')

            );

            if ($this->task_model->edit_task($task_id, $data)) { //If we are able to create some data...

                $this->session->set_flashdata('task_updated', 'Your Task has been updated');

                redirect("projects/index");
            }
        }
    }



    public function delete($project_id, $task_id){

        $this->task_model->delete_task($task_id);

        $this->session->set_flashdata('task_deleted', 'Your Task has been deleted');

        redirect("projects/display/" .$project_id ." ");

    }


    public function mark_task_complete($task_id) {

        if($this->task_model->mark_task_complete($task_id)){

            $project_id = $this->task_model->get_task_project_id($task_id);

            $this->session->set_flashdata('mark_done', 'This task has been completed');

            redirect('projects/display/'. $project_id . '');

        }

    }


    public function mark_task_incomplete($task_id) {

        if($this->task_model->mark_task_incomplete($task_id)){

            $project_id = $this->task_model->get_task_project_id($task_id);

            $this->session->set_flashdata('mark_undone', 'This task is incomplete');

            redirect('projects/display/'. $project_id . '');

        }

    }


//    public function incomplete_tasks_project_id($task_id) {
//
//        $this->task_model->incomplete_tasks_project_id($task_id);
//
//
//    }




}

?>