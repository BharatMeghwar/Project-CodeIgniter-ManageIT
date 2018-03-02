<p class="bg-success">

    <?php if($this->session->flashdata('login_success')): ?>

    <?php echo ($this->session->flashdata('login_success')); ?>

    <?php endif; ?>




    <?php if($this->session->flashdata('user_registered')): ?>

        <?php echo ($this->session->flashdata('user_registered')); ?>

    <?php endif; ?>


</p>


<p class="bg-danger">

    <?php if($this->session->flashdata('login_failed')): ?>

        <?php echo ($this->session->flashdata('login_failed')); ?>

    <?php endif; ?>



    <?php if($this->session->flashdata('no_access')): ?>

        <?php echo ($this->session->flashdata('no_access')); ?>

    <?php endif; ?>

</p>

<?php if (!$this->session->userdata('logged_in')): ?>
<div class="jumbotron jumbotron-fluid">

    <h1 class="text-center"><b>Move work forward</b></h1>
    <h4 class="text-center">This is the easiest way for teams to track their work and get results.</h4>
    <div style="text-align: center">
        <br>
    <a href="<?php echo base_url(); ?>users/register" class="btn btn-outline-light btn-lg active" role="button" aria-pressed="true">Get Started</a>
    </div>
</div>
<?php endif; ?>


<?php if ($this->session->userdata('logged_in')): ?>

    <div class="jumbotron jumbotron-fluid">

    <?php if($this->session->userdata('username')): ?>

        <h1 class="text-center"><b>Welcome <?php echo $this->session->userdata('username'); ?>!</b></h1>
        <h4 class="text-center">Track your work and get results.</h4>

    <?php endif; ?>

    </div>

<?php endif; ?>


<?php if(isset($projects)): ?>

    <div class="panel panel-primary">
        <div class="panel-heading">
        <h1>Projects</h1>
        </div>
        <a href="<?php echo base_url();?>projects/create" class="btn btn-success pull-right">Create Project</a>
        <br>
        <br>
        <div class="panel-body">
            <ul class="list-group-item">
        <?php foreach($projects as $project): ?>
            <li class="list-group-item">
            <a href="<?php echo base_url(); ?>projects/display/<?php echo $project->id ?>">
                <?php echo $project->project_name ?>
            </a>
            </li>
        <?php endforeach; ?>
            </ul>
        </div>
    </div>

<?php endif; ?>

<!--    <table class="table table-bordered">-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>-->
<!--                Project Name-->
<!--            </th>-->
<!--            <th>-->
<!--                Project Description-->
<!--            </th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        --><?php //foreach($projects as $project): ?>
<!--            <tr>-->
<!--                <td>--><?php //echo $project->project_name ?><!--</td>-->
<!--                <td>--><?php //echo $project->project_body ?><!--</td>-->
<!--                <td></td>-->
<!--            </tr>-->
<!--        --><?php //endforeach; ?>
<!--        </tbody>-->
<!--    </table>-->
<!---->
<?php //endif; ?>



<?php if(isset($tasks)): ?>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Tasks</h1>
        </div>
        <div class="panel-body">
            <ul class="list-group-item">
                <?php foreach($tasks as $task): ?>
                    <li class="list-group-item">
                        <a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->id ?>">
                            <?php echo $task->task_name ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

<?php endif; ?>




<!--    <table class="table table-bordered">-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>-->
<!--                Task Name-->
<!--            </th>-->
<!--            <th>-->
<!--                Task Description-->
<!--            </th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        --><?php //foreach($tasks as $task): ?>
<!--            <tr>-->
<!--                <td>--><?php //echo $task->task_name ?><!--</td>-->
<!--                <td>--><?php //echo $task->task_body ?><!--</td>-->
<!--                <td><a href="--><?php //echo base_url(); ?><!--tasks/display/--><?php //echo $task->id ?><!--">View</a></td>-->
<!--            </tr>-->
<!--        --><?php //endforeach; ?>
<!--        </tbody>-->
<!--    </table>-->
<?php //endif; ?>


<?php if (!$this->session->userdata('logged_in')): ?>

<footer class="footer">
    <div class="container" style="text-align: center">
        <span class="text-muted">© 2018 <a href="http://goncaloperes.com/" class="href">Gonçalo Peres</a>. All Rights Reserved</span>
    </div>
</footer>

<?php endif; ?>