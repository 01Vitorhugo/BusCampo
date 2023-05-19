window.addEventListener("scroll", function() {
    var elemento = document.getElementById("seta");
    var posicao = window.scrollY;
    if (posicao > 350) {
      elemento.style.display = "block";
    } else {
      elemento.style.display = "none";
    }
  });
