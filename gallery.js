/*
var famp = document.getElementById("famp");
var mov = document.getElementById("mov");
famp.style.display = "none";
var movie_button = document.getElementById("movb11");
var fav_button = document.getElementById("fampb11");
movie_button.addEventListener("click",function(){
 	famp.style.display = "none";
	mov.style.display = "block";
});
fav_button.addEventListener("click",function(){
	famp.style.display = "block";
	mov.style.display = "none";
});
*/
zodcal_hide.addEventListener("click",function(){

});

function ClearForm(form){

    form.weight.value = "";
    form.height.value = "";
    form.bmi.value = "";
    form.my_comment.value = "";

}

function bmi(weight, height) {

          bmindx=weight/eval(height*height);
          return bmindx;
}

function checkform(form) {

       if (form.weight.value==null||form.weight.value.length==0 || form.height.value==null||form.height.value.length==0){
            alert("\nPlease complete the form first");
            return false;
       }

       else if (parseFloat(form.height.value) <= 0||
                parseFloat(form.height.value) >=500||
                parseFloat(form.weight.value) <= 0||
                parseFloat(form.weight.value) >=500){
                alert("\nReally know what you're doing? \nPlease enter values again. \nWeight in kilos and \nheight in cm");
                ClearForm(form);
                return false;
       }
       return true;

}

function computeform(form) {

       if (checkform(form)) {

       yourbmi=Math.round(bmi(form.weight.value, form.height.value/100));
       form.bmi.value=yourbmi;

       if (yourbmi >40) {
          form.my_comment.value="You are grossly obese, consult your physician!";
       }

       else if (yourbmi >30 && yourbmi <=40) {
          form.my_comment.value="Umm... You are obese, want some liposuction?";
       }

       else if (yourbmi >27 && yourbmi <=30) {
          form.my_comment.value="You are very fat, do something before it's too late";
       }

       else if (yourbmi >22 && yourbmi <=27) {
          form.my_comment.value="You are fat, You need to exercise";
       }

       else if (yourbmi >=21 && yourbmi <=22) {
          form.my_comment.value="You are amazing. Keep it up!!";
       }

       else if (yourbmi >=18 && yourbmi <21) {
          form.my_comment.value="You are way too thin, eat more.";
       }

       else if (yourbmi >=16 && yourbmi <18) {
          form.my_comment.value="You are dying of hunger. Go Find some food!";
       }

       else if (yourbmi <16) {
          form.my_comment.value="You are highly malnourished, need immediate hospitalization ";
       }

       }
       return;
}


var calbmi = document.getElementById("calbmi");
calbmi.style.display = "none";

var calbmi_button = document.getElementById("calbmi_button");

calbmi_button.addEventListener("click",function(){
	calbmi.style.display = "block";
});



var rand_button = document.getElementById("ranb11");

rand_button.addEventListener("click",function(){
	for(var i = 0;i<5;i++)
	{
		var a = 'd' + Math.floor(Math.random()*9 + 1);
		var b = 'd' + Math.floor(Math.random()*9 + 1);
		var a1 = document.getElementById(a);
		var b1 = document.getElementById(b);
		var x1 = a1.innerHTML;
		var y1 = b1.innerHTML;
		a1.innerHTML = y1;
		b1.innerHTML = x1;
		var c = 'd' + Math.floor(Math.random()*15 + 10);
		var d = 'd' + Math.floor(Math.random()*15 + 10);
		var c1 = document.getElementById(c);
		var d1 = document.getElementById(d);
		var x2 = c1.innerHTML;
		var y2 = d1.innerHTML;
		c1.innerHTML = y2;
		d1.innerHTML = x2;
	}
});



function zodiac(){
  var birthmonth = document.getElementById("month").value;
   var birthday = document.getElementById("day").value;
 var result = " Unknown because you didn't put a valid date.";


if (birthmonth == 1&& birthday >= 20 || birthmonth == 2 && birthday <= 18
    ){
        result = ("Aquarius");

    }

    if (birthmonth == 2&& birthday >= 19 || birthmonth == 3&& birthday <= 20){
       result = ("Pisces");

    }
   if (birthmonth == 3&& birthday >= 21 || birthmonth == 4 && birthday <= 19){
       result = ("Aries");
   }

    if (birthmonth == 4&& birthday >= 20|| birthmonth == 5 && birthday <= 20){
        result = ("Taurus");

    }

    if (birthmonth == 5&& birthday >= 21 || birthmonth == 6 && birthday <= 20
     ){
        result = ("Gemini");

    }

    if (birthmonth == 6&& birthday >= 21 || birthmonth == 7&& birthday <= 22){
        result = ("Cancer");

    }
    if (birthmonth == 7&& birthday >= 23 || birthmonth == 8 && birthday <= 22){
        result = ("Leo");

    }
    if (birthmonth == 8 && birthday >= 23 || birthmonth == 9 && birthday <= 22){
        result = ("Virgo");
    }
    if (birthmonth == 9&& birthday >= 23 || birthmonth == 10&& birthday <= 22){
      result = ("Libra");
    }
    if (birthmonth == 10 && birthday >= 23|| birthmonth == 11 && birthday <= 21){
       result = ("Scorpio");
    }
    if (birthmonth == 11 && birthday >= 22 || birthmonth == 12 && birthday <= 21){
        result = ("Sagittarius");
    }

  if(birthmonth == 12 && birthday >= 22 || birthmonth == 1 && birthday <= 19){

        result = ("Capricorn");
    }else if (birthmonth>12||birthday>31){
       alert("Please enter an accurate date ! ");
    }
 document.getElementById("output").innerHTML= result;
}
