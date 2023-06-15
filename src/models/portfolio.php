<?php

function getPictures()
{
    // PAGINATION SYSTEM
    $per_page = 6;
    $page = 1;
    if (isset($_GET['p']) && !empty($_GET['p'])) {
        $page = intval($_GET['p']);
    } else {
        $page = 1;
    }

    $start_page = 1;
    $nb_pagination = 3;
    $offset = ($page - 1) * $per_page;

    $total_query = "SELECT COUNT(*) as total FROM image";
    $total_result = dbConnect()->query($total_query);
    $total_row = $total_result->fetch();
    $total = $total_row['total'];

    $num_pages = ceil($total / $per_page);
    $start = max(1, $page - 2);
    $end = min($num_pages, $page + 2);

    $next = $page + 1;
    $previous = $page - 1;

    // SQL REQUEST ADMIN LIST

    $statement = dbConnect()->query("SELECT * FROM image ORDER BY id DESC LIMIT $offset, $per_page");
    $pictures = [];
    while (($row = $statement->fetch())) {
        $picture = [
            'id' => $row['id'],
            'path' => $row['path'],
        ];
        $pictures[] = $picture;
    }
    return [$pictures, $next, $previous, $page, $end, $num_pages, $start];
}
