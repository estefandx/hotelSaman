<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/login/login.css')}}">
</head>
    <body>
        <div class="login-page">
            <div>                            
                <img src="images/logologin.png" id="logolog" width="310" height="200">
            </div>
            <div class="form">
                <form class="register-form">
                    <input type="text" placeholder="Usuario"/>
                    <input type="password" placeholder="Contraseña"/>
                    <input type="text" placeholder="Correo Electrónico"/>
                    <button>create</button>
                    <!--<p class="message">Ya estas registrado? <a href="{{url('/logeo')}}">Ingresar</a></p>-->
                </form>
                <form class="login-form"   method="POST" action="{{ url('/login') }}"  >
                    {{ csrf_field() }}
                    <input type="text" id="email"  name="email" placeholder="Correo Electrónico"/>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña"/>
                    <button type="submit" >login</button>
                    <!--<p class="message">No estas registrado? <a href="{{url('/register')}}">Registrarse</a></p>-->
                </form>
        </div>


        <script type="text/javascript" src="{{ URL::asset('js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/login/login.js')}}"></script>
    </body>
</html>