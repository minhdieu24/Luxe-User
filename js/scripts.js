// Click "-"
function Decrease(){
  var count = parseInt(document.getElementById("count").innerHTML);
  if (count > 0) {
    count--;
    document.getElementById("count").innerHTML = count;
  }
}
//Click "+"
function Increase(){
  var count = parseInt(document.getElementById("count").innerHTML);
  count++;
  document.getElementById("count").innerHTML = count;
}

function darkFunction() {
  const element = document.body;
  element.classList.toggle("dark-mode");
  }

