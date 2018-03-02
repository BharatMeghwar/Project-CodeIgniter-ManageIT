
<!--Tasks display equal to the Projects display-->
<div class="col-xs-9">

    <h1><?php echo $task->task_name; ?></h1>

    <p><b>Due on: <?php echo $task->due_date; ?></b></p>

    <p>Project: <?php echo $project_name; ?></p>
    <p>Created: <?php echo $task->date_created  ?></p>

    <h4>Description</h4>
    <p class="task-description">
        <?php echo $task->task_body ?>
    </p>


</div>



<!--Table with the tasks-->
<!--<table class="table table-bordered">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>-->
<!--            Task Name-->
<!--        </th>-->
<!--        <th>-->
<!--            Task Description-->
<!--        </th>-->
<!--        <th>-->
<!--            Date-->
<!--        </th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--        <tr>-->
<!--            <td>-->
<!--                <div class="task-name">-->
<!--                    --><?php //echo $task->task_name ?>
<!--                </div>-->
<!--<!--                <div class="task-actions">-->
<!--<!--                    <a href="--><?php ////echo base_url(); ?><!--<!--tasks/edit/--><?php ////echo $task->id; ?><!--<!--">Edit</a>-->
<!--<!--                    <a href="--><?php ////echo base_url(); ?><!--<!--tasks/delete/--><?php ////echo $task->project_id; ?><!--<!--/--><?php ////echo $task->id; ?><!--<!--">Delete</a>-->
<!--<!---->
<!--<!--                </div>-->
<!--            </td>-->
<!--            <td>-->
<!--                    --><?php //echo $task->task_body ?>
<!--            </td>-->
<!--            <td>-->
<!--                --><?php //echo $task->date_created ?>
<!--            </td>-->
<!--<!--            <td>-->
<!--<!--                <a href="--><?php ////echo base_url();?><!--<!--tasks/mark_task_complete/--><?php ////echo $task->id; ?><!--<!--">Mark Complete</a>-->
<!--<!--            </td>-->
<!--<!--            <td>-->
<!--<!--                <a href="<?php ////echo base_url();?><!--<!--tasks/mark_task_incomplete/--><?php ////echo $task->id; ?><!--<!--">Mark Incomplete</a>-->
<!--<!--            </td>-->
<!--        </tr>-->
<!--    </tbody>-->
<!--</table>-->

<div class="btn-toolbar" role="toolbar" aria-label="Task Actions">
    <div class="btn-group mr-1" role="group" aria-label="Actions">
        <a role="button" class="btn btn-outline-success" href="<?php echo base_url();?>tasks/mark_task_complete/<?php echo $task->id; ?>">Mark Complete</a>
        <a type="button" class="btn btn-outline-danger" href="<?php echo base_url();?>tasks/mark_task_incomplete/<?php echo $task->id; ?>">Mark Incomplete</a>
        <a type="button" class="btn btn-outline-secondary" href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id; ?>">Edit</a>
        <a type="button" class="btn btn-outline-secondary" href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>">Delete</a>
    </div>
</div>


<!--    <div class="btn-group mr-2" role="group" aria-label="First group">-->
<!--        <button type="button" class="btn btn-secondary">1</button>-->
<!--        <button type="button" class="btn btn-secondary">2</button>-->
<!--        <button type="button" class="btn btn-secondary">3</button>-->
<!--        <button type="button" class="btn btn-secondary">4</button>-->
<!--    </div>-->