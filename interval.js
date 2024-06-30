$(document).ready(function () {
  $("#getUID").load("UIDContainer.php");
  setInterval(function () {
    $("#getUID").load("UIDContainer.php");
  }, 500);
});

var myVar = setInterval(myTimer, 1000);
var oldID = "";
clearInterval(myVar);

function myTimer() {
  var getID = document.getElementById("getUID").innerHTML;
  oldID = getID;
  if (getID != "") {
    myVar1 = setInterval(myTimer1, 500);
    showUser(getID);
    clearInterval(myVar);
  }
}

