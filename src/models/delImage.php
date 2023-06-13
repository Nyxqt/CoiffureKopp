<?php

function deleteImage($id)
{
    $dataQuery = 'SELECT * FROM image WHERE id = :id';
    $data = dbConnect()->prepare($dataQuery);
    $data->bindValue(':id', $id, PDO::PARAM_INT);
    $data->execute();
    $image = $data->fetchAll(PDO::FETCH_ASSOC);
    if (file_exists($image[0]['path'])) {
        unlink($image[0]['path']);
        $query = 'DELETE FROM `image` WHERE id = :id';
        $delete = dbConnect()->prepare($query);
        $delete->bindValue(':id', $id, PDO::PARAM_INT);
        $delete->execute();
    } else {
        $query = 'DELETE FROM `image` WHERE id = :id';
        $delete = dbConnect()->prepare($query);
        $delete->bindValue(':id', $id, PDO::PARAM_INT);
        $delete->execute();
    }
}
