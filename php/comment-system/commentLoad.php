<?php

if (basename($_SERVER['PHP_SELF'])==__FILE__)
{
    header("Location: index.php");
    exit;
}

include_once("config.php");

$query = "SELECT name, email, message  FROM comments c LEFT JOIN users ON rifuser = users.id ORDER BY c.id DESC ";
$result = R::getAll($query);

if ( !empty($result) and is_array($result) )
{
    ?>
    <h3>Comments</h3>
    <div>
    <?php foreach($result as &$result): ?>
    <div class="commentContainer">
            <div>Posted by <strong><?php echo $result['name'] ?></strong></div>
            <div><?php echo $result['message'] ?></div>
    </div>
    <?php endforeach; ?>
    </div>
    <?php
} else {
    ?>
    <div class="msgInfo">
            <div><strong>No comment were posted</strong></div>
    </div>
    <?php
}