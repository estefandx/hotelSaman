<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>

    <link  type='text/css'  rel="stylesheet" href="{{asset('css/login/login.css')}}">

</head>
<body >

<div class="login-page">
    <div class="form">
        <form class="register-form" ">
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <input type="text" placeholder="email address"/>
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form"   method="POST" action="{{ url('/login') }}"  >
            {{ csrf_field() }}
            <input type="text" id="email"  name="email" placeholder="username"/>
            <input id="password" type="password" class="form-control" name="password" placeholder="password"/>
            <button type="submit" >login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>


<script type="text/javascript" src="{{ URL::asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/login/login.js')}}"></script>
</body>
</html>