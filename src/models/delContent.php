<?php

function deleteContent($id)
{

    $query = 'DELETE FROM `post` WHERE id = :id';
    $delete = dbConnect()->prepare($query);
    $delete->bindValue(':id', $id, PDO::PARAM_INT);
    $delete->execute();
}
