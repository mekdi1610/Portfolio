function Pre(){
	var code=document.getElementById("Code");
  var codePS=document.getElementById("CodePS");
  codePS.value=code.value;
}
  
function getDate(){
  var RD=document.getElementById("RD");
  var Dat=document.getElementById("Dat");
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
  RD.value=dateTime;
  Dat.value=dateTime;
}