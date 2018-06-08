<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 13.09.2017
 * Time: 16:59
 */
use view\TemplateView;
?>
<!DOCTYPE html>
<html>
<body>
<table class="table">
    <thead>
    <tr>
        <th>Project ID </th>
        <th>Name </th>
        <th>Description </th>
        <th>Start Date </th>
        <th>End Date </th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($this->projects as $project): /* @var \domain\Project $project */ ?>
    <tr>
        <td><?php echo $project->getId(); ?> </td>
        <td><?php echo TemplateView::noHTML($project->getName()); ?></td>
        <td><?php echo TemplateView::noHTML($project->getDesc(), false); ?> </td>
        <td><?php echo TemplateView::noHTML($project->getStartDate()); ?> </td>
        <td><?php echo TemplateView::noHTML($project->getEndDate()); ?> </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>