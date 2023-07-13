<?php

function getScheduleData()
{
    $stmt = dbConnect()->prepare(
        'SELECT * FROM `schedule`
        ORDER BY id
        ASC'
    );
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
