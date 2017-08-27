var directive = document.getElementById("hatedirective");
var figures = [
  "Muslims",
  "Vietcong",
  "Asians",
  "Commies",
  "Socialists",
  "Atheists",
  "Scientists",
  "Bankers",
  "Druggies",
  "Royals",
  "Republicans",
  "Chinese",
  "Japs",
  "Brussels",
  "Europeans",
  "Technology",
  "The Future",
  "The Past",
  "Phones",
  "Electricity",
  "Liberals",
  "Conservatives",
  "Nazis",
  "Bolsheviks",
  "The News",
  "Mainstream Media"]
  var figure;
setInterval(function(){
  figure = figures[Math.floor(Math.random() * figures.length)];
  directive.innerHTML = "At the moment, you hate " + figure;
},
3000);
