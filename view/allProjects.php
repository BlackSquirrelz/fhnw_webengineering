<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 6/2/18
 * Time: 16:04
 */

use view\TemplateView;
?>
<body>
<h1 class="menu-heading">Projects</h1>
<div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/projects">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link active" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/allprojects">All Projects</a></li>
        </ul>
    </div>
    <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Project Name </th>
                    <th>Project Description </th>
                    <th>Start Date </th>
                    <th>End Date </th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($this->projects as $project): /* @var \domain\Project $project */ ?>
                    <tr>
                        <td><?php echo TemplateView::noHTML($project->getName()); ?></td>
                        <td><?php echo TemplateView::noHTML($project->getDesc()); ?> </td>
                        <td><?php echo TemplateView::noHTML($project->getStartDate()); ?> </td>
                        <td><?php echo TemplateView::noHTML($project->getEndDate()); ?> </td>
                        <td>
                        <div class="btn-group btn-group-sm" role="group">
                            <a class="btn btn-default" role="button" href="project/edit?id=<?php echo $project->getId(); ?>"> <i class="fa fa-edit"></i></a>
                            <button class="btn btn-default" type="button" data-target="#confirm-modal" data-toggle="modal" data-href="project/delete?id=<?php echo $project->getId(); ?>"> <i class="glyphicon glyphicon-trash"></i></button>
                        </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <div class="form-group">
            <a class="btn btn-primary" role="button" href="project/create">Create New Project</a>
            <a target="_blank" class="btn btn-default" role="button" href="project/pdf">Create a PDF Report<i class="fa fa-file-pdf-o"></i></a>
            <a class="btn btn-primary" role="button" href="project/email">Send me the list as an Email <i class="fa fa-envelope-o"></i></a>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="confirm-modal">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Deletion of a <strong>customer</strong>.</h4></div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this project?</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" type="button" data-dismiss="modal">NO! </button><a class="btn btn-primary" role="button" href="#">Sure Go Ahead! </a></div>
                </div>
            </div>
        </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

