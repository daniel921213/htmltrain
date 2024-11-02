var jsImg=new Array("images/001.jpg","images/002.jpg","images/003.jpg","images/004.jpg","images/005.jpg");
var jsImg_len=jsImg.length;
var i=2;
setInterval("sequentialImg()",2000);
function sequentialImg(){
	document.getElementById("my_div").innerHTML= "<img src=' "+ jsImg[i] +" ' width:1140px>";
	i++;
	if(i>=jsImg_len) i=0;
}