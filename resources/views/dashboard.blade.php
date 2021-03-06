<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Medclick - Dashboard</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@800&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .logo{
                margin-top: -1%;
                padding-bottom: -2%;
                margin-right: 1%;
            }
            
           .btn1{              
               text-align: center;
               text-decoration: none;
               padding: 5%;
               border-radius: 25px;
                 background: rgb(0,206,255);
                 background: linear-gradient(149deg, rgba(0,206,255,1) 0%, rgba(64,139,249,1) 46%, rgba(121,2,205,1) 97%);
           }
           .btn3{              
               text-align: center;
               text-decoration: none;
               padding: 5%;
               border-radius: 25px;
               background: rgb(249,64,232);
               background: linear-gradient(149deg, rgba(249,64,232,1) 0%, rgba(142,3,255,1) 67%, rgba(59,0,135,1) 97%);
           }
           .btn2{
            border-radius: 25px;
               text-align: center;
               text-decoration: none;
               padding: 5%;
               background: rgb(64,249,123);
               background: linear-gradient(149deg, rgba(64,249,123,1) 0%, rgba(2,205,131,1) 66%, rgba(57,184,0,1) 97%);
           }
           .btn4{
            border-radius: 25px;
               text-align: center;
               text-decoration: none;
               padding: 5%;
               background: rgb(249,157,64);
                background: linear-gradient(149deg, rgba(249,157,64,1) 0%, rgba(255,146,3,1) 63%, rgba(254,46,0,1) 97%);
               
           }
           .nav-item{
               margin-left: 4%;
           }
           .img1{
               margin-left: 2200%;
               margin-top: -25%;
           }
           .img2{
               margin-left: 3035%;
           }
           .head1{
               margin-top: -25%;
               margin-left: -45%;
               font-family: 'Sora', sans-serif;
               src: url('{{asset('/fonts/Sora-ExtraBold.tff')}}');
               font: bold;
               color: #191970;
               font-size: 50px;
               text-align: center;
           }
           .text1{
            margin-top: 2%;
            margin-left: -45%;
            text-align: center;
           }
           h3{
               margin-left: 3%;
               margin-top: 3%;
           }
           .card{
               margin-left: 3%;
               margin-top: 2%;
               border: none;
           }
            a:link { text-decoration: none; }
            a:visited { text-decoration: none; }
            a:hover { text-decoration: none; }
            a:active { text-decoration: none; }
            .card1{
                text-align: center;

            }
            
        </style>
    </head>
    <body class="antialiased">
       <nav class="navbar navbar-expand navbar-light bg-light">
       <div class="logo">
       <a href="/"><img src="{{ URL('image/med-logo.png') }}" alt="" height="120"></a>
       </div>
    <ul class="navbar-nav mr-auto justify-content-end">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home')}}">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home')}}">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home')}}">Contact </a>
      </li>
      <li class="nav-item1 justify-content-end">
      <img src="{{ URL('image/profile.png') }}" alt="" height="40" class="img1">
      
      </li>
      <a href="/"><li class="nav-item1">
      <img src="{{ URL('image/logout.png') }}" alt="" height="30" class="img2">
      </li></a>
    </ul>
</nav>

        <div class="content">
           <h3> Online Consultation & Services</h3>
           <div class="row">
           <div class="card" style="width: 18rem;">
                <a href="#" class="btn1 btn-primary">
                    <div class="card-body">
                    <h5 class="card-title">Personal Appointment</h5>
                     </div
                     ></a>
    	    </div>
            <div class="card" style="width: 18rem;">
                <a href="#" class="btn2 btn-primary">
                    <div class="card-body">
                    <h5 class="card-title">Online Appointment </h5>
                     </div
                     ></a>
    	    </div>
            <div class="card" style="width: 18rem;">
                <a href="#" class="btn4 btn-primary">
                    <div class="card-body">
                    <h5 class="card-title">My Appointments</h5>
                     </div
                     ></a>
    	    </div>
        </div>
        </div>
        <div class="content">
           <h3> Top Doctors</h3>
           <div class="row">
           <div class="card" style="width: 18rem;">
                <a href="#" class="btn3 btn-primary" data-toggle="modal" data-target="#Modal">
                    <div class="card-body">
                    <img src="{{ URL('image/profile.png') }}" alt="" height="50">
                    <h5 class="card-title">Dr. John</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                     </div>
                    </a>
                    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                         <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="Modal">Doctor Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                         </button>
                            </div>
                 <div class="modal-body"> 
                 <div class="card1">
                     <img src="{{ URL('image/profile.png') }}" alt="" height="80">
                     <div class="card-body">
                     <h5 class="card-title">Doctor name</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       
  </div>
</div>
                    </div>
                    </div>
                    </div>
                    </div>
    	    </div>
            <div class="card" style="width: 18rem;">
                <a href="#" class="btn3 btn-primary" data-toggle="modal" data-target="#Modal">
                    <div class="card-body">
                    <img src="{{ URL('image/profile.png') }}" alt="" height="50">
                    <h5 class="card-title">Dr. John</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                     </div>
                    </a>
                    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                         <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="Modal">Doctor Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                         </button>
                            </div>
                 <div class="modal-body"> 
                 <div class="card1">
                     <img src="{{ URL('image/profile.png') }}" alt="" height="80">
                     <div class="card-body">
                     <h5 class="card-title">Doctor name</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       
  </div>
</div>
                    </div>
                    </div>
                    </div>
                    </div>
    	    </div>
            <div class="card" style="width: 18rem;">
                <a href="#" class="btn3 btn-primary" data-toggle="modal" data-target="#Modal">
                    <div class="card-body">
                    <img src="{{ URL('image/profile.png') }}" alt="" height="50">
                    <h5 class="card-title">Dr. John</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                     </div>
                    </a>
                    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                         <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="Modal">Doctor Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                         </button>
                            </div>
                 <div class="modal-body"> 
                 <div class="card1">
                     <img src="{{ URL('image/profile.png') }}" alt="" height="80">
                     <div class="card-body">
                     <h5 class="card-title">Doctor name</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       
  </div>
</div>
                    </div>
                    </div>
                    </div>
                    </div>
    	    </div>
            <div class="card" style="width: 18rem;">
                <a href="#" class="btn3 btn-primary" data-toggle="modal" data-target="#Modal">
                    <div class="card-body">
                    <img src="{{ URL('image/profile.png') }}" alt="" height="50">
                    <h5 class="card-title">Dr. John</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                     </div>
                    </a>
                    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                         <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="Modal">Doctor Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                         </button>
                            </div>
                 <div class="modal-body"> 
                 <div class="card1">
                     <img src="{{ URL('image/profile.png') }}" alt="" height="80">
                     <div class="card-body">
                     <h5 class="card-title">Doctor name</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       
  </div>
</div>
                    </div>
                    </div>
                    </div>
                    </div>
    	    </div>
        </div>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
