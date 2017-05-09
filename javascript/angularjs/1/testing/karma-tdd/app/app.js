// App example for tests
var app = angular.module('ItemsApp', []);

// Controller
app.controller('MainCtrl', function($scope, $rootScope) {
	$scope.title = 'Hello Pluralsight';

	// Listener
	$rootScope.$on("item:added", function(event, item) {
		$scope.item = item;
	});
})

// Service
app.factory('ItemsService', function() {
	var is = {}, 
		_items = ['hat', 'book', 'pen'];

	is.get = function() {
		return _items;
	}

	return is;
});

// Directive
app.directive('userProfile', function() {
	return {
		restrict: 'E',
		template: '<div>{{user.name}}</div>',
		scope: {
			user: '=data'
		},
		replace: true
	};  
});

// Filter
app.filter('reverse',[function(){
	return function(string){
		return string.split('').reverse().join('');
	}
}]);

// Promises
app.factory('ItemsServiceServer', ['$http', '$q', function($http, $q){
	var is = {};
	is.get = function() {
		var deferred = $q.defer();
		$http.get('items.json') // 'items.json will be mocked in the test'
			.then(function(response){
			deferred.resolve(response);
		})
		.catch(function(error){
			deferred.reject(error);
		});
		return deferred.promise;
	}
	return is;
}]);

// Events
app.factory("appBroadcaster", ['$rootScope', function($rootScope) {
	var abc = {};

	abc.itemAdded = function(item) {
		$rootScope.$broadcast("item:added",item);
	};

	return abc;
}]);