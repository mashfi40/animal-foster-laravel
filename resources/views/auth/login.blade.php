<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foster Paradise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('cssfile/loginstyles.css')}}">
    <link rel="stylesheet" href="hhtps://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <section class="getInvolved">
        <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        
                        <a href="#" class="logo" >
                            <img src="images/FosterLogo.png" >
                        </a>
                        
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="/aboutus">About us</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Get Involved</a>
                                <ul>
                                    <li><a href="/login">User</a></li>
                                    <li><a href="/admin/login">Admin</a></li>
                                    
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="/contact">Contact Us</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>



        <div class="login-container">
            <div class="form-box">
                <h2>Login</h2>
                <form action="{{route('login-user')}}" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif()
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif()
                    @csrf 
                    <div class="form-group">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" placeholder="Enter email" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password" value="">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <button class="btn btn-block btn-primary" type="submit">Login</button>
                    <div class="login-register">
                        <p>Don't have an account? <a href="registration" class="register-link">Register Here</a></p>
                    </div>
                </form>
            </div>    
        </div>
    </section>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>