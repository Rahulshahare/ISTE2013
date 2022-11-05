var img1=new Image();
img1.src="";
var img2=new Image();
img2.src="";
var img3=new Image();
img3.src3="";
var img4=new Image();
img4.src="";

var step=1;
function slideit(){
document.images.image.step=eval("img"+step+".src");
	if (step<5)
	{
		step++;
	}
	else
	{
		step=1;

	}
	slideit();
}