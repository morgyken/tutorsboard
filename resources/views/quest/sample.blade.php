<!doctype html>
<html ng-app>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js">                                                </script>
</head>
<body>
<div ng-init="items = [
   {name:'fruit', count:4},
   {name:'car', count:1},
   {name:'dog', count:2}
   ]">
    <ul>
        <li ng-repeat="item in items">
            <span>Count:</span>
            <span>{{item.count}}</span>
            <a ng-click="item.count = item.count + 1">Increment</a>
        </li>
    </ul>
</div>
</body>
</html>