<!DOCTYPE html>
<html>
<head>
	<title>Simple Bar Graph</title>
	<script type="text/javascript">
		function draw(){

			let n = document.getElementById("num").value;
			// let graphValues =n.split(',');
			let graphValues = ["100", "200", "300", "400", "500"];

			console.log(graphValues);


			let canvas = document.getElementById("myCanvas");
			let ctx = canvas.getContext("2d");


			let width = 70; //bar width
			let X=50; //first bar position

			ctx.fillStyle = "#202020";

			for(let i=0; i<graphValues.length; i++){
				let h = graphValues[i];
				ctx.fillRect(X,canvas.height - h,width,h);
				X+=width+15;
			}
		}

		function reset(){
			let canvas = document.getElementById("myCanvas");
			let ctx = canvas.getContext("2d");
			ctx.clearRect(0, 0, canvas.width, canvas.height);
		}
	</script>
</head>
<body onload="draw()">

<h5>Enter the values seperated by a comma</h5>
<input type="text" name="number" id="num">
<input type="button" value="submit" name="submit" id="submit" onclick="draw()">
<input type="button" value="clear" name="clear" id="clear" onclick="reset()">
<canvas id="myCanvas" height="900" width="500" style="border: 1px solid #c3c3c3">
	
</canvas>
</body>
</html>