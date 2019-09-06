<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{url('css/mystyle.css')}}">
        <title>Laravel Vue Router</title>
    </head>
    <body>
      <div id="app">
        <div class="content">
          <h1>Laravel Vue Router </h1>
          <hr>
            <div class="lat-left">
              <nav role='menu'>
                    <input  aria-controls='nav' 
                            aria-haspopup='true' 
                            aria-labelledby='menu' 
                            id='link-top' 
                            role='button' 
                            tabindex='1' 
                            type='checkbox'
                    >
                    <label class='down' for='link-top' id='menu' role='none' tabindex='-1'>Menu</label>
                    <ul aria-labelledby='menu' id='nav' role='menu'>
                      <li><router-link class="items" to="/kitten1">Kitten 1</router-link></li>
                      <li><router-link class="items" to="/kitten2">Kitten 2</router-link></li>
                      <li><router-link class="items" to="/kitten3">Kitten 3</router-link></li>
                      <li><router-link class="items" to="/">Home</router-link></li>
                    </ul>
                  </nav>
            </div>
            <div class="lat-right">
              <router-view></router-view>
            </div>
        </div>
      </div>
      <script src="{{asset('js/app.js')}}" ></script>
    </body>
</html>


