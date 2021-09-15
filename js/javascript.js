


function getResolution() {
    alert("fun getResulution Your screen resolution is: " + window.screen.width * window.devicePixelRatio + "x" + window.screen.height * window.devicePixelRatio);
}


function start(){
    getResolution();
}

window.addEventListener("load", start);

