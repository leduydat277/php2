<?= $page_content ?>
<select name="course">
    <?php foreach ($list_of_course as $list) { ?>
    <option value=""><?= $list ?></option>
    <?php } ?>
</select>