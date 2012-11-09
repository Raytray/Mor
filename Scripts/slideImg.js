//Interval in ms.
var interval=1500;
var imageDir="Images/";

var imageNum=0;
imageArray=new Array();

//FIll the array with the images.
imageArray[imageNum++]=new imageItem(imageDir+"01.jpg");
imageArray[imageNum++]=new imageItem(imageDir+"02.jpg");
imageArray[imageNum++]=new imageItem(imageDir+"03.jpg");
var totalImages=imageArray.length;

//Create the image item.
function imageItem(image_location){
    this.image_item=new Image();
    this.image_item.src=image_location;
}

//Get the image's location.
function get_ImageItemLocation(imageObj){
    return(imageObj.image_item.src);
}

//Get the next image.
function getNextImage(){
    imageNum=(imageNum+1) % totalImages;
    var new_image=get_ImageItemLocation(imageArray[imageNum]);
    return(new_image);
}

//Recursively do this so we don't have to keep a loop which holds up everything.
function switchImage(place){
    var new_image=getNextImage();
    document.getElementById(place).src=new_image;
    var recur_call="switchImage('"+place+"')";
    timerID=setTimeout(recur_call, interval);
}

 //http://www.webmonkey.com/2010/02/make_a_javascript_slideshow/
