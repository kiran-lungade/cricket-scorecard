<!DOCTYPE html>
<html>
<style>
.filterDiv {
  float: center;
  background-color: #54be79;
  color: hsl(252, 90%, 15%);
  width: 80px;
  line-height: 30px;
  font-size: 1.5ch;
  text-align: center;
  margin: 2px;
  display: none;
}

h1{
    color: Yellow;
    font-family: edwardian;
    font-size: 50px;
}

body{
  height: 115vh;
  padding: 20px;
    font-family: sans-serif;
    
    background-image:url("images/img8.jpg");
   background-repeat: no-repeat;

}
.show {
  display: block;
}

.container {
  margin-top: 30px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  border-radius: 12px;
  outline: none;
  padding: 12px 16px;
  background-color: pink;
  color: rgb(8, 7, 7);
  cursor: pointer;
}

.btn:hover {
  background-color: rgb(180, 12, 236);
}

.btn.active {
  background-color: #cfcf12;
  color: rgb(6, 6, 6);
}

input{
    text-align: center;
    text-transform: capitalize;
    border: 1px solid rgb(3, 3, 3);
    border-radius: 12px;
    padding: 5px;
    height: 40px;
    width: 95px;
    font-weight: bolder;
    font-size: 12px;
   font-family: Georgia, 'Times New Roman', Times, serif;
   background-color: rgb(235, 235, 187);
}
input:hover{
    background-color: rgb(43, 220, 117);
    color:red;
    transform: scale(1.35);
    transition: transform 200ms ease-in;
  
  }
  

</style>
<body>

<h1><center>Upcoming Matches</center></h1>

<div id="myBtnContainer">
 <br> <button class="btn active" onclick="filterSelection('all')"> All Upcoming Matches</button></br></br>
 <button class="btn" onclick="filterSelection('ind')"> India</button>
 <button class="btn" onclick="filterSelection('aus')"> Australia</button>
 <button class="btn" onclick="filterSelection('nz')"> New Zealand</button>
 <button class="btn" onclick="filterSelection('eng')"> England</button>
 <button class="btn" onclick="filterSelection('sl')"> Sri Lanka</button>
 <button class="btn" onclick="filterSelection('pak')"> Pakistan</button>
 <button class="btn" onclick="filterSelection('sa')"> South Africa</button>
</div>

<div class="container">
  <a href="schedule.html"class="filterDiv ind aus"><input type = "button" id ="btn" value  = "Ind Vs Aus" /></a>
  <a href="schedule.html"class="filterDiv eng aus"><input type = "button" id ="btn" value  = "Aus Vs Eng" /></a>
  <a href="schedule.html"class="filterDiv ind nz"><input type = "button" id ="btn" value  = "Ind Vs NZ" /></a>
  <a href="schedule.html"class="filterDiv ind pak"><input type = "button" id ="btn" value  = "Pak Vs Ind" /></a>
  <a href="schedule.html"class="filterDiv nz eng"><input type = "button" id ="btn" value  = "NZ Vs Eng" /></a>
  <a href="schedule.html"class="filterDiv ind eng"><input type = "button" id ="btn" value  = "Eng Vs Ind" /></a>
  <a href="schedule.html"class="filterDiv eng aus"><input type = "button" id ="btn" value  = "Eng Vs Aus" /></a>
  <a href="schedule.html"class="filterDiv pak eng"><input type = "button" id ="btn" value  = "Pak Vs Eng" /></a>
  <a href="schedule.html"class="filterDiv ind sl"><input type = "button" id ="btn" value  = "Ind Vs SL" /></a>
  <a href="schedule.html"class="filterDiv nz aus"><input type = "button" id ="btn" value  = "NZ Vs Aus" /></a>
  <a href="schedule.html"class="filterDiv sl sa"><input type = "button" id ="btn" value  = "SL Vs Sa" /></a>

</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
