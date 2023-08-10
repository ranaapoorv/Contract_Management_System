
let signup = document.querySelector(".signup");
let login = document.querySelector(".login");
let slider = document.querySelector(".slider");
let formSection = document.querySelector(".form-section");
 
signup.addEventListener("click", () => {
    slider.classList.add("moveslider");
    formSection.classList.add("form-section-move");
});
 
login.addEventListener("click", () => {
    slider.classList.remove("moveslider");
    formSection.classList.remove("form-section-move");
    
});



document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
  
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    if (username.trim() === '') {
        alert('Please enter a username');
        return;
      }
    
      if (password.trim() === '') {
        alert('Please enter a password');
        return;
      }
    
      // Perform validation or call an API to authenticate user credentials
      // For the sake of simplicity, we'll use a hardcoded username and password
    
      if (username === 'admin@gmail.com' && password === 'password') {
        window.location.href = 'login2.html'; // Redirect to the next page
      } else {
        alert('Invalid username or password');
      }
    });

    
    