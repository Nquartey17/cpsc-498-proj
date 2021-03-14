function calculate() {
	var cgrade = parseFloat(document.getElementById("yourgrade").value);
	var dgrade = parseFloat(document.getElementById("desgrade").value);
	var fgrade = parseFloat(document.getElementById("finalgrade").value);
	var total = (dgrade - cgrade * (100 - fgrade)) / fgrade;

	var display = document.getElementById("submitbuttom").innerHTML;
	document.getElementById("demo").innerHTML = display;
}
