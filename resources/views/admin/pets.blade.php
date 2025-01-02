<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Foster Paradise</title>
  @include("admin.admincss") 
  </head>
  <body>
     <div class="container-scroller">
     @include("admin.navbar")
     <div style="position: absolute; top:150px; right: 820px">
        <form action="{{url('/uploadpet')}}" method="post" enctype="multipart/form-data">
            
            @csrf 

            <div>
                <label>Breed</label>
                <input style="color:blue" type="text" name="breed" placeholder="Write a breed name" required>
            </div>
            <div>
                <label>Description</label>
                <input style="color:blue" type="text" name="description" placeholder="write description" required>
            </div>
            <div>
                <label>Image</label>
                <input style="color:blue" type="file" name="image" required>
            </div>
            <div>
                <input style="color:blue" style="color: black" type="submit" value="Save">
            </div>
     </div>  
     <div style="position: absolute; top: 300px; right: 200px">
        <table bgcolor="black" border="3px">
            <tr>
                <th style="padding: 60px">Breed</th>
                <th style="padding: 60px">Description</th>
                <th style="padding: 60px">Image</th>
                <th style="padding: 60px">Delete</th>
                <th style="padding: 60px">Update</th>
            </tr> 
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->breed}}</td>
                <td>{{$data->description}}</td>
                <td><img height="200" width="200" src="/petimage/{{$data->image}}"></td>
                <td><a href="{{url('/deletepet',$data->id)}}">Delete</a></td> 
                <td><a href="{{url('/updatepet',$data->id)}}">Update</a></td>  
            </tr>
            @endforeach    
        </table>
    </div>  
     @include("admin.adminscript") 
  </body>
</html>