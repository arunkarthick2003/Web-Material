// Define a new module for our app
var app = angular.module("instantSearch", []);

// Create the instant search filter

app.filter('searchFor', function(){

	// All filters must return a function. The first parameter
	// is the data that is to be filtered, and the second is an
	// argument that may be passed with a colon (searchFor:searchString)

	return function(arr, searchString){

		if(!searchString){
			return arr;
		}

		var result = [];

		searchString = searchString.toLowerCase();

		// Using the forEach helper method to loop through the array
		angular.forEach(arr, function(item){

			if(item.title.toLowerCase().indexOf(searchString) !== -1){
				result.push(item);
			}

		});

		return result;
	};

});

// The controller

function InstantSearchController($scope){

	// The data model. These items would normally be requested via AJAX,
	// but are hardcoded here for simplicity. See the next example for
	// tips on using AJAX.

	$scope.items = [
		{
			title: '50 Must-have plugins for extending Twitter Bootstrap'
			
		},
		{
			
			title: 'Making a Super Simple Registration System With PHP and MySQL'
		
		},
		{
			
			title: 'Create a slide-out footer with this neat z-index trick'
		
		},
		{
			
			title: 'How to Make a Digital Clock with jQuery and CSS3'
		
		},
		{
			
			title: 'Smooth Diagonal Fade Gallery with CSS3 Transitions'
			
		},
		{
			
			title: 'Mini AJAX File Upload Form'
			
		},
		{
	
			title: 'Your First Backbone.js App – Service Chooser'
			
		}
	];


}
