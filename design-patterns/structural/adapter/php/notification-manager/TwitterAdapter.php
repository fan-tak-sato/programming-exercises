<?php

class TwitterAdapter implements NotificationInterface
{
	protected $_data;

	public function setData($data)
	{
		$this->_data = $data;
	}

	public function sendNotification()
	{
		$twitterClient = new TwitterService();
		$twitterClient->setMessage($this->_data['message']);
		$twitterClient->sendTweet();
	}
}

