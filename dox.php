<html>
<title>Dox</title>
<head>
<link rel="stylesheet" type="text/css" href="Style/style.css"></link>
</head>
<body>
<script type="text/javascript">

function validateForm() {
    var a = document.forms["subdox"]["name"].value;
    if (a == "") {
        alert("Name must be filled out");

    }
    var b = document.forms["subdox"]["Phone"].value;
    if (b == "") {
        alert("Phone must be filled out");

} 
    var c = document.forms["subdox"]["Profile"].value;
    if (c == "") {
        alert("Profile must be filled out");

} 
        return false;
}
</script>

<div id="parent">
<form name="subdox" id="Doxed" action="doxed.php" onsubmit="return validateForm()" method="post">
<img src="Style/priate.png" width="370px"
    height="345px" alt="Doxer" />
<a class="doxin">
<ft>Name:</ft><input id="a" type="text" name="name"><br>
<ft>Phone:</ft><input id="b" type="text" name="Phone"><br>
<ft>Profile Link:</ft><input id="c" type="text" name="Profile"><br><br>
<input type="submit" name="save" value="Submit"><br><br>
</div>
</form>
</a>

</body>
</html>
