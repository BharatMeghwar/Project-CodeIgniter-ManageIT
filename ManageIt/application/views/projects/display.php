
<div class="col-xs-9">

    <p class="bg-success">

        <?php if($this->session->flashdata('mark_done')): ?>

            <?php echo ($this->session->flashdata('mark_done')); ?>

        <?php endif; ?>

    </p>

    <p class="bg-danger">

        <?php if($this->session->flashdata('mark_undone')): ?>

            <?php echo ($this->session->flashdata('mark_undone')); ?>

        <?php endif; ?>

    </p>



    <h1>Project Name: <?php echo $project_data->project_name; ?></h1>

    <p>Date Created: <?php echo $project_data->date_created; ?></p>

    <h3>Description</h3>

    <p class="project-description"><?php echo $project_data->project_body; ?></p>

    <div class="btn-toolbar" role="toolbar" aria-label="Project Actions">
        <div class="btn-group mr-1" role="group" aria-label="Actions">
            <a role="button" class="btn btn-outline-success" href="<?php echo base_url();?>tasks/create/<?php echo $project_data->id; ?>">Create Task</a>
            <a role="button" class="btn btn-outline-secondary" href="<?php echo base_url();?>projects/edit/<?php echo $project_data->id; ?>">Edit Project</a>
            <a role="button" class="btn btn-outline-secondary" href="<?php echo base_url();?>projects/delete/<?php echo $project_data->id; ?>">Delete Project</a>
        </div>
    </div>
    <br>

    <h3>Incomplete Tasks</h3>


<!--    <ul class="list-group">-->
<!--        <li class="list-group-item d-flex justify-content-between align-items-center">-->
<!--            Incomplete Tasks-->
<!--            <span class="badge badge-primary badge-pill">-->
<!---->
<!--<!--                Pick up the number of rows in the column "status" -> "Tasks DB"-->
<!--                    That for the project_id that I am displaying on the page have the -->
<!--                --><?php //$task_model->incomplete_tasks_project_id($task_id); ?>
<!---->
<!---->
<!--            </span>-->
<!--        </li>-->
<!--        <li class="list-group-item d-flex justify-content-between align-items-center">-->
<!--            Dapibus ac facilisis in-->
<!--            <span class="badge badge-primary badge-pill">2</span>-->
<!--        </li>-->
<!--        <li class="list-group-item d-flex justify-content-between align-items-center">-->
<!--            Morbi leo risus-->
<!--            <span class="badge badge-primary badge-pill">1</span>-->
<!--        </li>-->
<!--    </ul>-->


    <div class="list-group-item clearfix">

        <?php if($not_completed_tasks): ?>

            <?php foreach($not_completed_tasks as $task) { ?>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?> ">

            <?php echo $task->task_name; ?>

                    </a>
                </li>

            <?php } ?>

        <?php else: ?>

            <p>You have no completed tasks.</p>

        <?php endif; ?>

    </div>


    <h3>Completed Tasks</h3>

    <div class="list-group-item clearfix">

    <?php if($completed_tasks): ?>

        <?php foreach($completed_tasks as $task) { ?>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?> ">
            
            <?php echo $task->task_name; ?>

            </a>
        </li>

        <?php } ?>

    <?php else: ?>

    <p>You have no completed tasks.</p>

    <?php endif; ?>

    </div>

</div>