<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="index.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAD0djBIpa0pb_N3pFC7UMFEestET-xZJE&libraries=places&callback=initMap"onerror="handleMapError()"></script> 
<script src="index.js"></script>
</head>
<body>
    
    <header class="container-fluid sticky-sm-top p-3 mb-1">
        <div class="row align-items-center justify-content-between">
            <div class="col">
                <div class="row d-flex justify-content-start">
                    <div class="col-1 flex-item p-3">
                        <a class="burger btn text-white" role="button" data-bs-toggle="offcanvas" href="#offcanvas" aria-controls="offcanvasLabel"><i class="bi bi-list"></i></a>
                    </div>
                    <div class="col-5 align-self-center flex-fill p-3">
                        <span class="title text-white no-select">SPINSYNC::</span>
                    </div>
                </div>
            </div>
            <div class="col-5 p-3 offset-2">
                <div class="input-group" style="display:none;">
                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="search-addon" id="search-input">
                    <button class="btn magnifying-glass" type="button" id="search-addon"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title no-select" id="offcanvasLabel">MENU</h5>
                <button class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="offcanvas-nav">
                    <ul class="nav flex-column nav-items no-select">
                        <li class="menu-item"><a class="mb-3 nav-link active" id="navLink" data-bs-toggle="tab" href="#home"><i class="bi bi-house"></i> HOME</a></li>
                        <li class="menu-item"><a class="mb-3 nav-link" id="navLink" data-bs-toggle="modal" data-bs-target="#about"><i class="bi bi-cup-hot"></i> ABOUT</a></li>
                        <hr>
                        <li class="menu-item"><a class="mb-3 nav-link" id="navLink" data-bs-toggle="modal" data-bs-target="#signinCustomer"><i class="bi bi-box-arrow-right"></i> SIGN IN as Customer</a></li>
                        <li class="menu-item"><a class="mb-3 nav-link" id="navLink" data-bs-toggle="modal" data-bs-target="#signinMerchant"><i class="bi bi-box-arrow-right"></i> SIGN IN as Merchant</a></li>
                        <li class="menu-item"><a class="mb-3 nav-link" id="navLink" data-bs-toggle="modal" data-bs-target="#register"><i class="bi bi-person-add"></i> REGISTER</a></li>
                        <hr>
                        <h5> Own a Laundry Business?</h5>
                        <p><a href="subscribe.php">Sign Up</a> for an account with us! </p>
                        <hr>
                        <footer class="mt-3">
                            <h5 class="no-select">SPINSYNC::</h5>
                            <p class="no-select">&copy; 2023 All rights reserved</p>
                        </footer>
                    </ul>
                </div>
            </div>
    </header>

    <div class="tab-content container-fluid p-3">

        <div id="home" class="container-fluid tab-pane active no-select">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="p-3">
                        <div class="row gx-3 text-center no-select">
                             <div class="col-md-12 mt-2 mb-3 p-3">
                                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <img src="img/online-laundry.jpg" class="d-block w-75 mx-auto">
                                                </div>
                                                <div class="col-md-6 align-self-center">
                                                <h5>Tired of the hassle of traditional laundry services?</h5>
                                                <p>Say goodbye to long queues and endless waiting times!</p>
                                                <p><b>SPINSYNC::</b> revolutionizes the way you do laundry, bringing convenience and efficiency to your doorstep.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <img src="img/girl-appointment.jpg" class="d-block w-75 mx-auto">
                                                </div>
                                                <div class="col-md-6 align-self-center">
                                                    <p>With <b>SPINSYNC::</b>, you can effortlessly schedule laundry pickups and deliveries from the comfort of your home or office. Our user-friendly platform connects you with trusted laundry partners, ensuring top-notch service and satisfaction.</p>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <img src="img/business-growth.jpg" class="d-block w-75 mx-auto">
                                                </div>
                                                <div class="col-md-6 align-self-center">
                                                    <p>Running a laundry business? Join <b>SPINSYNC::</b> as a partner and expand your reach to a wider audience. Manage orders seamlessly and grow your customer base with our intuitive dashboard designed just for you.</p>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <img src="img\hassle-free.jpg" class="d-block w-75 mx-auto">
                                                </div>
                                                <div class="col-md-6 align-self-center">
                                                <p>Experience the future of laundry management with <b>SPINSYNC::</b>. Sign up now to enjoy hassle-free laundry days!</p>
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="signinCustomer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signinLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="signinFormLabel">Sign In</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body customer-sm p-2 mt-3" style="width: 498px; font-family: 'Roboto', sans-serif;">
                        <form action="signin-customer.php">
                            <div class="row g-3 justify-content-center">
                                <div class="col-md-10 mb-2">
                                    <div class="input-group">
                                        <div class="input-group-text">@</div>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-label="Username" required>
                                    </div>
                                </div>
                            </div>  
                            <div class="row justify-content-center">
                                <div class="col-md-10 mb-3" style="position: relative;">
                                <input type="password" class="form-control" id="initpass" name="initpass" placeholder="Enter your Password..." required>
                                <span class="toggle-password" onclick="togglePasswordVisibility(this)"  style="position: absolute; top: 13%; right: 5%; cursor: pointer;">
                            <!-- Eye icon, you can replace this with your preferred icon -->
                            &#x1F441;</span>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 mt-2 mb-3">
                            <button type="submit" class="btn btn-primary w-100">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="signinMerchant" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signinLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="signinFormLabel">Sign In</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body customer-sm p-2 mt-3" style="width: 498px; font-family: 'Roboto', sans-serif;">
                        <form action="admin-signin.php" method="POST">
                            <div class="row g-3 justify-content-center">
                                <div class="col-md-10 mb-2">
                                    <div class="input-group">
                                        <div class="input-group-text">@</div>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-label="Username" autocomplete="on" required>
                                    </div>
                                </div>
                            </div>  
                            <div class="row justify-content-center">
                                <div class="col-md-10 mb-3" style="position: relative;">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password..." required>
                                <span class="toggle-password" onclick="togglePasswordVisibility(this)"  style="position: absolute; top: 13%; right: 5%; cursor: pointer;">
                            <!-- Eye icon, you can replace this with your preferred icon -->
                            &#x1F441;</span>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 mt-2 mb-3">
                            <button type="submit" class="btn btn-primary w-100">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="registerFormLabel">Create Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body customer-sm p-2 mt-3" style="width: 498px; font-family: 'Roboto', sans-serif;">
            <p class="note ms-3"><small>*</small> indicates a required field</p>
            <form action="register-customer.php" method="POST">
                <div class="mb-1">
                    <label>Full name: <small>*</small> </label>
                </div>
                <div class="row g-3">
                    <div class="col mb-2">
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" aria-label="Last Name" required>
                    </div>
                    <div class="col mb-2">
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" aria-label="First Name" required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col mb-2">
                        <label>Username: <small>*</small> </label>
                        <div class="input-group">
                            <div class="input-group-text">@</div>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-label="Username" required>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <label>Email: <small>*</small> </label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" aria-label="Email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-2">
                        <label for="phone">Phone Number: <small>*</small> </label>
                    </div>
                    <div class="mb-3" style="position: relative;">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number..." required>
                </div>
                <div class="mb-2">
                    <label for="address">Address: <small>*</small> </label>
                </div>
                <div class="mb-3" style="position: relative;">
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your Address..." required>
                <span class="toggle-maps" onclick="toggleMapContainer()" style="position: absolute; top: 10%; right: 5%; cursor: pointer;">
                <!-- Map icon, you can replace this with your preferred icon -->
                &#x1F5FA;</span>
                </div>
            </div>
            <div class="row">
                <div class="mb-2">
                    <label for="initpass" class="password-toggle" style="position: relative;">Password: <small>*</small> 
                </label>
            </div>
            <div class="mb-3" style="position: relative;">
            <input type="password" class="form-control" id="initpass" name="initpass" placeholder="Enter your Password..." required>
            <span class="toggle-password" onclick="togglePasswordVisibility(this)"  style="position: absolute; top: 13%; right: 5%; cursor: pointer;">
            <!-- Eye icon, you can replace this with your preferred icon -->
            &#x1F441;</span>
        </div>
    </div>
    <div class="row">
        <div class="mb-2">
            <label for="confirm_password" class="password-toggle">Confirm Password: <small>*</small> </label>
        </div>
        <div class="mb-3" style="position: relative;">
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re-enter your Password..." required>
        <span class="toggle-password" onclick="togglePasswordVisibility(this)" style="position: absolute; top: 13%; right: 5%; cursor: pointer;">
        <!-- Eye icon, you can replace this with your preferred icon -->
        &#x1F441;</span>
    </div>
