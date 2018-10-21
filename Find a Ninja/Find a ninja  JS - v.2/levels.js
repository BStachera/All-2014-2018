document.getElementById("lvle").addEventListener("click", 
function(){
    console.log("easy");
    document.getElementById('position').style.width = "122px";
    document.getElementById('position').style.height = "150px";
});

document.getElementById("lvlm").addEventListener("click", 
function(){
    console.log("medium");
    document.getElementById('position').style.width = "73px";
    document.getElementById('position').style.height = "90px";
    
});

document.getElementById("lvlh").addEventListener("click", 
function(){
    console.log("hard");
    document.getElementById('position').style.width = "25px";
    document.getElementById('position').style.height = "31px";
});