var div=document.getElementsById('div');
function singleclick(){
		div.style.backgroundColor='red';
}
function doubleclick(){
		div.style.backgroundColor='green';
}

var clickcout=0;
div.addEventListener('click',function(){
		clickcount++;
		if(clickcount==1){
		singleClickTimer=setTimeout(function(){
				clickcount=0;
				singleclick();
				},400);
		}
}else if(clickcount==2){
		ClearTimeout(singleClickTimer);
		clickcount=0;
		doubleclick();
		}
	},false);
