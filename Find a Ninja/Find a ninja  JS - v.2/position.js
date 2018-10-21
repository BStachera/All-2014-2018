document.getElementById('posis').addEventListener("click", posis);
function posis(){
    let x = Math.floor(Math.random() * 225);
    let y = Math.floor(Math.random() * 380);
    document.getElementById('posis').setAttribute("style", "left:"+x+"px; top:"+y+"px;");
    console.log("click  x="+x+" y="+y);
    pkt++;
    document.getElementById('points').innerHTML ="Points:"+pkt;
}
document.getElementById('start').addEventListener("click", posis);
