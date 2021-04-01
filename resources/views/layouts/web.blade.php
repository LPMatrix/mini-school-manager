<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
     <script src="https://kit.fontawesome.com/8b99ba209b.js"></script>
     <title>Students</title>
</head>
<body>
	<section id="school">
         <!-- NAV-ASIDE -->
         <div class="icon">
               <i class="fas fa-bar">X</i>
         </div>
         <aside class="aside">
              <div class="aside-heading">school management</div>
              <ul class="aside-item">
                   <li><a href="{{ route('dashboard') }}" class="link">Students</a></li>
                   <li><a href="{{ route('attendance') }}" class="link">Attendance</a></li>
              </ul>
              <a href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit();" class="log-out">Logout</a>
              <form id="form-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
							    {{ csrf_field() }}
							</form>
         </aside>
         <!-- MAIN -->
		@yield('content')

	</section>
    <!-- POPUP -->
    <section id="edit-section">
         <div class="edit-popup">
              <div class="close-icon">
               <div class="close">&times;</div>
              </div>
          <div class="edit-cont">
               <input type="text" class="edit-input" placeholder="Name">
               <input type="text" class="edit-input" placeholder="Class">
               <input type="number" class="edit-input" placeholder="Age">
               <input type="date" class="edit-input">
               <input type="text" class="edit-input" placeholder="Address">
               <input type="tel" class="edit-input" placeholder="Guardian num">
               <button class="update">update</button>
          </div>
         </div>
    </section>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" ></script>
    @include('layouts.toast')
</body>
</html>