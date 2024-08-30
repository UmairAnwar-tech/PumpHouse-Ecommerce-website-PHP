
function login()
{
 
  window.location.href = "./login.php";


}
function logout()
{
  window.location.href = "./logout.php";
}
function logo()
{
window.open('./Home.php','_blank');
}
function home()
{
    window.open("./Home.php",'_blank');
    

}function about()
{
    window.open("./aboutus.php",'_blank');
    
}

function prod()
{
  window.location.href = "./inde.php";
    
}
function contact()
{
    window.open("./contactus1.php",'_blank');
    
}

function myFunction() {
    var x = document.getElementById("mybar");
    if (x.className === "bar") {
      x.className += "responsive";
    } else {
      x.className = "bar";
    }
  }
  
  let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
function validate() {

    var regna = /[a-z]|[A-Z]{4,12}/;
    var regem = /[A-Z a-z 0-9 _ \-\.]+[@][a-z]+[\.][a-z]{2,3}/;
    var regph = /\+[89][0-9]{9}/;
    var n = document.getElementById("name").value;
    var e = document.getElementById("email").value;
    var p = document.getElementById("phone").value;
    var ern = document.getElementById("errname");
    var ere = document.getElementById("erremail");
    var erp = document.getElementById("errphone");
    if (regna.test(n) && regem.test(e) && regph.test(p)) {
      return true;

    }
    if (!regna.test(n)) {
      ern.style.display = "block";
      ern.innerHTML = "please enter name";
      return false;

    } if (!regem.test(e)) {
      ere.style.display = "block";
      ere.innerHTML = "incorrect email";
      return false;

    }
    if (!regph.test(p)) {
      erp.style.display = "block";
      erp.innerHTML = "incorrect phone Number";
      return false;


    }
  }
  function validate2() {

    var ern = document.getElementById("erremail");
    var ere = document.getElementById("errphone");
    var e = document.getElementById("email").value;
    var p = document.getElementById("password").value;
  
  
    if (e=="") {
      ern.style.display = "block";
      ern.innerHTML = "please enter email";
      return false;

    } if (p=="") {
      ere.style.display = "block";
      ere.innerHTML = "please enter password";
      return false;

    }
    
  }