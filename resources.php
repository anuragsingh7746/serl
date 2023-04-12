<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
    <title>IIIT Allahabad</title>
    <link rel="stylesheet" href="css/style1.css" />
    <!--fav-icon-->
    <link rel="shortcut icon" href="images/favicon.png" />
    <style>
      /* Full-width input fields */
      input[type='text'],
      input[type='password'] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      /* Set a style for all buttons */
      button {
        background-color: #04aa6d;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      button:hover {
        opacity: 0.8;
      }

      /* Extra styles for the cancel button */
      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }

      /* Center the image and position the close button */
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
      }

      img.avatar {
        width: 40%;
        border-radius: 50%;
      }

      .container {
        padding: 16px;
      }

      span.psw {
        float: right;
        padding-top: 16px;
      }

      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        padding-top: 60px;
      }

      /* Modal Content/Box */
      .modal-content {
        width: 400px;
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
      }

      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: red;
        cursor: pointer;
      }

      /* Add Zoom Animation */
      .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s;
      }

      @-webkit-keyframes animatezoom {
        from {
          -webkit-transform: scale(0);
        }
        to {
          -webkit-transform: scale(1);
        }
      }

      @keyframes animatezoom {
        from {
          transform: scale(0);
        }
        to {
          transform: scale(1);
        }
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
          display: block;
          float: none;
        }
        .cancelbtn {
          width: 100%;
        }
      }
    </style>
  </head>

  <body>
    <section class="main">
      <!-- style="background-image: url(https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.iiita.ac.in%2Fuploads%2Fcarousel%2Fcampus818901.jpg&f=1&nofb=1&ipt=f46fa53f49f5f3767b1de7a6cb28a04c9556ee4094870d2d12a2fb43bfbfa2d3&ipo=images);" -->

      <nav class="navbar1">
        <a href="#" class="logo">
          <div class="logo">
            <img src="images/logo.gif" style="max-width: 10%; hieght: 10px" />
          </div>
          <!-- <img src="images/serllogo (1).png" width="100px" height="100px" /> -->
        </a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn">
          <span class="nav-icon"></span>
        </label>
        <ul class="menu" style="border-radius: 5px">
          <li><a href="index.html" class="navi">About</a></li>
          <li><a href="faculty.html" class="navi"> Faculty</a></li>
          <li><a href="researchers.html" class="navi"> Researchers</a></li>
          <li><a href="projects.html" class="navi">Projects</a></li>
          <li><a href="publications.php" class="navi">Publications</a></li>
          <li><a href="resources.php" class="navi">Resources</a></li>
          <li><a href="contact.html" class="navi">Contact</a></li>
          <li>
            <a
              class="active"
              style="width: auto; border-radius: 5px; cursor: pointer"
              href="backend/index.html"
              >Login</a
            >
          </li>
        </ul>
      </nav>

      <!--main-content-->
      <!--div class="home-content"-->

      <!--div class="row" style="padding:20px;margin:20px;"-->
      <!--div class="col-sm-12;"-->

      <div class="card">
        <div
          class="contentText"
          style="text-align: justify; text-justify: inter-word"
        >
          <h2 class="pro">Resources</h2>
          <ol>
            <h4>Books</h4>
            <ul>
                <?php
    $server = "localhost";
    $user = "root";
    $password = "_Mysqllocalsecured1.";
    $database = "serl"; // Change 'database_name' to the name of your database
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        die("Connection to the database failed due to: " . mysqli_connect_error());
    }
    $sql = "SELECT title, link FROM books";
    $query = mysqli_query($con, $sql);
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
            $title = $row["title"];
            $link = $row["link"];
            echo "<li><a href='$link'>$title</a></li>";
        }
    } else {
        echo "<li>Sorry, no data available!</li>";
    }
    ?>
            </ul>
          </ol>
        </div>
      </div>

      <!--/div-->

      <!--/div-->
    </section>

    <!--footer------------->
    <footer class="foot">
      <p>Copyright (C) - 2023 | Developed By IIIT Allahabad</p>
      <p>© 2017 SERL - Software Engineering Research Lab</p>
    </footer>
    <script>
      // Get the modal
      var modal = document.getElementById('id01');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = 'none';
        }
      };
    </script>
  </body>
</html>
