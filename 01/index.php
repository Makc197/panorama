<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			margin: 0;
		}	 

		#bg {
			animation: bg 60s linear infinite;
			backface-visibility: hidden;
			transform: translate3d(0,0,0);
			background-color: #348cb2;
			background-image: url("img.jpg");
			background-position: bottom left;
			background-repeat: repeat-x;
			height: 100%;
			left: 0;
			opacity: 1;
			position: absolute;
			top: 0;
			background-size: contain;
			width: 10000px;
		}
		@keyframes bg {

			0% {
				transform: translate3d(0,0,0); 
			}

			100% { 
				transform: translate3d(-6023px,0,0); 
			} 
		}

	</style>
</head>
<body>
	<div id="bg"></div>
	<div></div>
</body>
</html>