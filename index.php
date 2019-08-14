<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vue.js in PHP</title>
    <script src="js/vue.js"></script>
</head>
<body>
	<div id="app">
		<p>{{ message }}</p>
	</div>
</body>
<script>
 new Vue({
     el: "#app",
     data: {
        message: 'Hello Vue from PHP!'
     }
 });
</script>
</html>