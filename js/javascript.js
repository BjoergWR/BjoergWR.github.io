function getResolution() {
    alert("Your screen resolution is: " + window.screen.width * window.devicePixelRatio + "x" + window.screen.height * window.devicePixelRatio);
}


function start(){
    getResolution();
}

document.addEventListener("load", start):
