# Mocha testing examples


## Code coverage reports

Using [Istanbul](https://github.com/gotwarlost/istanbul):

	npm install -g istanbul
	istanbul cover _mocha -- -R spec
	open coverage/lcov-report/index.html	

Using [blanketjs](http://blanketjs.org/).

	npm install --save-dev blanket

