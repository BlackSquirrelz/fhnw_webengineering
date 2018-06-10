<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 6/2/18
 * Time: 16:05
 */
use view\TemplateView;
use domain\Project;
use domain\User;
use validator\ProjectValidator;

isset($this->user) ? $user = $this->user : $user = new User();
//isset($this->projects) ? $project = $this->projects : $project = new Project();
isset($this->projectValidator) ? $projectValidator = $this->projectValidator : $projectValidator = new ProjectValidator();

?>

<h1 class="menu-heading">Projects</h1>
<div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/projects"> Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/allprojects">All Projects</a></li>
        </ul>
    </div>
</div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-8">
                <h5 class="projects-heading">Last three projects</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Project Name </th>
                        <th>Project Description </th>
                        <th>Start Date </th>
                        <th>End Date </th>
                        <th>Time Remaining</th>
                    </tr>
                    </thead>
                    <tbody>
                <?php
                if(count($projects) <=3) {
                    //var_dump($projects[1]);
                foreach($this->projects as $project): /* @var \domain\Project $project */ ?>
                    <?php $startDate = $project->getStartDate();?>
                    <?php $endDate = $project->getEndDate();
                    $difference =  $endDate - $startDate;?>
                    <tr>
                        <td><?php echo TemplateView::noHTML($project->getName()); ?></td>
                        <td><?php echo TemplateView::noHTML($project->getDesc()); ?> </td>
                        <td><?php echo TemplateView::noHTML($project->getStartDate()); ?> </td>
                        <td><?php echo TemplateView::noHTML($project->getEndDate()); ?> </td>
                        <td><?php echo $difference;?></td>
                    </tr>
                <?php endforeach;?>
                <?php
                } else if(count($projects) > 3) {
                    for ($x = 0; $x <= 3; $x++) {
                        $curentProject = $projects[$x];
                        //var_dump($curentProject);?>
                        <td><?php echo TemplateView::noHTML($curentProject->getName()); ?></td>
                        <td><?php echo TemplateView::noHTML($curentProject->getDesc()); ?> </td>
                        <td><?php echo TemplateView::noHTML($curentProject->getStartDate()); ?> </td>
                        <td><?php echo TemplateView::noHTML($curentProject->getEndDate()); ?> </td><?php
                    }
                }
                ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>