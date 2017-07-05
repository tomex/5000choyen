var textbox, classText, svg, draw, canvasDraw, imgTag;

window.onload = function () {
	textbox = document.getElementById("textbox");
	draw = document.getElementById("draw");
	svg = document.getElementById("svg");
	canvasDraw = document.getElementById("canvas-draw");
	classText = document.querySelectorAll(".text");
	imgTag = document.getElementById("imgTag");
	reDraw();
};

function saveImage() {
	var a = document.createElement("a");
	a.setAttribute("download", name);
	a.href = imgTag,getAttribute("src");
	a.click();
}

function convertDraw(){
	var width = svg.getAttribute("width") * 3;
	var height = svg.getAttribute("height") * 3;
	var img = new Image;
	var DOMURL = self.URL || self.webkitURL || self;
	var blob = new Blob([svg.outerHTML], {type: "image/svg+xml"});
	var url = DOMURL.createObjectURL(blob);
	img.onload = function() {
		var canvas = document.createElement("canvas");
		canvas.width = width;
		canvas.height = height;
		
		canvasDraw.appendChild(canvas);
		context = canvas.getContext("2d");
		context.drawImage(img,0,0,width,height);
		var name = textbox.value+".png";
		var data = canvas.toDataURL("image/png");
		console.log(data);
		imgTag.setAttribute("src",data);
		imgTag.setAttribute("alt",name);
		DOMURL.revokeObjectURL(url);
		while (canvasDraw.firstChild) {
			canvasDraw.removeChild(canvasDraw.firstChild);
		}
	}
	img.src = url;
}

function reDraw() {
	var text = textbox.value;
	if (classText.length > 0){
		for(var i=0;i<classText.length;i++){
			classText[i].innerHTML = text;
		}
	}
	var size = draw.getBBox();
	var width = size.width + size.x;
	svg.setAttribute("width",width);
	imgTag.setAttribute("width",width);
	
	convertDraw();
}