<!DOCTYPE html>
<html>
	<head>
		<title>MQTT</title> 
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.2/mqttws31.js"></script>
		<script type="text/javascript">
			var wsbroker = "broker.eclipse.org";
			var wsport = 1883
			var client = new Paho.MQTT.Client(wsbroker, wsport,"myclientid_" + parseInt(Math.random() * 100, 10));
			var connectionOption = 	{
				timeout:3,
				onSuccess: function () 	{
					client.subscribe('watering2020/out', {qos: 2});
					document.getElementById("connectionLabel").innerHTML = "Connected";
				},
				onFailure: function (failure) 	{
					document.getElementById("connectionLabel").innerHTML = failure.errorMessage;
				}
			};

			client.onConnectionLost = function (connectionLost)
			{
				document.getElementById("connectionLabel").innerHTML = connectionLost.errorMessage;
			};

			client.onMessageArrived = function (dataReceived)
			{	
				document.getElementById("dataReceive").innerHTML = dataReceived.payloadString;
			};

			function init()
			{
				client.connect(connectionOption);
			};

			function sendPayload()
			{
				message = new Paho.MQTT.Message(document.getElementById("dataSend").value);
				message.destinationName = "watering2020/in";
				client.send(message);
			};
		</script>
	</head>

	<body onload="init();">
		<div class="container">
			<div class="jumbotron">
				<h1>MQTT</h1>
			</div>
			Connection Status : <label id="connectionLabel"></label><br>
			Data To Send : <input id="dataSend" ><button onclick="sendPayload()">Send</button><br>
			Data Receive : <label id="dataReceive"></label>
		</div>
	</body>
</html>
