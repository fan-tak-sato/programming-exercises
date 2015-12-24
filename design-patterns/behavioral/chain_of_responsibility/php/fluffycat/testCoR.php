<?php

include_once("AbstractBookTopic.php");
include_once("BookSubTopic.php");
include_once("BookSubSubTopic.php");
include_once("BookTopic.php");

$bookTopic = new BookTopic("PHP 5");
$bookSubTopic = new BookSubTopic("PHP 5 Patterns",$bookTopic);
$bookSubSubTopic = new BookSubSubTopic("PHP 5 Patterns for Cats", $bookSubTopic);

?>
<!doctype html>
<html>
<head>
    <title>CHAIN OF RESPONSIBILITY PATTERN TEST</title>
</head>
<body>
    <h1>CHAIN OF RESPONSIBILITY PATTERN TEST</h1>

    <h2><strong>bookTopic</strong> BEFORE title is set:</h2>
    <p><strong>Topic:</strong> <?php echo $bookTopic->getTopic(); ?></p>
    <p><strong>Title:</strong> <?php echo $bookTopic->getTitle(); ?></p>

    <h2>bookTopic AFTER title is set:</h2>
    <?php $bookTopic->setTitle("PHP 5 Recipes by Babin, Good, Kroman, and Stephens"); ?>
    <p><strong>Topic:</strong> <?php echo $bookTopic->getTopic(); ?></p>
    <p><strong>Title:</strong> <?php echo $bookTopic->getTitle(); ?></p>

    <h2><strong>bookSubTopic</strong> BEFORE title is set:</h2>
    <?php $bookSubTopic->setTitle("PHP 5 Objects Patterns and Practice by Zandstra"); ?>
    <p><strong>Topic:</strong> <?php echo $bookSubTopic->getTopic(); ?></p>
    <p><strong>Title:</strong> <?php echo $bookSubTopic->getTitle(); ?></p>

    <h2><strong>bookSubSubTopic</strong> with no title set:</h2>
    <p><strong>Topic:</strong> <?php echo $bookSubSubTopic->getTopic(); ?></p>
    <p><strong>Title:</strong> <?php echo $bookSubSubTopic->getTitle(); ?></p>

    <h2>bookSubSubTopic with no title for set for bookSubTopic either:</h2>
    <?php $bookSubTopic->setTitle(NULL); ?>
    <p><strong>Topic:</strong> <?php echo $bookSubSubTopic->getTopic(); ?></p>
    <p><strong>Title:</strong> <?php echo $bookSubSubTopic->getTitle(); ?></p>
</body>
</html>