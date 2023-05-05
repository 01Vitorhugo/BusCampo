window.addEventListener("scroll", function() {
    var elemento = document.getElementById("seta");
    var posicao = window.scrollY;
    if (posicao > 350) {
      elemento.style.display = "block";
    } else {
      elemento.style.display = "none";
    }
  });


window.sr = ScrollReveal({ reset: true });

sr.reveal('.quadra', { 
    delay: 200,
    duration: 1000,
    reset: true,
    scale:  
    0.5,
});

sr.reveal('.campo', { 
    delay: 200,
    duration: 1000,
    reset: true,
    scale:  
    0.5,
});

sr.reveal('.volei', { 
    delay: 200,
    duration: 1000,
    reset: true,
    scale:  
    0.5,
});

sr.reveal('.basquete', { 
    delay: 200,
    duration: 1000,
    reset: true,
    scale:  
    0.5,
});

sr.reveal('.poliesportiva', { 
    delay: 200,
    duration: 1000,
    reset: true,
    scale:  
    0.5,
});