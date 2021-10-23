<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Material Icons -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <title>Final - Youtube UI Clone</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <style>
.avatar-upload {
	 position: relative;
	 max-width: 205px;
	 margin: 50px auto;
}
 .avatar-upload .avatar-edit {
	 position: absolute;
	 right: 12px;
	 z-index: 1;
	 top: 10px;
}
 .avatar-upload .avatar-edit input {
	 display: none;
}
 .avatar-upload .avatar-edit input + label {
	 display: inline-block;
	 width: 34px;
	 height: 34px;
	 margin-bottom: 0;
	 border-radius: 100%;
	 background: #FFFFFF;
	 border: 1px solid transparent;
	 box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.12);
	 cursor: pointer;
	 font-weight: normal;
	 transition: all .2s ease-in-out;
}
 .avatar-upload .avatar-edit input + label:hover {
	 background: #f1f1f1;
	 border-color: #d6d6d6;
}
 .avatar-upload .avatar-edit input + label:after {
	 content: "\f040";
	 font-family: 'FontAwesome';
	 color: #757575;
	 position: absolute;
	 top: 10px;
	 left: 0;
	 right: 0;
	 text-align: center;
	 margin: auto;
}
 .avatar-upload .avatar-preview {
	 width: 192px;
	 height: 192px;
	 position: relative;
	 border-radius: 100%;
	 border: 6px solid #F8F8F8;
	 box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.1);
}
 .avatar-upload .avatar-preview > div {
	 width: 100%;
	 height: 100%;
	 border-radius: 100%;
	 background-size: cover;
	 background-repeat: no-repeat;
	 background-position: center;
}
 
    </style>


<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>
  </head>
  <body>
    <!-- Header Starts -->
   @include('layouts.header')
    <!-- Header Ends -->

    <!-- Main Body Starts -->
    <div class="mainBody">
      <!-- Sidebar Starts -->
      @include('layouts.sidebar')
      <!-- Sidebar Ends -->
     
        <div class="videos">
        <h1>@yield('text')</h1>
            <div class="videos__container">
                @yield('content')
            </div>
      </div>

 
    </div>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <!-- Main Body Ends -->
  </body>
</html>
