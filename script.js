function register() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var mobile = document.getElementById("mobile");
  var uname = document.getElementById("uname");
  var email = document.getElementById("email");
  var password = document.getElementById("pw");

  var f = new FormData();

  f.append("f", fname.value);
  f.append("l", lname.value);
  f.append("m", mobile.value);
  f.append("u", uname.value);
  f.append("e", email.value);
  f.append("p", password.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var t = r.responseText;
      // alert(t);
      if (t == "Success") {
        document.getElementById("msg1").innerHTML =
          "mt-4 Registration Successfully";
        document.getElementById("msgDiv1").className = "d-block";

        fname.value = "";
        lname.value = "";
        mobile.value = "";
        uname.value = "";
        email.value = "";
        password.value = "";
      } else {
        document.getElementById("msg1").innerHTML = t;
        document.getElementById("msg1").className = "mt-4 alert alert-danger";
        document.getElementById("msgDiv1").className = "d-block";
      }
    }
  };

  r.open("POST", "signUpProcess.php", true);
  r.send(f);
}

function signIn() {
  var un = document.getElementById("un");
  var pw = document.getElementById("pw");
  var rm = document.getElementById("rm");

  f = new FormData();

  f.append("u", un.value);
  f.append("p", pw.value);
  f.append("r", rm.checked);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var response = r.responseText;
      if (response == "Success") {
        window.location = "index.php";
      } else {
        document.getElementById("msg2").innerHTML = response;
        document.getElementById("msgDiv2").className = "d-block";
      }
    }
  };

  r.open("POST", "signInProcess.php", true);
  r.send(f);
}

// Admin Sign in
function adminSignIn() {
  var un = document.getElementById("un");
  var pw = document.getElementById("pw");

  var f = new FormData();

  f.append("u", un.value);
  f.append("p", pw.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "Success") {
        window.location = "adminDashboard.php";
        document.getElementById("msgDiv").className = "d-block";
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msg").className = "alert alert-success";

        un.value = '';
        pw.value = '';

      } else {
        document.getElementById("msgDiv").className = "d-block";
        document.getElementById("msg").innerHTML = response;
      }
    }
  };

  request.open("POST", "adminSignInProcess.php", true);
  request.send(f);
}

function loadUser(){
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      document.getElementById("tb").innerHTML = response;
      // alert(response);
    }
  };

  request.open("POST", "loadUserProcess.php", true);
  request.send();
}