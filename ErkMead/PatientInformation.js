function randomString(length) {  
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ012345678901234567890123456789";
    for(var i = 0; i < length; i++) {
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    return text;
}
function Generate(){
  var newid=document.getElementById("code");
  var oldid=randomString(6);
  newid.value=oldid.toUpperCase();
}
//This function is used to generate id with random string and concatenate it with First Name and Last Name
function Generate2(){
  var newid=document.getElementById("uid").value;
  var FN=document.getElementById("FN").value;
  var LN=document.getElementById("LN").value;
  var F=FN.substring(0,1).toUpperCase();
  var L=LN.substring(0,1).toUpperCase();
  //var rand=Math.ceil(Math.random()*(0000,2000));
  //var oldid=Math.random().toString(36).replace('0.', '') 
  //newid.value=(F+L+rand);
  newid.value=(F+L+newid.toUpperCase());
}
//This Function ensures the rhobustness of a textbox
function rhobust(){
  var FN=document.getElementById("FN").value;
  var MN=document.getElementById("MN").value;
  var LN=document.getElementById("LN").value;
  var R=document.getElementById("R").value;
  //Numbers
  if (FN=="0" || FN=="1" || FN=="2" || FN=="3"|| FN=="4" || FN=="5" || FN=="6" || FN=="7" || FN=="8" ||FN=="9" || FN=="10") {
    alert("This is should be in Words");
  }
  else if(MN=="0" || MN=="1" || MN=="2" || MN=="3"|| MN=="4" || MN=="5" || MN=="6" || MN=="7" || MN=="8" ||MN=="9" || MN=="10") {
    alert("This input should be in Words");
  }
  else if(LN=="0" || LN=="1" || LN=="2" || LN=="3"|| LN=="4" || LN=="5" || LN=="6" || LN=="7" || LN=="8" ||LN=="9" || LN=="10") {
    alert("This input should be in Words");
  }
  //Letters (Upper and Lower Case )
 else if (R=="A" || R=="B" || R=="C" || R=="D" || R=="E" || R=="F" || R=="G" || R=="H" || R=="I" || R=="J" || R=="K" || R=="L" || R=="M" || R=="N" || R=="O" || R=="P" || R=="Q" || R=="R" || R=="S" || R=="T" ||R=="U" || R=="V" || R=="W" || R=="X" || R=="Y" || R=="Z"){
  alert("This input should be in Numbers");
 }
else if (R=="a" || R=="b" || R=="c" || R=="d" || R=="e" || R=="f" || R=="g" || R=="h" || R=="i" || R=="j" || R=="k" || R=="l" || R=="m" || R=="n" || R=="o" || R=="p" || R=="q" || R=="r" || R=="s" || R=="t" ||R=="u" || R=="v" || R=="w" || R=="x" || R=="y" || R=="z"){
  alert("This input should be in Numbers");
 }
 //Special Charcters
 else if (R=="," || R=="." || R=="/" || R==";" || R=="'" || R=="[" || R=="]" || R=="!" || R=="@" || R=="#" || R=="$" || R=="%" || R=="^" || R=="&" || R=="*" || R=="(" || R==")" || R=="_" || R=="-" || R=="+" ||R=="=" || R=="{" || R=="}" || R==":" || R=="<" || R==">" || R=="?"){
  alert("Invaild Input");
 }
 else if (FN=="," || FN=="." || FN=="/" || FN==";" || FN=="'" || FN=="[" || FN=="]" || FN=="!" || FN=="@" || FN=="#" || FN=="$" || FN=="%" || FN=="^" || FN=="&" || FN=="*" || FN=="(" || FN==")" || FN=="_" || FN=="-" || FN=="+" ||FN=="=" || FN=="{" || FN=="}" || FN==":" || FN=="<" || FN==">" || FN=="?"){
  alert("Invaild Input");
 }
  else if (MN=="," || MN=="." || MN=="/" || MN==";" || MN=="'" || MN=="[" || MN=="]" || MN=="!" || MN=="@" || MN=="#" || MN=="$" || MN=="%" || MN=="^" || MN=="&" || MN=="*" || MN=="(" || MN==")" || MN=="_" || MN=="-" || MN=="+" ||MN=="=" || MN=="{" || MN=="}" || MN==":" || MN=="<" || MN==">" || MN=="?"){
  alert("Invaild Input");
}
 else if (LN=="," || LN=="." || LN=="/" || LN==";" || LN=="'" || LN=="[" || LN=="]" || LN=="!" || LN=="@" || LN=="#" || LN=="$" || LN=="%" || LN=="^" || LN=="&" || LN=="*" || LN=="(" || LN==")" || LN=="_" || LN=="-" || LN=="+" ||LN=="=" || LN=="{" || LN=="}" || LN==":" || LN=="<" || LN==">" || LN=="?"){
  alert("Invaild Input");
}
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

