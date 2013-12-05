/*

  Pinak Saha && Nancykins Own
  Fall 2013 - Visual Foundation Studio
  Final Project: Mirror Mirror
  12/01/2013

*/




void setup()
{
  size(700,400);
  noLoop();      // turn off animation, since we won't need it
  //stroke(#FFEE88);
  fill(#FFEE88);
  background(#000033);
  text("",0,0);   // force Processing to load a font
  textSize(24);   // set the font size to something big
  //rect(30,30,30,30);
  String lines[] = loadStrings("./user.txt");
  text("Calories left:",15,50);
  text(int(lines[4])-int(lines[3]),150,50);  
  
  float radius =  100 - ((((int(lines[4])-int(lines[3]))/int(lines[4])))*100);
  
  //text(radius,150,75);
  //drawMale();
  //drawFemale();
  
  if(lines[1] == "m")
  {
    drawMale(radius);
  }
  
  else
  {
     drawFemale(radius);
  }
}

void draw()
{
 
}

void drawMale(float radius){
  fill(#3398db); 
  rect(215,185,125,25,7);  //arm1
  rect(375,185,125,25,7);  //arm2
  rect(375,250,25,125,7);  //leg1
  rect(315,250,25,125,7);
  ellipse(355,225,100+radius,140); //tummy 
  ellipse(355,115, 95,95);  //head 
}

void drawFemale(float radius){
  fill(#ff638c); 
  rect(215,185,125,25,7);  //arm1
  rect(375,185,125,25,7);  //arm2
  rect(375,250,25,125,7);  //leg1
  rect(315,250,25,125,7);
  ellipse(355,225,100+radius,140+radius); //tummy 
  ellipse(355,115, 95,95);  //head 
}
