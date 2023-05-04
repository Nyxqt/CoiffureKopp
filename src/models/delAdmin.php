<?php

function deleteAdmin($id)
{

    $query = 'DELETE FROM `admin` WHERE id = :id';
    $delete = dbConnect()->prepare($query);
    $delete->bindValue(':id', $id, PDO::PARAM_INT);
    $delete->execute();
}
