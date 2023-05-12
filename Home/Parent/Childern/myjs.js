var items = document.querySelectorAll(".slideshow-item");
var index = 0;

function slide() {
  items[index].classList.remove("active");
  index = (index + 1) % items.length;
  items[index].classList.add("active");
  setTimeout(slide, 10000); // Change image every 10 seconds
}

items[0].classList.add("active");
setTimeout(slide, 10000);