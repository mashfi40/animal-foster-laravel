<!DOCTYPE html>
<html>
    <head>
        <title>Foster Paradise</title>
        <link rel="stylesheet" href="{{asset('cssfile/styles.css')}}">
        <link rel="stylesheet" href="{{asset('cssfile/showcart.css')}}">
        <link rel="stylesheet" href="hhtps://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>
    <body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        
                        <a href="#" class="logo" >
                            <img src="images/FosterLogo.png" >
                        </a>
                        
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/pet" class="active">Pets</a></li>
                            <li class="scroll-to-section"><a href="/shop">Shop</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">User</a>
                                <ul>
                                    <li><a href="/home">Logout</a></li>  
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="/contact">Contact Us</a></li> 
                        </ul>        
                        
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>   
    <div class="show">
        <div class="login-container">

            <form action="#">
                <div class="form-group">
                    <span class="icon"><i class="fa-solid fa-envelope-circle-check"></i></span>
                    <label for="email">Email:</label>

                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div>
                    <input type="submit" value="Show">
                </div>
            </form>
        </div>
    </div>
<div class="container-scroller">
    <form action="{{route('adopts')}}" method="post">

@csrf
    <table>
        <tr>
            <th>Breed Name</th>
            <th>Action</th>

        </tr>
        
            @foreach($data as $data)
            <tr>

                <td>
                    <input type="text" name="breedname" value="{{$data->breed}}" hidden="">
                    {{$data->breed}}
                </td>

            </tr>
            @endforeach
            @foreach($data1 as $data1)
            <tr style="position: relative; top: -40px;right:-1280px">
                <td><a href="{{url('/remove',$data1->id)}}" class="btn btn-warning">Remove</a></td>
            </tr>
            @endforeach
    </table>
    
    <div align="center"><h1>Adopt Now</h1>
    <div id="appear" align="center" style="padding: 10px;">
        <div class="form-box">
            <label style="font-size: 24px;">Name :</label>
            <input type="text" style="font-size: 20px; width: 300px ;height:30px" name="name" placeholder="Name">
        </div>
        <div class="form-box">
            <label style="font-size: 24px;">Phone :</label>
            <input type="number" style="font-size: 20px; width: 300px ;height:30px" name="phone" placeholder="Phone Number">
        </div>
        <div class="form-box">
            <label style="font-size: 2px;">Address :</label>
            <input type="text" style="font-size: 20px; width: 400px ;height:30px" name="address" placeholder="Address">
        </div>
        <div class="confirm">

            <input style="color: white;background:green" type="submit" class="btn btn-success" value="Confirm Adoption">
            <button style="color: white;background:red" type="button" id="close" class="btn btn-danger">Close</button>
        </div>
        
    </div>
    </form>
</div>



    <!--<script type="text/javascript">
        $("#order").click(
            function() {

                $("#appear").show();
            }
        );
        $("#close").click(
            function() {

                $("#appear").hide();
            }
        );!-->
    </script>
    <script src="https://kit.fontawesome.com/0fbd8523fa.js" crossorigin="anonymous"></script>
</body>

</html>