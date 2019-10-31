function first(){
  setTimeout("calc();",100);
  tels=document.getElementById('tels').style='position:fixed;left:'+(screen.width/2+460)+'px;top:28px;';
}

var mod;

	var zenp=Array();
	var zent=Array();
	
	zenp[1]=250;
	zenp[2]=290;
	zenp[3]=250;
	zenp[4]=290;
	zenp[5]=500;
	zenp[6]=1400;
	
	zent[1]=200;
	zent[2]=200;
	zent[3]=200;
	zent[4]=200;
	zent[5]=200;
	zent[6]=200;
	
	
function calc(){
	
	var type=document.getElementById("type").value;
	var plosh=document.getElementById("plosh").value;
	var kols=document.getElementById("kols").value;
	var rez=document.getElementById("rez");

	if (plosh>999999){
		plosh=999999;
		document.getElementById("plosh").value=plosh;
	}
	
	if (kols>999999){
		kols=999999;
		document.getElementById("kols").value=kols;
	}		
		
	
	var sum=((zenp[type]*plosh+zent[type]*kols)*1)+"";
	
	if (sum=="NaN"){sum="";}
	rez.value=sum;
	
}


	
function showmod(sh){
	
	mod=document.getElementById("mod1");
	//alert("111");
	
	if (sh==0){
		mod.style.display="none";
	}else{
		
		if (mod.style.display=="none"){
		mod.style.opacity=0;
		setTimeout('mod.style.display="block";',200);
		for (i=1;i<=5;i++){
		setTimeout('mod.style.opacity=0.'+i*2,20*i+200);
		}
		setTimeout('mod.style.opacity=1',100+200);
		}
		
		
		}
		
	
}