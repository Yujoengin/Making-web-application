whiteBtn = document.getElementById('white_btn');
whiteBtn.addEventListener("click", function(){
  document.body.className = "white";
});
blackBtn = document.getElementById('black_btn');
blackBtn.addEventListener("click", function(){
  document.body.className = "black";
});

// <!--Start of Tawk.to Script-->
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/58abc84369c2661545c3c5db/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
// <!--End of Tawk.to Script-->
