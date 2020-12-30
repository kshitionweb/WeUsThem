<!doctype html>
<html lang="en">

	<head>

	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Bootstrap CSS -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	    
	    <!-- AngularJS -->
	    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	    <script src="script.js"></script>

	    <!-- Styles -->
	    <link rel = "stylesheet" type = "text/css" href = "style.css" />

	</head>

    <body>

        <h3>Contact Information:</h3>

    	<form ng-app="saveContact" ng-controller="controller" class="form-horizontal">

	      <div class="form-group">
	            <label for="firstName" class="col-sm-3 control-label">First Name</label>
	            <div class="col-sm-6">
	                <input type="text" id="firstName" class="form-control" ng-model="first_name" />
	                <span ng-show="contactForm.firstName.$touched && contactForm.firstName.$error.required">First name is required.</span><br /><br />
	            </div>
	            <div class="col-sm-3"></div>
	        </div>

	        <div class="form-group">
	            <label for="lastName" class="col-sm-3 control-label">Last Name</label>
	            <div class="col-sm-6">
	                <input type="text" id="lastName" class="form-control" ng-model="last_name" />
	                <span ng-show="contactForm.lastName.$touched && contactForm.lastName.$error.required">Last name is required.</span><br/>
	                <br />
	            </div>
	            <div class="col-sm-3"></div>
	        </div>

	        <div class="form-group">
	            <label for="email" class="col-sm-3 control-label">Email</label>
	            <div class="col-sm-6">
	                <input type="text" id="email" class="form-control" ng-model="email" />
	                <span ng-show="contactForm.email.$touched && contactForm.email.$error.required">Email is required.</span><br />
	                <span ng-show="contactForm.email.$touched && contactForm.email.$error.email">Please enter valid email id.</span><br />
	                <br />
	            </div>
	            <div class="col-sm-3"></div>
	        </div>

	        <div class="form-group">
	            <label for="phone" class="col-sm-3 control-label">phone</label>
	            <div class="col-sm-6">
	                <input type="text" id="phone" class="form-control" ng-model="phone" />
	                <span ng-show="contactForm.phone.$touched && contactForm.phone.$error.required">Phone Number is required.</span><br />
	                <br />
	            </div>
	            <div class="col-sm-3"></div>
	        </div>

	        <button ng-click="saveContact()" class="btn btn-primary col-sm-offset-3">Save Contact</button>
	        <input type="reset" value="Reset" ng-click="resetForm()" class="btn" /> <br/>
    </form>

    <script>
		app.controller("controller", function($scope, $http) {
		    $scope.saveContact = function() {
		        var request = $http({
		        method: "post",
		        url: window.location.href + "insert_data.php",
		        data: {
		            first_name: $scope.first_name,
		            last_name: $scope.last_name,
		            email: $scope.email,
		            phone: $scope.phone
		        },
		        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
		    });
		    }
		});
</script>

    </body>
</html>