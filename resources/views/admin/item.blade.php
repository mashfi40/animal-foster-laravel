<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Foster Paradise</title>
  @include("admin.admincss") 
  </head>
  <body>
     <div class="container-scroller">
     @include("admin.navbar")
     <div style="position: absolute; top:150px; right: 788px">
        <form action="{{url('/uploaditem')}}" method="post" enctype="multipart/form-data">
            
            @csrf 

            <div>
                <label>Title</label>
                <input style="color:blue" type="text" name="title" placeholder="Write a title" required>
            </div>
            <div>
                <label>Price</label>
                <input style="color:blue" type="num" name="price" placeholder="price" required>
            </div>
            <div>
                <label>Image</label>
                <input style="color:blue" type="file" name="image" required>
            </div>
            <div>
                <input style="color:blue" style="color: black" type="submit" value="Save">
            </div>
        </form>    
     </div>   
     <div style="position: absolute; top: 300px; right: 200px">
        <table bgcolor="black" border="3px">
            <tr>
                <th style="padding: 60px">Title</th>
                <th style="padding: 60px">Price</th>
                <th style="padding: 60px">Image</th>
                <th style="padding: 60px">Delete</th>
                <th style="padding: 60px">Update</th>
            </tr> 
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td><img height="200" width="200" src="/itemimage/{{$data->image}}"></td>
                <td><a href="{{url('/deleteitem',$data->id)}}">Delete</a></td> 
                <td><a href="{{url('/updateitem',$data->id)}}">Update</a></td> 
            </tr>
            @endforeach    
        </table>
    </div> 
     @include("admin.adminscript") 
  </body>
</html>