</div>
<div class="row">
    <div class="col offset-8 mt-2 mb-3">
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="childModal" tabindex="-1" aria-labelledby="childModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="childModalLabel">Google Maps</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Drag and click to your preferred location.</p>
          <!-- map-container -->
          <div id="map-container" style="height: 300px;"></div>
        </div>
      </div>
    </div>
  </div>

    <script>

function toggleMapContainer() {
    var myModal = new bootstrap.Modal(document.getElementById('childModal'));
    myModal.show();
  }
  $(document).ready(function(){
    $('#childModal').draggable({
      handle: '.modal-header'
    });
  });
  var modal = document.getElementById('childModal');
  var header = modal.querySelector('.modal-header');
  var isDragging = false;
  var offsetX, offsetY;

  header.addEventListener('mousedown', function(e) {
    isDragging = true;
    offsetX = e.clientX - modal.getBoundingClientRect().left;
    offsetY = e.clientY - modal.getBoundingClientRect().top;
  });

  document.addEventListener('mousemove', function(e) {
    if (isDragging) {
      modal.style.left = (e.clientX - offsetX) + 'px';
      modal.style.top = (e.clientY - offsetY) + 'px';
    }
  });

  document.addEventListener('mouseup', function() {
    isDragging = false;
  });
        // Function to initialize the Google Map
        function initializeMap(latitude, longitude) {
          var map = new google.maps.Map(document.getElementById('map-container'), {
            center: { lat: latitude, lng: longitude },
            zoom: 13  // Adjust the zoom level as needed.
          });
      
          // Add a marker for the user's location.
          var marker = new google.maps.Marker({
            position: { lat: latitude, lng: longitude },
            map: map,
            title: "Your Location"
          });
      
          // Add an event listener to handle clicks on the map
          map.addListener('click', function (event) {
            var clickedLocation = event.latLng;
            // Use the clickedLocation to update your address input field
            updateAddressInput(clickedLocation);
          });
      
          var addressInput = document.getElementById('address');
          var autocomplete = new google.maps.places.Autocomplete(addressInput);
          autocomplete.bindTo('bounds', map);  // Restrict suggestions to the visible map area.
      
          // Function to update the address input field with the selected location
          function updateAddressInput(location) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'location': location }, function (results, status) {
              if (status === 'OK') {
                if (results[0]) {
                  addressInput.value = results[0].formatted_address;
                }
              }
            });
          }
        }
      
        // Define the callback function that will run when the Google Maps API is fully loaded
        function initMap() {
          // Check for geolocation support and get the user's location
          if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function (position) {
              // Use the user's location (position.coords.latitude and position.coords.longitude) as the map's initial center.
              initializeMap(position.coords.latitude, position.coords.longitude);
            });
          }
        }
      
        function handleMapError() {
          console.error('Google Maps API failed to load.');
          // You can provide an error message or take appropriate action.
        }
      </script>
