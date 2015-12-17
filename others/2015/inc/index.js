function Move(Object,event){
	var event = event||window.event;
        //获取left值 
        var startX = Object.offsetLeft;
        //获取top值  
        var startY = Object.offsetTop;  
        var mouseX = event.clientX;  
        var mouseY = event.clientY;  
        var deltaX = mouseX - startX;  
        var deltaY = mouseY - startY;
        //绑定事件  
        if(document.attachEvent){  
            Object.attachEvent('onmousemove',moveHandle);  
            Object.attachEvent('onmouseup',upHandle);  
            Object.attachEvent('onlosecapture',upHandle);
            //  
            Object.setCapture();  
        }else{  
            document.addEventListener('mousemove',moveHandle,true); 
            document.addEventListener('mouseup',upHandle,true);
        }
        function moveHandle(event){  
            var event = event||window.event;
            Object.style.left = (event.clientX - deltaX)+"px";
            Object.style.top = (event.clientY - deltaY)+"px";    
        }
        function upHandle(){
            //移除事件 
            if(document.attachEvent){  
                Object.detachEvent('onmousemove',moveHandle);  
                Object.detachEvent('onmouseup',upHandle);  
                Object.detachEvent('onlosecapture',upHandle);  
                Object.releaseCapture();  
            }else{  
                document.removeEventListener('mousemove',moveHandle,true);  
                document.removeEventListener('mouseup',upHandle,true);  
            }  
        }
}
function Close(n){
	var e='Layer'+n;											
	document.getElementById(e).style.display='none';
}
function Show(n){
	var e='Layer'+n;
	document.getElementById(e).style.zIndex =iLayerMaxNum+1;
	document.getElementById("aspk").style.display = "block";
	document.getElementById("aspk").style.zIndex = iLayerMaxNum;
	var size = getPageSize();
	document.getElementById("aspk").style.width = size[0];
	document.getElementById("aspk").style.height = size[1];	
}	
function Hide(){
	document.getElementById("aspk").style.display = "none";
	iLayerMaxNum=iLayerMaxNum+2;
}
function getPageSize(){
	var de = document.documentElement;
	var w = window.innerWidth || self.innerWidth || (de&&de.clientWidth) || document.body.clientWidth;
	var h = window.innerHeight || self.innerHeight || document.body.clientHeight || (de&&de.clientHeight);
	arrayPageSize = new Array(w,h); 
	return arrayPageSize;
}