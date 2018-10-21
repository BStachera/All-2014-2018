
function start(){
    let size = Number(document.getElementById('size').value);
    let clr = document.getElementById('clr').value;
    let txt = document.getElementById('txt').value;
    let font = Number(document.getElementById('font').value);
    document.getElementById('show').style.color = clr;
    document.getElementById('show').style.fontSize = size+"px";
    document.getElementById('show').innerHTML = txt;
    switch(font){
        case 1:
            document.getElementById('show').style.fontFamily = 'Arial';
            break;
        case 2:
            document.getElementById('show').style.fontFamily = 'Verdana';
            break;
        case 3:
            document.getElementById('show').style.fontFamily = 'Calibri';
            break;
        case 4:
            document.getElementById('show').style.fontFamily = 'Comic Sans MS';
            break;
            
    }
}
 