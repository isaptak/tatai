<!doctype html>
<html>
<head>
<title>HTML Search Page</title>
<meta name="description" content="My first Search page">
<meta name="keywords" content="html search form tutorial">
<link rel="stylesheet" href="spectre.css">
</head>
<body>
Content goes here.

<h1>All Tasks</h1>
<p>Waaaaaaay better than a Bitcoin faucet</p>
     
        <div class="columns">
        <form action="search.php" method="post">
	    <input class="form-input" type="text" id="inputQuery" name="query" placeholder="search terms e.g. writing, design, etc.">
        
                
        <select class="form-select" id="inputMaxAge" name="time">
        <option>Posted Any Time</option>
        <option>Week Ago</option>
        <option>Month Ago</option>
        </select>
        
        
        <select class="form-select" id="inputSortBy" name="sortingoption">
        <option>Sort By Date</option>
        <option>Short By BTC</option>
        </select>
        
        
        <button class="btn btn-primary">Search</button>
        </form>
        </div>
        


</body>
</html>
