# Protractor testing tutorial

## Install

	npm install -g protractor

[Github](https://github.com/angular/protractor)

## Resources

Install two command line tools, protractor and webdriver-manager

	protractor --version

The webdriver-manager is a helper tool to easily get an instance of a Selenium Server running. Use it to download the necessary binaries with:

	webdriver-manager update
	webdriver-manager start

This will start up a Selenium Server and will output a bunch of info logs. 
Your Protractor test will send requests to this server to control a local browser. 
Leave this server running throughout the tutorial. You can see information about the status of the server at http://localhost:4444/wd/hub

[Browser setup](http://www.protractortest.org/#/browser-setup)
[Frameworks](http://www.protractortest.org/#/frameworks)