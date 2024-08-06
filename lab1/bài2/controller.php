<?php
include("model.php");
$list_of_course = get_course();
$semerter = (!empty($GET['semerter'])) ? $GET['semerter'] : '';
$course_name = find_by_semerter($semerter);
$page_content = $course_name;
include('view.php');