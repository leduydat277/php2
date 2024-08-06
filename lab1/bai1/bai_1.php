<?php
$course = [
    's1' => 'course 1',
    's2' => 'course 2',
    's3' => 'course 3'
];
function get_course()
{
    global $course;
    return array_values($course);
}
function find_by_semerter($semerter)
{
    global $course;
    return (array_key_exists($semerter, $course) ? $course[$semerter] : 'Invalid course');
}
// controller
$list_of_course = get_course();
$semerter = (!empty($GET['semerter'])) ? $GET['semerter'] : '';
$course_name = find_by_semerter($semerter);
$page_content = $course_name;
?>
// view
<?= $page_content ?>
<select name="course">
    <?php foreach ($list_of_course as $list) { ?>
    <option value=""><?= $list ?></option>
    <?php } ?>
</select>