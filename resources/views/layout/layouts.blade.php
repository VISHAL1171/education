
<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <ul class="nav nav-pills">
            @if(\Auth::check())
            <li>
                {{link_to_route('logout','Logout')}}
            </li>
            @else
             <li>
                 {{link_to_route('login','Login')}}
             </li>
             @endif
         </ul>
    @yield('body')
</div>
</body>
