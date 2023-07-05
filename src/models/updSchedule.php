<?php


function scheduleData()
{
    $id = intval($_GET['id']);
    $query = "SELECT * FROM schedule WHERE id = :id ";
    $req = dbConnect()->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $res = $req->fetch();
    $data = $res;
    if (isset($_POST['upd'])) {
        updSchedule($id, $data);
    } else {
        return $data;
    }
}

function updSchedule($id, $data)
{
    $dayUpd = secureInput($_POST['day']);
    $openingInput = hourFormat(secureInput($_POST['opening']));
    $closingInput = hourFormat(secureInput($_POST['closing']));
    $statusUpd = (isset($_POST['isClosed'])) ? "Fermé" : $openingInput . " à " . $closingInput;


    $query = "UPDATE schedule SET day = :day, status = :status WHERE id = :id ";
    $req = dbConnect()->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->bindValue(':day', $dayUpd, PDO::PARAM_STR);
    $req->bindValue(':status', $statusUpd, PDO::PARAM_STR);
    $req->execute();
    header('location: index.php?action=schedule');
}

function hourFormat($h)
{
    return str_replace(":", "h", $h);
}
