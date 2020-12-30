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

    <?php
      include ('db_connnection.php');
    ?>
</head>

<body ng-controller="ContactController" class="container">

  <div ng-app="newContact" ng-controller="newContactController">
    <button class="btn btn-primary" ng-click="redirect()">Create New Contact</button>
  </div>
  <!-- open new page for creating contact -->
  <script>
    var app = angular.module('newContact', []);
    app.controller('newContactController', function($scope, $window) {
      
      $scope.redirect = function(){
        
        var url = "modal-form.php";
        $window.location.href = url;
      }
    });
  </script>

  <div class="container">
      <h3 align="center">Your contacts</h3>
      <div ng-app="contact_display" ng-controller="controller" ng-init="display_data()">
          <table class="table table-bordered">
              <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone</th>
              </tr>
              <tr ng-repeat="x in contacts">
                  <td>{{x.first_name}}</td>
                  <td>{{x.last_name}}</td>
                  <td>{{x.email}}</td>
                  <td>{{x.phone}}</td>
              </tr>
          </table>
      </div>
  </div>

  <script>
    var app = angular.module('contact_display', []);
    app.controller("controller", function($scope, $http) {
        $scope.display_data = function() {
            $http.get("display.php")
                .success(function(data) {
                    $scope.contacts = data;
                });
        }
    });
  </script> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>
