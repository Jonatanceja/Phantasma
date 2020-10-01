function openNav(e) {
    if (x.matches) { // If media query matches
      document.getElementById("myNav").style.width = "100%";
    } else {
      document.getElementById("myNav").style.width = "40%";
    }
    }
  
  var x = window.matchMedia("(max-width: 768px)")
  x.addListener(openNav) // Attach listener function on state changes
    
    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }

    