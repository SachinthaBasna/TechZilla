// User Register
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
        document.getElementById("msg1").className = "alert alert-danger";
        document.getElementById("msgDiv1").className = "d-block";
      }
    }
  };

  r.open("POST", "signUpProcess.php", true);
  r.send(f);
}

// User SignIn
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

        un.value = "";
        pw.value = "";
      } else {
        document.getElementById("msgDiv").className = "d-block";
        document.getElementById("msg").innerHTML = response;
      }
    }
  };

  request.open("POST", "adminSignInProcess.php", true);
  request.send(f);
}

// Load User
function loadUser() {
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

// Update User Status
function updateUserStatus() {
  var userId = document.getElementById("uid");
  // alert(userId.value);

  var f = new FormData();
  f.append("u", userId.value);

  request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status) {
      response = request.responseText;

      document.getElementById("msgDiv").className = "d-block";
      document.getElementById("msg").innerHTML = response;

      if (response == "Deactive") {
        document.getElementById("msgDiv").className = "d-block";
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msg").className = "alert alert-success";

        userId.value = "";
        loadUser();
      } else if (response == "Active") {
        document.getElementById("msgDiv").className = "d-block";
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msg").className = "alert alert-success";

        userId.value = "";
        loadUser();
      } else {
        document.getElementById("msgDiv").className = "d-block";
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msg").className = "alert alert-danger";
        loadUser();
      }
    }
  };

  request.open("POST", "updateUserStatusProcess.php", true);
  request.send(f);
}

function reload() {
  location.reload();
}

// brand Register
function brand() {
  var brand = document.getElementById("brand");
  f = new FormData();

  f.append("b", brand.value);

  request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      response = request.responseText;
      // alert(response);
      document.getElementById("msgB").className = "d-block";
      if (response == "Success") {
        document.getElementById("msgB").innerHTML = response;
        document.getElementById("msgB").className =
          "d-block alert alert-success";
      } else {
        document.getElementById("msgB").innerHTML = response;
        document.getElementById("msgB").className =
          "d-block alert alert-danger";
      }
    }
  };
  request.open("POST", "brandRegisterProcess.php", true);
  request.send(f);
}

// Category Register
function catReg() {
  var category = document.getElementById("cat");

  // alert(category.value);

  f = new FormData();

  f.append("c", category.value);

  request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      response = request.responseText;
      // alert(response);
      document.getElementById("msgC").className = "d-block";
      if (response == "Success") {
        document.getElementById("msgC").innerHTML = response;
        document.getElementById("msgC").className =
          "d-block alert alert-success";
      } else {
        document.getElementById("msgC").innerHTML = response;
        document.getElementById("msgC").className =
          "d-block alert alert-danger";
      }
    }
  };

  request.open("POST", "categoryRegisterProcess.php", true);
  request.send(f);
}

// cpu register
function cpuReg() {
  var cpu = document.getElementById("cpu");

  // alert(cpu.value);

  f = new FormData();

  f.append("cpu", cpu.value);

  request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      response = request.responseText;
      // alert(response);
      document.getElementById("msgCPU").className = "d-block";
      if (response == "Success") {
        document.getElementById("msgCPU").innerHTML = response;
        document.getElementById("msgCPU").className =
          "d-block alert alert-success";
      } else {
        document.getElementById("msgCPU").innerHTML = response;
        document.getElementById("msgCPU").className =
          "d-block alert alert-danger";
      }
    }
  };

  request.open("POST", "cpuRegisterProcess.php", true);
  request.send(f);
}

// Ram Register
function ramReg() {
  var ram = document.getElementById("ram");

  // alert(ram.value);

  f = new FormData();

  f.append("ram", ram.value);

  request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      response = request.responseText;
      // alert(response);
      document.getElementById("msgRAM").className = "d-block";
      if (response == "Success") {
        document.getElementById("msgRAM").innerHTML = response;
        document.getElementById("msgRAM").className =
          "d-block alert alert-success";
      } else {
        document.getElementById("msgRAM").innerHTML = response;
        document.getElementById("msgRAM").className =
          "d-block alert alert-danger";
      }
    }
  };

  request.open("POST", "ramRegisterProcess.php", true);
  request.send(f);
}

// capacity Register
function capReg() {
  var cap = document.getElementById("cap");

  // alert(cap.value);

  f = new FormData();

  f.append("cap", cap.value);

  request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      response = request.responseText;
      // alert(response);
      document.getElementById("msgCap").className = "d-block";
      if (response == "Success") {
        document.getElementById("msgCap").innerHTML = response;
        document.getElementById("msgCap").className =
          "d-block alert alert-success";
      } else {
        document.getElementById("msgCap").innerHTML = response;
        document.getElementById("msgCap").className =
          "d-block alert alert-danger";
      }
    }
  };

  request.open("POST", "capacityRegisterProcess.php", true);
  request.send(f);
}

