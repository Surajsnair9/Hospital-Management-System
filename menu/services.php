<!DOCTYPE html>
<html>
<head>
<style>
button {
	height:70px;
	width:180px;
	font: 25px Gorman;
	margin:5px 5px 10px 25px;
	display: inline-block;
	background-color:blue;
        color: white;
	text-align:center;
        cursor: pointer;
}

</style>
</head>
<body>
<button onclick="parent.serviceRequest('appointment')">Appointment</button>
<button onclick="parent.serviceRequest('admin')">Administration</button>
<button onclick="parent.serviceRequest('consultation')">Consultation</button>
<button onclick="parent.serviceRequest('reception')">Reception</button>
<button onclick="parent.serviceRequest('ambulance')">Ambulance</button>
<button onclick="parent.serviceRequest('department')">Departments</button>
<button onclick="parent.serviceRequest('generalDiseases')">General Diseases</button>
</body>
</html>