<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 6/2/18
 * Time: 16:03
 */
?>
<h1 class="menu-heading">Create new Project</h1>
<div>
    <form action="<?php echo $GLOBALS["ROOT_URL"]; ?>/project/create" method="post" id="createproject-form">
        <p class="newproject-paragraph"><label>Project Name</label></p><input class="form-control" type="text" required="1" placeholder="Enter a suitable project name">
        <p class="newproject-paragraph"><label>Project Description</label></p><textarea class="form-control" rows="10" cols="1" required="0" placeholder="Enter a comprehensive description of this project"></textarea>
        <p class="newproject-paragraph"><label>Start Date</label></p><input class="form-control" type="date" required="1" placeholder="Enter a start date">
        <p class="newproject-paragraph"><label>End Date</label></p><input class="form-control" type="date" required="0" placeholder="Enter an end date">
        <p class="text-center newproject-paragraph"><button class="btn btn-primary" type="submit">Create Project</button></p>
    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
