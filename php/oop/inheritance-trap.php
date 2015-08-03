<?php

class Content
{
	public function publish() {
		$this->published = true;
		$this->article();
		return true;
	}

	protected function article() {
		echo "<i>Article:</i>";
	}
}

class Article extends Content
{
	public function article() {
		echo "<i>Post:</i>";
	}
}

$post = new Article();
echo $post->publish();

// Output: <i>Post:</i><i>Post:</i>1

// NOTE: We have a class Content and another class Article which extends Content. When we instantiate a new Article() the function article() becomes our constructor because the method name meets the class name (this is from PHP 4 days but is still true) so we echo "Post:". Then we call publish() on our object, which calls Article::article() again (NOT Content::article()), and returns true. We echoed the output of our call and the boolean becomes a 1 when we echo it.
