<?php


function contentData()
{
    $id = intval($_GET['id']);
    $query = "SELECT * FROM post WHERE id = :id ";
    $req = dbConnect()->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $res = $req->fetch();
    $data = $res;
    if (isset($_POST['upd'])) {
        updContent($id, $data);
    } else {
        return $data;
    }
}

function updContent($id, $data)
{
    $titleUpd = secureInput($_POST['title']);
    $contentUpd = secureInput($_POST['content']);
    if (isset($_POST['path'])) {
        $pathUpd = secureInput($_POST['path']);
    } else {
        $pathUpd = $data['path'];
    }

    $query = "UPDATE post SET title = :title, content = :content, path = :path WHERE id = :id ";
    $req = dbConnect()->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->bindValue(':title', $titleUpd, PDO::PARAM_STR);
    $req->bindValue(':content', $contentUpd, PDO::PARAM_STR);
    $req->bindValue(':path', $pathUpd, PDO::PARAM_STR);
    $req->execute();
    header('location: index.php?action=content');
}
