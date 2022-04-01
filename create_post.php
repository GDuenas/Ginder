<?php
class Post {

    public $gamertag;
    public $gameName;
    public $console;
    public $rank;
    public $description;

    public function __construct($gamertag, $gameName, $console, $rank, $description) {
        $this->gamertag = $gamertag;
        $this->gameName = $gameName;
        $this->console = $console;
        $this->rank = $rank;
        $this->description = $description;
    }

    public static function processData($data) {
        $newUser = new Post(
            isset($data["gamertag"]) ? $data["gamertag"] : null,
            isset($data["gameName"]) ? $data["gameName"] : null,
            isset($data["console"]) ? $data["console"] : null,
            isset($data["rank"]) ? $data["rank"] : null,
            isset($data["description"]) ? $data["description"] : null,
        );

        return $newUser;
    }

    public function save($db) {
        $query = "INSERT INTO post (gamertag, gameName, console, rank, description) VALUES ('$this->gamertag', '$this->gameName', '$this->console', '$this->rank', '$this->description')";
        if ($db->query($query)) {
            return true;
        } 
        return false;
    }
}


$post = Post::processData($_POST);

if (!empty($_POST)) {
    $db = new mysqli("localhost", "root", "", "Ginder");
    $ok = $post->save($db);
    $db->close();
    if ($ok) {
        header("Location: homepage.html");
        exit();
    } else {
        header("Location: createprofile.html");
    }
}
?>

<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset = "utf-8">
    <title>Create a post</title>
</head>
<body>

    <div class="site_header">
        <h1>G.inder</h1> 
        <hr>
        <ul>
            <li><a href="homepage.html">Home</a></li>
            <li><a href="find_gamers.php">Find Gamers</a></li>
            <li><a href="createprofile.php">Create Profile</a></li>
            <li><a href="report.php">Report a Problem</a></li>
            <li><a href="create_post.php">Create a post</a></li>
        </ul>
    </div>

    <h2 class="segment_header">Create a post</h2>
    <div class="textbox">
        <p>
            Please fill out the following fields to allow the website to show your post to interested users!
        </p>
            <form id="form" class="post-form" method="POST">
              <label for="gamertag">Username:</label>
              <input type="text" id="gamertag" name="gamertag"><br><br>
              <label for="gameName">Game:</label>
              <input type="text" id="gameName" name="gameName"><br><br>
              <label for="console">Console:</label>
              <input type="console" id="console" name="console"><br><br>
              <label for="rank">Rank:</label>
              <input type="rank" id="rank" name="rank"><br><br>
              <label for="description"></label>
              <textarea name="description" id="description" rows="10" cols="50"></textarea>
              <input type="submit" value="Submit">
            </form>
      </div>

  </body>
  </html>