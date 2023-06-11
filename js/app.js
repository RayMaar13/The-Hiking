const inputElements = document.querySelectorAll(".input-form")
const labelElement = document.querySelectorAll("label")
console.log(inputElements);

inputElements.forEach(function(inputElement) {
  var inputValue = inputElement.value;
  
  if (inputValue !== "") {
    labelElement.classList.add("valid");
  }
});


function reveal() {
  var reveals = document.querySelectorAll(".animate-on-scroll");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 100;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("animate");
    }
  }
}


window.addEventListener("scroll", reveal);


reveal();