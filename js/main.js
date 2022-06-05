//Gryffindor Variables

var totalGryfPoints;

var gryfProgress = document.getElementById("gryfProgressBar");
var gryfPointsText = parseInt(document.getElementById("gryffindorPoints").innerHTML);

//Hufflepuff Variables

var totalHuffPoints

var huffProgress = document.getElementById("huffProgressBar");
var huffPointsText = parseInt(document.getElementById("hufflepuffPoints").innerHTML);

//Ravenclaw Variables

var totalRavenclawPoints;

var ravenProgress = document.getElementById("ravenProgressBar");
var ravenPointsText = parseInt(document.getElementById("ravenclawPoints").innerHTML);

//Slytherin Variables

var totalSlytherinVariables;

var slyProgress = document.getElementById("slyProgressBar");
var slyPointsText = parseInt(document.getElementById("slytherinPoints").innerHTML);

function setGryfPoints(points) {
	
	console.log(points);
	
	var percentage = (points / 500) * 100;
	
	gryfProgress.style = "height: " + percentage + "%;";
	
}

function setHuffPoints(points) {
	
	var percentage = (points / 500) * 100;
	
	huffProgress.style = "height: " + percentage + "%;";
	
}

function setRavenPoints(points) {
	
	var percentage = (points / 500) * 100;
	
	ravenProgress.style = "height: " + percentage + "%;";
	
}

function setSlyPoints(points) {
	
	var percentage = (points / 500) * 100;
	
	slyProgress.style = "height: " + percentage + "%;";
	
}


function onLoad() {

	setGryfPoints(gryfPointsText);
	setHuffPoints(huffPointsText);
	setRavenPoints(ravenPointsText);
	setSlyPoints(slyPointsText);

}