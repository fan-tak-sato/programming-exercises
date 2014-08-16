<?php
require_once("redbean/rb.php");
R::setup('mysql:host=localhost;dbname=quiz', 'root', '');
$topics = R::getAll("SELECT DISTINCT(topics) AS topics FROM interview ORDER BY topics, position ");

$qInterview = "SELECT * FROM interview WHERE 1 ";
if ( isset($_GET['topic']) ) {
	$qInterview .= "AND topics = '".urldecode($_GET['topic'])."' ";
}
$qInterview .= "ORDER BY topics, position";
$interview = R::getAll($qInterview);

function getTextBetweenTags($string, $tagname) {
    $pattern = "/<$tagname>([\w\W]*?)<\/$tagname>/";
    preg_match($pattern, $string, $matches);
    if (isset($matches[1])) {
        return $matches[1];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="keywords" content="">
    <meta name="author" content="">

    <title>Web developer interview questions</title>

    <link href="../../common/bootstrap3/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container">
	
	<h1>Web development questions and answers</h1>
	
	<p>&raquo; <a href="?" title="">All questions, all topics</a></p>
	<p>
	<?php
	foreach($topics as $topic) {
	?>| <a href="?topic=<?php echo $topic['topics'] ?>" title="Go to <?php echo $topic['topics'] ?>"><?php echo $topic['topics'] ?></a> <?php
	}
	?>
	</p>
	
	<div class="panel-group" id="accordion">
	<?php foreach($interview as $question): ?>
	  <div class="panel panel-default">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $question['id'] ?>">
			<?php echo $question['id'] ?>. <?php if ($question['topics']): ?><strong>[<?php echo $question['topics'] ?>]</strong><?php endif; ?> 
			<?php
			$code = getTextBetweenTags($question['question'], 'pre');
			$question['question'] = str_replace($code, htmlspecialchars($code), $question['question']);
			echo $question['question'];
			?>
			</a>
		  </h4>
		</div>
		<div id="collapse<?php echo $question['id'] ?>" class="panel-collapse collapse">
		  <div class="panel-body">
			<?php
			$code = getTextBetweenTags($question['answer'], 'pre');
			if ($code) {
				$question['answer'] = str_replace($code, htmlspecialchars($code), $question['answer']);
			}
			echo $question['answer']
			?>
		  </div>
		</div>
	  </div>
	  <?php endforeach; ?>

	</div>
</div>

<script src="../../common/jquery/jquery.min.js"></script>
<script src="../../common/bootstrap3/js/bootstrap.min.js"></script>

</body>
</html>