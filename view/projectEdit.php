<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 13.09.2017
 * Time: 17:06
 */
use view\TemplateView;
use domain\Project;
use validator\projectValidator;

isset($this->projects) ? $project = $this->projects : $project = new Project();
isset($this->projectValidator) ? $projectValidator = $this->projectValidator : $projectValidator = new projectValidator();
?>
<div class="container">
    <div class="page-header">
        <h2 class="text-center">A <strong>project</strong>. </h2></div>
    <form action="update" method="post">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><span>ID </span></div>
                <input class="form-control" type="text" name="id" readonly="" value="<?php echo TemplateView::noHTML($project->getId()) ?>">
            </div>
        </div>
        <div class="form-group <?php echo $projectValidator->isNameError() ? "has-error" : ""; ?>">
            <div class="input-group">
                <div class="input-group-addon"><span>Project Name </span></div>
                <input class="form-control" type="text" name="project_name" value="<?php echo TemplateView::noHTML($project->getName()) ?>">
            </div>
            <p class="help-block"><?php echo $projectValidator->getNameError() ?></p>
        </div>
        <div class="form-group <?php echo $projectValidator->isDescriptionError() ? "has-error" : ""; ?>">
            <div class="input-group">
                <div class="input-group-addon"><span>Projett Description </span></div>
                <input class="form-control" type="text" name="project_desc" value="<?php echo TemplateView::noHTML($project->getDesc()) ?>">
            </div>
            <p class="help-block"><?php echo $projectValidator->getDescriptionError() ?></p>
        </div>
        <div class="form-group <?php echo $projectValidator->isStartDateError() ? "has-error" : ""; ?>">
            <div class="input-group">
                <div class="input-group-addon"><span>Start Date </span></div>
                <input class="form-control" type="date" name="p_startdate" value="<?php echo TemplateView::noHTML($project->getStartDate()) ?>">
            </div>
            <p class="help-block"><?php echo $projectValidator->getStartDateError() ?></p>
        </div>
        <div class="form-group <?php echo $projectValidator->isEndDateError() ? "has-error" : ""; ?>">
            <div class="input-group">
                <div class="input-group-addon"><span>End Date </span></div>
                <input class="form-control" type="date" name="p_enddate" value="<?php echo TemplateView::noHTML($project->getEndDate()) ?>">
            </div>
            <p class="help-block"><?php echo $projectValidator->getEndDateError() ?></p>
        </div>
        <div class="btn-group" role="group">
            <button class="btn btn-default" type="submit">Confirm<i class="fa fa-save"></i></button>
        </div>
    </form>
</div>
