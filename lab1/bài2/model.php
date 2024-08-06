<?php
function get_course()
{
    include('data.php');
    return array_values($course);
}
function find_by_semerter($semerter)
{
    include('data.php');
    return (array_key_exists($semerter, $course) ? $course[$semerter] : 'Invalid course');
}