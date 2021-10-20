<?php 
  session_start();
?>

<?php
	require_once('dbh.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

<style>
*
{
  margin: 0;
}

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

header
{
  background: #306754;
  overflow: auto;
  padding: 2px;
  font-size: 20px;
  font-weight: bold;
  color: #FFFFFF;
}

header .pagename
{
  text-align: center;
}

header .loggedin
{
  float: right;
}

</style>

</head>
<body>

<!-- <header>
  <div class="pagename">උපමාන පාදක ප්‍රදාන</div>
  <div class="loggedin">Welcome Username!</div>
<header> -->

<div class="sidenav">
  <a href="dashboard.php">Dashboard</a>

  <a href="members.php">Members</a>

  <button class="dropdown-btn">Galle
    <i class="fa fa-caret-down"></i>
  </button>
    <div class="dropdown-container">
      <a href="gk.php">කෘෂිකාර්මික අංශය වැඩි දියුණු කිරීම</a>
      <a href="gn.php">නිෂ්පාදන හා ඵලදායීතාවය වර්ධනය කිරීම</a>
      <a href="gp.php">ප්‍රජාවගේ ධාරිතාව වර්ධනය කිරීම</a>
      <a href="gj.php">ජෛව ඒකක වැඩි දියුණු කිරීම</a>
    </div>

  <button class="dropdown-btn">Matara 
    <i class="fa fa-caret-down"></i>
  </button>
    <div class="dropdown-container">
      <a href="mk.php">කෘෂිකාර්මික අංශය වැඩි දියුණු කිරීම</a>
      <a href="mn.php">නිෂ්පාදන හා ඵලදායීතාවය වර්ධනය කිරීම</a>
      <a href="mp.php">ප්‍රජාවගේ ධාරිතාව වර්ධනය කිරීම</a>
      <a href="mj.php">ජෛව ඒකක වැඩි දියුණු කිරීම</a>
    </div>

  <button class="dropdown-btn">Hambanthota 
    <i class="fa fa-caret-down"></i>
  </button>
    <div class="dropdown-container">
      <a href="hk.php">කෘෂිකාර්මික අංශය වැඩි දියුණු කිරීම</a>
      <a href="hn.php">නිෂ්පාදන හා ඵලදායීතාවය වර්ධනය කිරීම</a>
      <a href="hp.php">ප්‍රජාවගේ ධාරිතාව වර්ධනය කිරීම</a>
      <a href="hj.php">ජෛව ඒකක වැඩි දියුණු කිරීම</a>
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





<div>
<header>
            <div class="pagename">උපමාන පාදක ප්‍රදාන</div>
            <div class="loggedin">Welcome <?php echo $_SESSION["username"] ?>!
            <small>
						<i>(Admin)</i> 
            </div>
					</small>
<header>
</div>

</body>
</html> 
