var picNo = 0;
var totPic = 13;

var namen = [[1,1,1,1],
			 [1,0,0,1],
			 [1,1,0,0],
			 [0,0,1,0],
			 [0,0,0,1],
			 [1,1,1,1],
			 [1,1,1,1],
			 [1,1,1,1],
			 [0,0,0,1],
			 [1,0,0,0],
			 [0,1,0,0],
			 [1,0,1,0],
			 [1,1,1,1]];

var tabElements = ["trVox","trGit","trBas","trSch"];


function navPics(pm) {
	picNo = (picNo + pm + totPic) % totPic;
	document.getElementById("diashowImg").src = "img/dia/"+picNo+".jpg";
	
	picNames();
}

function picNames() {
	for (var i=0; i<4; i++) {
		document.getElementById(tabElements[i]).style.color = (namen[picNo][i] == 1 ? "#FFF" : "#555");
	}
}