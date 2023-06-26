<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Grace Metri's CV</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <p id="top"></p>
  
  <!--Navigation Menu-->
  <ul class="nav">
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="cv.php">CV</a></li>
    <li><a href="spotify.php">Projects</a></li>
    <li><a href="https://www.linkedin.com/in/grace-metri-419478264" target="_blank"><img
          src="pictures/linkedin.png"></a></li>
  </ul>

  <!--Main Panel with Content-->
  <div class="main">
    <h1>Grace Metri</h1>
    <h4>Email: gnm2i@mtmail.mtsu.edu | Phone: 615-555-5555</h4>

  <!--Profile Picture -->
    <div id="profile">
      <h3>Picture</h3>
      <img src="pictures/profile_pic.jpg" alt="picture">
    </div>

    <h3>Introduction</h3>
    <p> &emsp; Hi, my name is Grace Metri, and I am a junior at MTSU. My major is Computer Science. I look forward to
      taking this class!</p>

    <h3>Link to Website</h3>
    <a href="https://youtube.com/" target="_blank">Favorite Website</a>
    <br><br>

    
  <!--Unordered List with Lists nested-->
    <h3>Hobbies</h3>
    <ul style="list-style-type:disc;">
      <li>Binge Netflix</li>
      <ul style="list-style-type: circle;">
        <li>Stranger Things</li>
        <li>The Good Place</li>
        <li>Love Death + Robots</li>
        <li>Wednesday</li>
      </ul>
      <li>Listen to Music</li>
      <ul style="list-style-type: circle;">
        <li><a href="https://open.spotify.com/user/marteen43?si=5a14c03659ca4c8f" target="_blank">Spotify</a></li>
      </ul>
      <li>Read Books</li>
    </ul>

    <!-- Table Example -->
    <h3>Favorite Movies</h3>
    <table class="table">
      <!-- first row: headers -->
      <tr>
        <th>Movie</th>
        <th>Poster</th>
        <th>Director</th>
        <th>Year</th>
      </tr>
      <!-- second row -->
      <tr>
        <td>Inception</td>
        <td><img src="pictures/inception.jpg" alt="movie poster"></td>
        <td>Christopher Nolan</td>
        <td>2010</td>
      </tr>
      <!-- third row -->
      <tr>
        <td>Everything Everywhere All At Once</td>
        <td><img src="pictures/eeaao.jpg" alt="movie poster"></td>
        <td>Daniel Kwan</td>
        <td>2022</td>
      </tr>
    </table>

  </div>

  <!--Bookmark to top of page -->
  <a href="#top">
    <div class="circle">
      &#x2912;
    </div>
  </a>




  <!--
  <script src="script.js"></script>
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
  -->

</body>

</html>