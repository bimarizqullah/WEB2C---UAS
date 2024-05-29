function halamanLogin() {
  window.location.href = "login.php";
}

document.addEventListener('DOMContentLoaded', function() {
  const image = document.getElementById('mlbb');

  image.addEventListener('click', function() {
      window.location.href = 'mlbb.php';  
  });
});

document.addEventListener('DOMContentLoaded', function() {
  const image = document.getElementById('ff');

  image.addEventListener('click', function() {
      window.location.href = 'ff.php';  
  });
});

document.addEventListener('DOMContentLoaded', function() {
  const image = document.getElementById('pubg');

  image.addEventListener('click', function() {
      window.location.href = 'pubg.php';  
  });
});


function login() {
  const email = document.getElementById("email").value;

  const password = document.getElementById("password").value;

  if ((email == "admin@gmail.com") & (password == "admin")) {
    alert("Login Berhasil!");
    window.location.href = "index.php";
  } else {
    alert("Login Gagal!");
  }
}

let slideIndex = 0;
showSlides();

function showSlides() {
  let slides = document.getElementsByClassName("slides");
  let dots = document.getElementsByClassName("dot");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}
