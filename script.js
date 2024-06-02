function halamanLogin() {
  window.location.href = "login.php"
}


function login() {
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  fetch('process_login.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ email: email, password: password })
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      alert(data.message);
      window.location.href = "indexSession.php";
      // Redirect ke halaman lain jika login berhasil
    } else {
      alert(data.message);
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });
}
function logout() {
  window.location.href="index.php"  
}

function halamanRegistrasi() {
  // Logic untuk membuka halaman registrasi
}


/*logo HANZ action*/

document.addEventListener("DOMContentLoaded", function () {
  const image = document.getElementById("logo");

  image.addEventListener("click", function () {
    window.location.href = "index.php";
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const image = document.getElementById("logoSession");

  image.addEventListener("click", function () {
    window.location.href = "indexSession.php";
  });
});

/*mlbb action */
document.addEventListener("DOMContentLoaded", function () {
  const image = document.getElementById("mlbb");

  image.addEventListener("click", function () {
    window.location.href = "mlbb.php";
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const image = document.getElementById("mlbbSession");

  image.addEventListener("click", function () {
    window.location.href = "mlbbSession.php";
  });
});

/*ff action */
document.addEventListener("DOMContentLoaded", function () {
  const image = document.getElementById("ff");

  image.addEventListener("click", function () {
    window.location.href = "ff.php";
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const image = document.getElementById("ffSession");

  image.addEventListener("click", function () {
    window.location.href = "ffSession.php";
  });
});

/* pubg session */

document.addEventListener("DOMContentLoaded", function () {
  const image = document.getElementById("pubg");

  image.addEventListener("click", function () {
    window.location.href = "pubg.php";
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const image = document.getElementById("pubgSession");

  image.addEventListener("click", function () {
    window.location.href = "pubgSession.php";
  });
});


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

/* Toggle sidebar */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

// notifikasi

document.addEventListener('DOMContentLoaded', () => {
  const notifyButton = document.getElementById('notifyButton');
  const popup = document.getElementById('popup');
  const overlay = document.getElementById('overlay');
  const closeButton = document.getElementById('closeButton');
  
  notifyButton.addEventListener('click', () => {
      document.getElementById('userIdSpan').innerText = document.getElementById('user-id').value;
      document.getElementById('zoneIdSpan').innerText = document.getElementById('zone-id').value;
      document.getElementById('usernameSpan').innerText = document.getElementById('user-name').value;
      document.getElementById('itemnameSpan').innerText = selectedItem.name;
      document.getElementById('priceSpan').innerText = `Rp. ${selectedItem.price}`;
      document.getElementById('paymentMethodSpan').innerText = selectedPaymentMethod;

      popup.style.display = 'block';
      overlay.style.display = 'block';
  });

  closeButton.addEventListener('click', () => {
      popup.style.display = 'none';
      overlay.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
      if (event.target == overlay) {
          popup.style.display = 'none';
          overlay.style.display = 'none';
      }
  });
});

let selectedItem = {};
let selectedPaymentMethod = '';

function selectItem(name, price) {
    selectedItem = { name, price };
    document.getElementById('hidden-item-name').value = name;
    document.getElementById('hidden-price').value = price;
}

function selectCheckout(method) {
    selectedPaymentMethod = method;
    document.getElementById('hidden-payment-method').value = method;
}

function confirmOrder() {
  document.getElementById('confirm').submit();
}

// registrasi

document.querySelector('form').addEventListener('submit', function(event) {
  const user = document.getElementById('username').value;
  const email = document.getElementById('email').value;
  const emailConfirm = document.getElementById('email_confirm').value;
  const password = document.getElementById('password').value;
  const passwordConfirm = document.getElementById('password_confirm').value;
  
  if (email !== emailConfirm) {
    alert('Email and confirmation email do not match!');
    event.preventDefault();
  }

  if (password !== passwordConfirm) {
    alert('Password and confirmation password do not match!');
    event.preventDefault();
  }
});






