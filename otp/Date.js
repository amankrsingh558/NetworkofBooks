var ndfy;
function CheckLeapYear(t){
  if((t%400)==0)
    return 1;
  else if((t%4==0)&&(t%100!=0))	
    return 1;
  else
    return 0;
}
function tt(m,v){
var n;
switch (m){
case 0:case 2:case 4:case 6:case 7:case 9:case 11: n=31;break;
case 3:case 5:case 8:case 10: n=30;break;
case 1: n=v;   break;
	}
	return n;
}

function Ylook(){
    var sel=document.getElementById("year");
	var y=sel.options[sel.selectedIndex].value;
	var ly=CheckLeapYear(y);
    if(ly==1)
	  ndfy=29;
	else 
	  ndfy=28;
  Mlook();
}
function dflt(){
	Ylook();
	Mlook();
}
function Mlook(){
    var ms=document.getElementById("mon").selectedIndex;
	var ndm=tt(ms,ndfy);
	 date(ndm);
}
function del(){
	var n=document.getElementById("dt");
	 n.innerHTML="";
}
function date(ndm){
	del();
for(var j=1;j<=ndm;j++){
var cr=document.createElement("OPTION");
cr.innerHTML=j;
document.getElementById("dt").appendChild(cr);
}
}