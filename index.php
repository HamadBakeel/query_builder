<?php
    include "QueryBuilder.php";
    echo "<h1>Index page</h1>";
    $qb = new QueryBuilder();
    echo "<pre>";
    print_r($qb->select("*","employee")->runQuery());