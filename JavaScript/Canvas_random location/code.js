
    let cvs = document.getElementById("mycanvas");
    var cnvs = cvs.getContext("2d");
    let up = Math.floor(Math.random() * 485);
    let left = Math.floor(Math.random() * 485);
    cnvs.beginPath();
    cnvs.arc(up,left,15,0,2*Math.PI);
    cnvs.fill();
    cnvs.stroke(); 