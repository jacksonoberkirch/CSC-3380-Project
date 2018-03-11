

var myFont;
var comp;
var cs;
var state = 1;

function setup() {
	 
	
	createCanvas(640,480);
	
	
     myFont = loadFont('BauhausStd-Heavy.otf');
	 
	 comp = loadImage("comp2.png");
	  cs = loadImage("cs.jpg");
	   imageMode(CENTER);
	
}

function mousePressed() {
	if (state == 1) {
	state = 2;
	}
	if (state == 3){
	if (collide(250,150) == true)
	{
		state =4;
		
	}
	}
		
	
	
		
}
function mouseReleased() {
	
	
		
	
	
	
	
	
}

function draw(){
	 
	 if (state ==1){
	 
	 background(255,255,255);
	  fill(0,0,255);
	 textFont(myFont);
	textSize(50);
	
	text('Gameframe', 150, 240);
	
	fill(0,0,0);
	textSize(25);
	text('-click anywhere to enter-',150,290);
	
	
	translate(mouseX,mouseY);
	image(comp,0, 0, 100,100);
	
	                 }
					 
	 if (state ==2 ) {

	  background(255,255,255);
        fill(0,0,0);
	    textSize(25);
	    text('UserName:  ',30,30);
	    text('Password:  ',30,100);
		
            text('Press Enter To Continue',150,150);
			
		






	 }	

    if (state ==3)

	{

      background(255,255,255);

    text('GameList:   ',50,50);
	image(cs, 250, 150, 100,100);
	text('Counter Stike :  ',10,150);



	}	
	
	if (state == 4)
		
	
	{
		
		background(255,255,255);
		
		text('-Launch CS GO-   ',50,50);
		
		
	}
					 
					 
					 
					 
					 
	
	
	
}

function keyPressed(){
	
	if (State = 2)  {
	if (keyCode == 13)
		
		{
			state= 3;
			
		}
	}
}

function collide(x,y) {
	
	
	if (mouseX >= x &&         
    mouseX <= x + 20 &&    
    mouseY >= y &&         
    mouseY <= y + 20) {  

        return true;
	
	
}
}