// Stock Management
function regProduct() {
  var pname = document.getElementById("pname");
  var brand = document.getElementById("brand");
  var cat = document.getElementById("cat");
  var cpu = document.getElementById("cpu");
  var ram = document.getElementById("ram");
  var capacity = document.getElementById("capacity");
  var desc = document.getElementById("desc");
  var file = document.getElementById("file");

  var f = new FormData();

  f.append("pname", pname.value);
  f.append("brand", brand.value);
  f.append("cat", cat.value);
  f.append("cpu", cpu.value);
  f.append("ram", ram.value);
  f.append("capacity", capacity.value);
  f.append("desc", desc.value);

  f.append("image", file.files[0]);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      alert(response);
      location.reload();
    }
  };

  request.open("POST", "productRegisterProcess.php", true);
  request.send(f);
  // alert("OK");
}

// Update Stock
function updateStock() {
  // alert("OK");
  var pname = document.getElementById("selectProduct");
  var qty = document.getElementById("qty");
  var price = document.getElementById("uprice");

  var f = new FormData();
  f.append("p", pname.value);
  f.append("q", qty.value);
  f.append("up", price.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var response = r.responseText;
      alert(response);
      location.reload();
    }
  };

  r.open("POST", "updateStockProcess.php", true);
  r.send(f);
}

function printStock() {
  document.getElementById("print").className =
    "table table-responsive table-bordered table-white d-print-block text-center d-print-table";
  window.print();

  document.getElementById("print").className =
    "table table-responsive table-bordered table-dark d-print-block text-center d-print-table";
}

// --------------------------------------------- Front End -------------------------------------------

// LoadProduct
function loadproduct(x) {
  var page = x;
  // alert(x);

  var f = new FormData();
  f.append("p", page);

  // alert("ok");
  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      // alert("ok");
      var response = r.responseText;
      document.getElementById("productDetails").innerHTML = response;
    }
  };

  r.open("POST", "loadProductProcess.php", true);
  r.send(f);
}

// Search Product
function searchProduct() {
  var search = document.getElementById("searchBar");

  var f = new FormData();
  f.append("search", search.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      // alert("ok");
      var response = r.responseText;
      document.getElementById("productDetails").innerHTML = response;
      // alert(response);
    }
  };

  r.open("POST", "searchProductProcess.php", true);
  r.send(f);
}

// Filter Category
function catFilter() {
  var filter = document.getElementById("filter");

  var f = new FormData();
  f.append("filter", filter.value);

  // alert(filter.value)

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      // alert("ok");
      var response = r.responseText;
      document.getElementById("productDetails").innerHTML = response;
      // alert(response);
    }
  };

  r.open("POST", "categoryFilterProcess.php", true);
  r.send(f);
}

function reloadPage() {
  window.reload();
}

// Logout user
function logoutUser() {
  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      // alert("ok");
      var response = r.responseText;
      // document.getElementById("productDetails").innerHTML = response;
      alert("Logout Successfull");
      window.reload();
      // alert(response);
    }
  };

  r.open("POST", "userLogoutProcess.php", true);
  r.send();
}

// Update User Details
function updateUserDetails() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var mobile = document.getElementById("mobile");
  var email = document.getElementById("email");
  var line1 = document.getElementById("line1");
  var line2 = document.getElementById("line2");
  var pw = document.getElementById("password");
  var no = document.getElementById("no");
  var img = document.getElementById("file");

  var f = new FormData();

  f.append("fname", fname.value);
  f.append("lname", lname.value);
  f.append("mobile", mobile.value);
  f.append("email", email.value);
  f.append("line1", line1.value);
  f.append("line2", line2.value);
  f.append("pw", pw.value);
  f.append("no", no.value);

  f.append("img", img.files[0]);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var respo = r.responseText;
      alert(respo);
      window.reload();
    }
  };

  r.open("POST", "updateUserDetailsProcess.php", true);
  r.send(f);
}

// Single Product View
function singleProductview(stockId) {
  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      window.location =
        "singleProductview.php?stockId=" + encodeURIComponent(stockId);
    }
  };

  r.open(
    "GET",
    "singleProductview.php?stockId=" + encodeURIComponent(stockId),
    true
  );
  r.send();
}

// Add to Cart
function addtoCart(x) {
  // alert(x);
  var qty = document.getElementById("qty");
  var stockId = x;

  // check if qty is empty
  if (qty.value != "") {
    var f = new FormData();

    f.append("s", stockId);
    f.append("q", qty.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
      if (r.readyState == 4 && r.status == 200) {
        var response = r.responseText;
        alert(response);
        qty.value = "";
      }
    };

    r.open("POST", "addCatProcess.php", true);
    r.send(f);
  } else {
    alert("please enter your quentity");
  }
}

