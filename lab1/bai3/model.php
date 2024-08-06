<?php
function get_user($gmail)
{
    include('config.php');
    $sql = 'SELECT * FROM user WHERE email = ?';
    $stmt = $con->prepare($sql);
    $stmt->binparam("s", $email);
    $stmt->execute();
    $result = $stmt->get_result;
    if ($result->num_row > 0) {
        $row = $result->fecth_array(MYSQLI_ASSOC);
        return $row;
    }
    $con->close();
}