<div class="modal fade" id="about" tabindex="-1" aria-labelledby="aboutLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutLabel">ABOUT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container" style="font-family: 'Roboto'">
                <h3 class="mb-3">About Us: Unveiling the Story Behind "SpinSync::"</h3>
                <p>Welcome to SpinSync::, your premier destination for revolutionizing laundry management services. At SpinSync::,
                we are dedicated to providing a seamless online experience that bridges the gap between customers and laundry
                shop services, akin to the convenience offered by popular food delivery apps. Our goal is to simplify the
                laundry process, making it more accessible, efficient, and hassle-free for everyone involved.</p>
                
                <div class="team-member mb-3">
                    <h5>The Genesis</h5>
                    <p>SpinSync:: was born from the visionary mind of John Raynor Tansiongco, who spearheaded the project with his
                    team of talented collaborators. Recognizing the common challenges faced by both customers and laundry shop
                    owners, John Raynor envisioned a solution that would streamline laundry management and enhance the overall
                    experience for users.</p>
                </div>
                
                <div class="team-member mb-3">
                    <h5>Meet the Creators</h5>
                    <p>John Raynor Tansiongco, as the project leader and main researcher, provided invaluable insights and guidance
                    throughout the development of SpinSync::. Alongside him, Mary Nicole Joyce P. Jurinario led the technical
                    implementation as the main programmer. Ronieca Kaisha Nebreja, Ivan Jason Ollosa, and Josef Rodfin Ponte
                    formed a cohesive team, each contributing their expertise to various aspects of the project.</p>
                </div>
                                
                <div class="team-member mb-3">
                    <h3>The Vision</h3>
                    <p>SpinSync:: embodies a vision of innovation, collaboration, and dedication. Our aim is to revolutionize the
                    laundry industry by empowering both customers and laundry shop owners with greater convenience and
                    efficiency. We aspire to redefine the way laundry services are accessed and managed, setting new standards
                    of excellence in the process.</p>
                </div>
                                
                <div class="team-member mb-3">
                    <h3>Thesis Project</h3>
                    <p>SpinSync:: was conceived and developed as part of John Raynor Tansiongco and his team's thesis project at
                    Western Institute of Technology. The project entailed extensive research, planning, and execution,
                    resulting in the creation of a fully functional online platform designed to streamline laundry management
                    processes.</p>
                </div>
                
                <div class="team-member mb-3">
                    <h3>Our Commitment</h3>
                    <p>At SpinSync::, we are committed to excellence and continuous improvement. We are dedicated to providing
                    exceptional service and enhancing the user experience for our customers and partners. We remain agile and
                    responsive, adapting to meet the evolving needs of the laundry industry while prioritizing the satisfaction
                    of our users.</p>
                </div>
                            
                <div class="team-member mb-3">
                    <h3>Join the Revolution</h3>
                    <p>Whether you're a customer seeking laundry services or a laundry shop owner looking to expand your reach,
                    SpinSync:: invites you to join the revolution. Experience the future of laundry management with SpinSync::
                    and discover a world of convenience at your fingertips.</p>
                </div>
                             
                <p>Thank you for choosing SpinSync::, where innovation meets laundry management.</p>
            </div>
        </div>
    </div>
</div>
</div>

</div>

</body>
</html>