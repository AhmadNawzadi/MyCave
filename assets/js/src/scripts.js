$(document).ready(function(){
// JQUERY FOR LOGIN PAGE
$('.loginBox').hide();
$(".connectButton").on("click", function(){
  $(".loginBox").toggle();
});

// INCREMETN AND DECREMENT
var counter = 1;
   
$("#add").click(function(){
counter++;

$("#addOne").text(counter);
});

$("#subtract").click(function(){
counter--;

$("#addOne").text(counter);
});

});

// DATA DELETION
function deleteData(del){
  if(confirm("Do you want to delet this data?")){
      window.location.href='php/delete.php?id_url=' + del;
      return true;
  }
}

// MENU HIDDEN
function show_hide1() {
   var click = document.getElementById("drop-content1");
   if(click.style.display === "none") {
      click.style.display = "block";
   }
   else {
      click.style.display = "none";
   }
}

function show_hide2() {
   var click = document.getElementById("drop-content2");
   if(click.style.display === "none") {
      click.style.display = "block";
   }
   else {
      click.style.display = "none";
   }
}

function show_hide3() {
   var click = document.getElementById("drop-content3");
   if(click.style.display === "none") {
      click.style.display = "block";
   }
   else {
      click.style.display = "none";
   }
}

function show_hide4() {
   var click = document.getElementById("drop-content4");
   if(click.style.display === "none") {
      click.style.display = "block";
   }
   else {
      click.style.display = "none";
   }
}




