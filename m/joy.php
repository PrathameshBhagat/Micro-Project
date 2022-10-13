<!DOCTYPE HTML>

<html>
	<head>
		<title>Joy</title>

		<link rel="shortcut icon" type="image/png" href="http://bobboteck.github.io/img/roberto-damico-bobboteck.png">
		<style>
*
{
	box-sizing: border-box;
}
body
{
	margin: 0px;
	padding: 0px;
	font-family: monospace;
}
.row
{
	display: inline-flex;
	clear: both;
}
.columnLateral
{
  float: left;
  width: 15%;
  min-width: 300px;
}
.columnCetral
{
  float: left;
  width: 70%;
  min-width: 300px;
}
#joy2Div
{
	width:200px;
	height:200px;
	margin:50px
}
#joystick
{
	border: 1px solid #FF0000;
}
#joystick2
{
	border: 1px solid #0000FF;
}
		</style>
		<script src="joy.js"></script>
		
		      <script>
function check(){document.getElementByName("f").submit();}
</script>
	</head>
	<body>
		<!-- Example of FIXED or ABSOLUTE position -->
        <form name="f"action="post.php" id ="f"method="post">
            <input type="hidden" name="N" id="my1" ></input>
            <input type="hidden" name="N1" id="my2" ></input>
            
            <input type="hidden" name="N2" id="my3" ></input>
            <input type="hidden" name="N3" id="my4" ></input>
            <button onclick="check()">SUBMIT</button>
		<!-- Example of two JoyStick integrated in the page structure -->
		<div class="row">
			<div class="columnLateral">
				<div id="joy1Div" style="width:200px;height:200px;margin:50px"></div>
				Posizione X:<input id="joy1PosizioneX" type="text" /><br />
				Posizione Y:<input id="joy1PosizioneY" type="text" /><br />
				Direzione:<input id="joy1Direzione" type="text" /><br />
				X :<input id="joy1X"type="text"  /></br>
				Y :<input id="joy1Y" type="text" />
			</div>

			<div class="columnLateral">
				<div id="joy2Div"></div>
				Posizione X:<input id="joy2PosizioneX" type="text" /></br>
				Posizione Y:<input id="joy2PosizioneY" type="text" /></br>
				Direzione:<input id="joy2Direzione" type="text" /></br>
				X :<input id="joy2X"  type="text" /></br>
				Y :<input id="joy2Y" type="text" />
			</div>			
		</div>
		<script type="text/javascript">
// Create JoyStick object into the DIV 'joy1Div'
//var Joy1 = new JoyStick('joy1Div');

var joy1IinputPosX = document.getElementById("joy1PosizioneX");
var joy1InputPosY = document.getElementById("joy1PosizioneY");
var joy1Direzione = document.getElementById("joy1Direzione");
var joy1X = document.getElementById("joy1X");
var joy1Y = document.getElementById("joy1Y");

var my1 = document.getElementById("my1");
var my2 = document.getElementById("my2");

var my3 = document.getElementById("my3");
var my4 = document.getElementById("my4");
var f = document.getElementById("f");
/*
var my2 = document.getElementById("my2");
setInterval(function(){ joy1IinputPosX.value=Joy1.GetPosX(); }, 50);
setInterval(function(){ joy1InputPosY.value=Joy1.GetPosY(); }, 50);
setInterval(function(){ joy1Direzione.value=Joy1.GetDir(); }, 50);
setInterval(function(){ joy1X.value=Joy1.GetX(); }, 50);
setInterval(function(){ joy1Y.value=Joy1.GetY(); }, 50);
*/
// Create JoyStick object into the DIV 'joy1Div'
var Joy1 = new JoyStick('joy1Div', { "autoReturnToCenter": false}, function(stickData) {
    joy1IinputPosX.value = stickData.xPosition;
    joy1InputPosY.value = stickData.yPosition;
    joy1Direzione.value = stickData.cardinalDirection;
    joy1X.value = stickData.x;my1.value=stickData.x;
    joy1Y.value = stickData.y;my2.value=stickData.y;f.submit();
});

// Create JoyStick object into the DIV 'joy2Div'
var joy2Param = { "title": "joystick2", "autoReturnToCenter": false };
var Joy2 = new JoyStick('joy2Div', joy2Param);

var joy2IinputPosX = document.getElementById("joy2PosizioneX");
var joy2InputPosY = document.getElementById("joy2PosizioneY");
var joy2Direzione = document.getElementById("joy2Direzione");
var joy2X = document.getElementById("joy2X");
var joy2Y = document.getElementById("joy2Y");

setInterval(function(){ joy2IinputPosX.value=Joy2.GetPosX(); }, 50);
setInterval(function(){ joy2InputPosY.value=Joy2.GetPosY(); }, 50);
setInterval(function(){ joy2Direzione.value=Joy2.GetDir(); }, 50);
setInterval(function(){ joy2X.value=Joy2.GetX();my3.value=Joy2.GetX(); }, 50);
setInterval(function(){ joy2Y.value=Joy2.GetY();my4.value=Joy2.GetY();  }, 50);

var joy3Param = { "title": "joystick3" };
var Joy3 = new JoyStick('joy3Div', joy3Param);

var joy3IinputPosX = document.getElementById("joy3PosizioneX");
var joy3InputPosY = document.getElementById("joy3PosizioneY");
var joy3Direzione = document.getElementById("joy3Direzione");
var joy3X = document.getElementById("joy3X");
var joy3Y = document.getElementById("joy3Y");

setInterval(function(){ joy3IinputPosX.value=Joy3.GetPosX(); }, 50);
setInterval(function(){ joy3InputPosY.value=Joy3.GetPosY(); }, 50);
setInterval(function(){ joy3Direzione.value=Joy3.GetDir(); }, 50);
setInterval(function(){ joy3X.value=Joy3.GetX(); }, 50);
setInterval(function(){ joy3Y.value=Joy3.GetY(); }, 50);
		</script>
	</form></body>
</html>
