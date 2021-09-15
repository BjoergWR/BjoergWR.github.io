function getResolution() {
    alert("fun getResulution Your screen resolution is: " + window.screen.width * window.devicePixelRatio + "x" + window.screen.height * window.devicePixelRatio);
}



function widthHeight(){
    //getting the viewport dimensions
    const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
    const vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0)
    alert("fun widthHeight Your screen is: " + vw + "x" + vh);
    //let width= Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    //let height = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
    //alert("fun widthHeight Your screen resolution is: " + width + "x" + height);
}


function start(){
    //getResolution();
    widthHeight();
}

window.addEventListener("load", start);
