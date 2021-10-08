/*
* implementation of canvas in our project.
* Functions called more than once are generally only commented the first time.
* We have used jquery to select and set the values,
* of different elements in this drawing application.
* We have used the window width to fit different window widths
* Since jquery events are handled differently from javascript,
* we have used jquery bindings to handel events.
*
* */

//global variables
let start_bg_color = "white";
let draw_color; // start color for stroke or pen
let draw_width = "2"; // pen width
let is_drawing = false; // To determine if we we are currenlty drawing

let canvas;
let ctx; //context

//initial function called from the window load event
function init() {
    //get the ctx of canvas
    canvas = $("#canvas").get(0); //Jquery returns a wrapped object, therefore index
    ctx = canvas.getContext("2d");

    //set value of the color-picker to a specific color
    draw_color = $('[type="color"]').val("#49E4E1");

    //draw the canvas board
    drawCanvas();

    //call the addEventListeners
    start();
}

//draw the canvas
function drawCanvas(element) {

    canvas.width = $( window ).width() - 100; //return the window width using jquery selector
    canvas.height = $( window ).height() - 220; // //return the window height and adjust to the window size on refresh
    ctx.fillStyle = start_bg_color; //assign the start color of colorpicker to the pen color
    ctx.fillRect(0, 0, canvas.width, canvas.height); // filling the canvas
}


//function for clearing the canvas and filling again
function clear_canvas() {

    ctx.fillStyle = start_bg_color;
    ctx.clearRect(0, 0, canvas.width, canvas.height); //we just use the function clearRect
    ctx.fillRect(0, 0, canvas.width, canvas.height); //we canvas again
}

// function called from the touch and mousedown event listener
function start_draw(e) {

    is_drawing = true; //when we are actually drawing
    ctx.beginPath(); //begins the new path
    ctx.moveTo(e.pageX - canvas.offsetLeft, //using the
        e.pageY - canvas.offsetTop); //
    // e.preventDefault();
}

//function for the actual drawing
function draw(e) {

    if (is_drawing) {
        draw_color = $("#color-picker").val(); // get the current stroke color
        draw_width = $("#draw-width").val(); // get the current stroke width

        ctx.lineTo(e.pageX - canvas.offsetLeft,
                    e.pageY - canvas.offsetTop);

        ctx.strokeStyle = draw_color; // setting the color of the stroke
        ctx.lineWidth = draw_width; // setting the width of the stroke or pen
        ctx.lineCap = "round"; // apperance of line ends
        ctx.lineJoin = "round";  // apperance of line ends
        ctx.stroke(); // for the actual stroke call
    }
}

// function to stop the drawing on mouseout
function stop(e) {
    if (is_drawing) {
        ctx.stroke();
        ctx.closePath(); // to close the path i.e lift the pen
        is_drawing = false; // set to not drawing
    }
}

/*
* function start
*jquery event listeners for mouse down and move
* We use bind because event handling is handeled differently in jquery
*/
function start() {

    // mousedown event
    $("#canvas").bind("mousedown",function(){
        start_draw();
    });

    //select canvas and on mousemove call draw function.
    $("#canvas").mousemove(draw);

    // mouseUp event
    $("#canvas").bind("mouseup", function() {
        stop();
    });

    //clear the canvas event
    $("#clear").click(function () {
        clear_canvas();
    });
}

// this is the jquery equivalant of the javascript "load"
$(init);