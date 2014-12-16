
var marker = "rgb(139,0,0)";
var markerwidth = 1;

var lastEvent;
var mouseDown = false;

var context = $('canvas')[0].getContext('2d');
var $canvas = $('#canvas');

$canvas.mousedown(function(e){
	lastEvent = e;
	mouseDown = true;
}).mousemove(function(e){
	if(mouseDown){
		context.beginPath();

		context.moveTo(lastEvent.offsetX,lastEvent.offsetY);
		context.lineTo(e.offsetX,e.offsetY);
	    context.lineWidth=markerwidth;
	    context.strokeStyle = marker;
	    context.lineCap='round';
	    context.stroke();
	    
	    lastEvent = e;
  }  
}).mouseup(function(){
  mouseDown = false; 
});

var clear = function(){
  context.clearRect(0,0,575,400);
};

$('#clear').on("click",clear);

/****CHANGE MARGER WIDTH****/

var changeWidth =  function(){  
  markerwidth = $("#markerwidth").val();
  console.log(markerwidth);
};


$("#markerwidth").change(changeWidth);