let energy = 10;
let energy_clk = 0;
let synth = window.speechSynthesis;
let item_cnt = [0,0,0,0,0,0,0,0,0];
let item_act = [1,0,0,0,0,0,0,0,0];
let item_prc = [10,100,10000,100000,1000000,10000000,100000000,1000000000,10000000000];
function speaknow(a){
    let x = new SpeechSynthesisUtterance(a);
        x.lang = 'pl-PL';
        synth.speak(x);
}
function mag_click(){
    energy += energy_clk;
    document.getElementById("energy_cnt").innerHTML = energy;
}
function buy(x){
    if (item_act[x] == 1){
        console.log("buy");
        energy -= item_prc[x];
    }else{
        console.log("bieda");
    }
}

function table_create(){
    nazwy =["CACTU NEWS","SKARYPETA","WLOSY EMOO","SKORA ZEBERA", "PRADNICA RECZNA","BAERIA AAA+","ELEKTROWNIA JADROWA","CACTU GENERATOR","ENERGIA BOSKIEGO CACTU"]
    for( let x=1; x<= 9; x++){
        document.write("<li class='items'> <ul class='itembar'><li> <img src='images/item/"+x+".gif'></li><li> <span class='buy' onclick='buy("+(x-1)+")'>BUY</span></li><li> <span id='count'>COUNT: </span></li><li> <span>"+nazwy[x-1]+"</span></li><li> <span id='price'>"+item_prc[x-1]+"<img class='powerprice' src='images/power.png'></span></li></ul></li>")
    }
}
    