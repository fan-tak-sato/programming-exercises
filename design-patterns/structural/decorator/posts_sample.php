<?php

abstract class postsEntity {
	
	protected $config, $channel;
	
	public function getConfig()
	{
		return $this->config;
	}
	
	public function getChannel()
	{
		return $this->channel;
	}
}

class posts extends postsEntity {
	
}

// posts decorator setter
class postsSetter {
	
	private $_posts;
	
	// set the postEntity object to decorate here or on the constructor (mandatory)
	public function setPosts(postsEntity $posts)
	{
		$this->_posts = $posts;
	}
	
	// set config
	public function setConfig($config)
	{
		if (!$this->_posts) return false;
		
		$this->_posts->setConfig($config);
	}
	
}

// must extend posts, if not I must duplicate seConfig to keep $config protected
class postsConfigDecorator extends posts {
	
	public function __construct(postsEntity $post)
	{
		$this->_app = $post;
	}
	
	public function setConfig($config)
	{
		$this->_app->config = $config;
	}
	
}

class postsChannelDecorator extends posts {
	
	private $_app;
	
	public function __construct(postsEntity $post)
	{
		$this->_app = $post;
	}

	public function setChannel($channel)
	{
		$this->_app->channel = $channel;
	}
}


class postsController {
	
	public function getDefaultData()
	{
		// sample 1: decorate property with a decorator but setConfig is double
		/*
		$posts = new posts();
		$postSetter = new postsSetter();
		$postSetter->setPosts( $posts );
		$postSetter->setConfig('this is my config decorated');
		echo "Config: ".$posts->getConfig();
		*/
		
		// sample 2: decorate extending the class
		/*
		$postsConfigDecorator = new postsConfigDecorator();
		$postsConfigDecorator->setConfig("this is my config decorated");
		echo $postsConfigDecorator->getConfig();
		*/
		
		// sample 3: multiple object on this controller
		$posts = new posts();
		
		$postsConfigDecorator = new postsConfigDecorator($posts);
		$postsConfigDecorator->setConfig("this is my config decorated");
		// echo $postsConfigDecorator->getConfig()."<br>";
		
		// $postsChannelDecorator = new postsChannelDecorator();
		// $postsChannelDecorator->setChannel(1);
		// echo $postsChannelDecorator->getChannel();
		
		print_r($posts);
	}
	
}

$postsController = new postsController();
$postsController->getDefaultData();
