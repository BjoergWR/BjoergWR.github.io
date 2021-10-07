let start_bg_color = "white";
let draw_color = "#349"; //start color for stroke or pen
let draw_width = "2"; //pen width
let is_drawing = false; //  if we are drawing or not
let width = window.innerWidth - 100; //get the window responsive on load and refresh
let height = window.innerHeight - 220; // Get the size of the viewport
let canvas;
let ctx; //context

//initial function called from the window load event
function init() {
    //get the ctx of canvas
    canvas = $("canvas");
    ctx = canvas.getContext("2d");

    //set the color-picker
    draw_color = document.querySelector('input[type="color"]');
    draw_color.value = "#49E4E1";

    //draw the canvas board
    drawCanvas();

    //call the addEventListeners
    start();
}

//draw the canvas
function drawCanvas(element) {

    canvas.width = width; //make it resizeable
    canvas.height = height; // adjust to the window size on refresh
    ctx.fillStyle = start_bg_color;
    ctx.fillRect(0, 0, canvas.width, canvas.height);
}

// change the color of deafualt colors, not implementet
function change_color(element) {

    draw_color = element.style.background;
}


//function for clearing the canvas and filling again
function clear_canvas() {

    ctx.fillStyle = start_bg_color;
    ctx.clearRect(0, 0, canvas.width, canvas.height); //we just use the function clearRect
    ctx.fillRect(0, 0, canvas.width, canvas.height); //we canvas again
}

// function called from the touch and mousedown event listener
function start_draw(event) {

    is_drawing = true; //when we are actially drawing
    ctx.beginPath(); //begins the new path
    ctx.moveTo(event.clientX - canvas.offsetLeft,
        event.clientY - canvas.offsetTop); //
    event.preventDefault();
}

//function for the actual drawing
function draw(event) {

    if (is_drawing) {
        draw_color = document.getElementById("color-picker").value; // get the current color
        draw_width = document.getElementById("draw-width").value; // get the current width
        ctx.lineTo(event.clientX - canvas.offsetLeft,
            event.clientY - canvas.offsetTop);
        ctx.strokeStyle = draw_color; // setting the color of the stroke
        ctx.lineWidth = draw_width; // setting the width of the stroke or pen
        ctx.lineCap = "round"; // apperance of line ends
        ctx.lineJoin = "round";  // apperance of line ends
        ctx.stroke(); // for the actual stroke call
    }
}

// function to stop the drawing on mouseout, touchend.....
function stop(event) {
    if (is_drawing) {
        ctx.stroke();
        ctx.closePath(); // to close the path i.e lift the pen
        is_drawing = false; // set to not drawing
    }
    event.preventDefault()
}

function start() {

    //event listeners for touch/mouuse down and move
    $(canvas).addEventListener("touchstart", start_draw, false); //for the smaller devices
    $(canvas).addEventListener("touchmove", draw, false);
    $(canvas).addEventListener("mousedown", start_draw, false); //for mouse devices
    $(canvas).addEventListener("mousemove", draw, false);
    $(canvas).addEventListener("mousemove", draw, false);

    //event listeners for touch/mouuse up
    $(canvas).addEventListener("touchend", stop, false);
    $(canvas).addEventListener("mouseup", stop, false);
    $(canvas).addEventListener("mouseout", stop, false);

    //clear the canvas
    document.getElementById("clear").addEventListener(
        "click", clear_canvas, false);
}
    $("#clear").click(function () {
        clear_canvas();
    })

// window.addEventListener("load", init, false);

$(init);