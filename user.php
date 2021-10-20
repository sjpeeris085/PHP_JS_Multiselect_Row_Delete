<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

<style>


.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

.sidenav a:hover, .dropdown-btn:hover {
  color: green;
}

.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.active {
  background-color: green;
  color: white;
}

</style>

</head>
<body>

<div class="sidenav">
  <a href="user.php">Dashboard</a>

  <button class="dropdown-btn">Galle
    <i class="fa fa-caret-down"></i>
  </button>
    <div class="dropdown-container">
      <a href="ugk.php">කෘෂිකාර්මික අංශය වැඩි දියුණු කිරීම</a>
      <a href="ugn.php">නිෂ්පාදන හා ඵලදායීතාවය වර්ධනය කිරීම</a>
      <a href="ugp.php">ප්‍රජාවගේ ධාරිතාව වර්ධනය කිරීම</a>
      <a href="ugj.php">ජෛව ඒකක වැඩි දියුණු කිරීම</a>
    </div>

  <button class="dropdown-btn">Matara 
    <i class="fa fa-caret-down"></i>
  </button>
    <div class="dropdown-container">
      <a href="umk.php">කෘෂිකාර්මික අංශය වැඩි දියුණු කිරීම</a>
      <a href="umn.php">නිෂ්පාදන හා ඵලදායීතාවය වර්ධනය කිරීම</a>
      <a href="ump.php">ප්‍රජාවගේ ධාරිතාව වර්ධනය කිරීම</a>
      <a href="umj.php">ජෛව ඒකක වැඩි දියුණු කිරීම</a>
    </div>

  <button class="dropdown-btn">Hambanthota 
    <i class="fa fa-caret-down"></i>
  </button>
    <div class="dropdown-container">
      <a href="uhk.php">කෘෂිකාර්මික අංශය වැඩි දියුණු කිරීම</a>
      <a href="uhn.php">නිෂ්පාදන හා ඵලදායීතාවය වර්ධනය කිරීම</a>
      <a href="uhp.php">ප්‍රජාවගේ ධාරිතාව වර්ධනය කිරීම</a>
      <a href="uhj.php">ජෛව ඒකක වැඩි දියුණු කිරීම</a>
    </div>

  <a href="summary.php">Summary</a>

  <br>
  <br>
  <br>
  <br>
  
  <a href="logout.php">LOG OUT</a>
</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html> 
