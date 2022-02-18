<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome</title>
  <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="site_header">
    <h1>G.inder</h1> 
        <hr>
        <ul>
            <li><a href="homepage.html">Home</a></li>
            <li><a href="find_gamers.html">Find Gamers</a></li>
            <li><a href="createprofile.html">Create Profile</a></li>
            <li><a href="report.html">Report a Problem</a></li>
            <li><a href="create_post.html">Create a post</a></li>
        </ul>
  </div>

  <h2 class="segment_header">Search for User</h2>
  <div class="textbox">
    <form action="/search.php" method="post">
      <label for="user">Username:</label>
      <input type="text" id="user" name="user"><br><br>
      <label for="game">Game:</label>
      <input type="text" id="game" name="game"><br><br>
      <label for="console">Console:</label>
      <input type="console" id="console" name="console"><br><br>
      <label for="rank">Rank:</label>
      <input type="rank" id="rank" name="rank"><br><br>
      <input type="submit" value="Submit">


    </form>
  </div>

</body>
</html>