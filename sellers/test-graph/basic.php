<!DOCTYPE html>
<html>
<head>
	<title>Simple Bar Graph</title>
	<script type="text/javascript">
		function draw(){
			let canvas = document.getElementById("myCanvas");
			let ctx = canvas.getContext("2d");


			let X=0;
			let Y=0;
			let height = 100;
			let width = 100;
			// ctx.fillStyle = "blue";
			ctx.fillRect(X,Y,width,height);
		}
	</script>
</head>
<body onload="draw()">

<canvas id="myCanvas" height="300" width="300">
	
</canvas>
</body>
</html>