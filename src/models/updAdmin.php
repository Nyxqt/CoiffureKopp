<?php


function adminData()
{
    $id = intval($_GET['id']);
    $query = "SELECT * FROM admin WHERE id = :id ";
    $req = dbConnect()->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $res = $req->fetch();
    $email = $res['email'];
    if (isset($_POST['upd'])) {
        updAdmin($id);
    } else {
        return $email;
    }
}

function updAdmin($id)
{
    $emailUpd = secureInput($_POST['email']);
    $query = "UPDATE admin SET email = :email WHERE id = :id ";
    $req = dbConnect()->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->bindValue(':email', $emailUpd, PDO::PARAM_STR);
    $req->execute();
    header('location: index.php?action=admin');
}
