<x-layouts.app>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Settings</title>
		<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
		<!-- Bulma Version 0.9.0-->
		<link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />

	</head>
  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    a{
      color: black;
    }

    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidebar a:hover {
      color: #f1f1f1;
    }

    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    .openbtn {
      font-size: 20px;
      cursor: pointer;
      background-color: #111;
      color: white;
      padding: 10px 15px;
      border: none;
    }

    .openbtn:hover {
      background-color: #444;
    }

    #main {
      transition: margin-left .5s;
      padding: 16px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidebar {padding-top: 15px;}
      .sidebar a {font-size: 18px;}
    }
  </style>
	<body>
    <div id="mySidebar" class="sidebar" style="margin-top: 3em">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="#">About</a>
      <a href="{{route('settings.notifications')}}">Notifications</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>

    <div id="main" style="margin-top: 3em;">
      <div class="tab-pane" id="pane-3" style="margin-top: 2em;">
        <div class="columns">
          <div class="container">
            <div class="columns">
              <div class="column">
                <article class="media">
                    <div class="media-content">
                      <div class="content">
                        <button id= "btn" class="openbtn" onclick="openNav()">☰ Settings</button>
                        {{ $slot }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "280px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
    </script>
	</body>
</x-layouts.app>
