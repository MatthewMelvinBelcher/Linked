<html>
<head>
<link rel="stylesheet" type="text/css" href="Style/style.css"></link>
</head>
<body>

<a href="index.php">
<img id="logopos"src="Style/Linked-logo.png" width="150px"
    height="75px" alt="" />
</a>

<form id="doxsearch" action="result.php" method="GET">
    <input type="text" name="query" />
    <input type="submit" value="Search" />
</form>
</body>
</html>
<?php
    mysql_connect("", "", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
     
     
     
?>
<a class="outpos">
<a class="output">
<?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM data WHERE (`name` LIKE '%".$query."%') OR (`Phone` LIKE '%".$query."%')") or die(mysql_error());

             
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `id`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3> [Result for $query] > > > [Name]  [  ".$results['name']."  ]  [Number]  [   ".$results['Phone']."  ]  [Profile]  [   ".$results['Profile']."  ]</h3></p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "<h3>No results for $query</h3>";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
</a>
</a>