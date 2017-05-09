# Mocha JS

	[Mocha](http://mochajs.org/) is a feature-rich JavaScript test framework running on Node.js and in the browser, making asynchronous testing simple and fun. Mocha tests run serially, allowing for flexible and accurate reporting, while mapping uncaught exceptions to the correct test cases.

## Code coverage reports

Using [Istanbul](https://github.com/gotwarlost/istanbul):

	npm install -g istanbul
	istanbul cover _mocha -- -R spec
	open coverage/lcov-report/index.html	

Using [blanketjs](http://blanketjs.org/).

	npm install --save-dev blanket
