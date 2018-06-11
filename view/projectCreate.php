<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 6/2/18
 * Time: 16:03
 */

use view\TemplateView;
use domain\Project;
use validator\projectValidator;

isset($this->projects) ? $project = $this->projects : $project = new Project();
isset($this->projectValidator) ? $projectValidator = $this->projectValidator : $projectValidator = new projectValidator();
?>
<h1 class="menu-heading">Create new Project</h1>
<div>
        <form action="create" method="post">
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
                    <div class="input-group-addon"><span>Project Description </span></div>
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
            <p class="text-center newproject-paragraph">
                <button class="btn btn-primary" type="submit">Create Project</button>
            </p>
    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