// Load Cart
function loadCart() {
  // alert("ok");
  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      document.getElementById("cartBody").innerHTML = response;
    }
  };

  request.open("POST", "loadCartProcess.php", true);
  request.send();
}

// Qty Increment
function incrementCartQty(x) {
  var cartId = x;
  var qty = document.getElementById("qty" + x);
  var newQty = parseInt(qty.value) + 1;

  var f = new FormData();
  f.append("c", cartId);
  f.append("q", newQty);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "Success") {
        qty.value = parseInt(qty.value) + 1;
        loadCart();
      } else {
        alert(response);
      }
    }
  };

  request.open("POST", "updateCartQtyProcess.php", true);
  request.send(f);
}

// Qty Decrement
function decrementCartQty(x) {
  var cartId = x;
  var qty = document.getElementById("qty" + x);
  var newQty = parseInt(qty.value) - 1;

  var f = new FormData();
  f.append("c", cartId);
  f.append("q", newQty);

  if (newQty > 0) {
    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var response = request.responseText;
        if (response == "Success") {
          qty.value = parseInt(qty.value) - 1;
          loadCart();
        } else {
          alert(response);
        }
      }
    };
    request.open("POST", "updateCartQtyProcess.php", true);
    request.send(f);
  }
}

// remove item from cart
function removeCart(x) {
  if (confirm("Are You Sure deleting this item?")) {
    var f = new FormData();
    f.append("c", x);

    request = new XMLHttpRequest();

    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var response = request.responseText;
        alert(response);
        window.reload();
      }
    };
    request.open("POST", "removeCartProcess.php", true);
    request.send(f);
  }
}

// Payment Checkout
function checkOut() {
  // alert("ok");
  var f = new FormData();

  // Check If request reserved from cart
  f.append("cart", true);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      // alert(response);

      var payment = JSON.parse(response);
      doCheckout(payment, "checkoutProcess.php");
    }
  };

  request.open("POST", "paymentProcess.php", true);
  request.send(f);
}

function doCheckout(payment, path) {
  // Payment completed. It can be a successful failure.
  payhere.onCompleted = function onCompleted(orderId) {
    console.log("Payment completed. OrderID:" + orderId);
    // Note: validate the payment and show success or failure page to the customer

    var f = new FormData();
    f.append("payment", JSON.stringify(payment));

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var response = request.responseText;
        // alert(response);
        var order = JSON.parse(response);

        if (response == "Success") {
          window.location = "invoice.php";
        } else {
          alert(response);
        }
      }
    };

    request.open("POST", path, true);
    request.send(f);
  };

  // Payment window closed
  payhere.onDismissed = function onDismissed() {
    // Note: Prompt user to pay again or show an error page
    console.log("Payment dismissed");
  };

  // Error occurred
  payhere.onError = function onError(error) {
    // Note: show an error page
    console.log("Error:" + error);
  };

  // Show the payhere.js popup, when "PayHere Pay" is clicked
  // document.getElementById("payhere-payment").onclick = function (e) {
  payhere.startPayment(payment);
  // };
}

function forgetPassword() {
  // alert("OK");
  var email = document.getElementById("e");

  if (email.value != "") {
    // alert("ok");

    var f = new FormData();
    f.append("e", email.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var response = request.responseText;
        // alert(response);

        if (response == "success") {
          document.getElementById("msg").innerHTML =
            "Email send! Please check your mail box";
          document.getElementById("msg").className = "alert alert-success";
          document.getElementById("msgDiv").className = "d-block";
        } else {
          document.getElementById("msg").innerHTML = response;
          document.getElementById("msg").className = "alert alert-danger";
          document.getElementById("msgDiv").className = "d-block";
        }
      }
    };

    request.open("POST", "forgetPasswordProcess.php", true);
    request.send(f);
  } else {
    alert("Please enter your valid Email");
  }
}

function resetPassword() {
  // alert("ok");

  var vcode = document.getElementById("vcode");
  var np = document.getElementById("np");
  var np2 = document.getElementById("np2");

  var f = new FormData();

  f.append("vcode", vcode.value);
  f.append("np", np.value);
  f.append("np2", np2.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      // alert(response);
      if (response == "Success") {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msg").className = "alert alert-success";
        document.getElementById("msgDiv").className = "d-block";

        window.location = "SignIn.php";
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msg").className = "alert alert-danger";
        document.getElementById("msgDiv").className = "d-block";
        window.reload();
      }
    }
  };

  request.open("POST", "resetPasswordProcess.php");
  request.send(f);
}
