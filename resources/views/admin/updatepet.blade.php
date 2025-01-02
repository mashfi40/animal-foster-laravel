<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <title>Foster Paradise</title>
  @include("admin.admincss") 
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    <div style="position: absolute; top:150px; right: 820px">
        <form action="{{url('/update1',$data->id)}}" method="post" enctype="multipart/form-data">
            
            @csrf 

            <div>
                <label>Breed</label>
                <input style="color:blue" type="text" name="breed" value="{{$data->breed}}" required>
            </div>
            <div>
                <label>Description</label>
                <input style="color:blue" type="text" name="description" value="{{$data->description}}" required>
            </div>
            <div>
                <label>old Image</label>
                <img height="200" width="200" src="/petimage/{{$data->image}}">
            </div>
            <div>
                <label>New Image</label>
                <input style="color:blue" type="file" name="image" required>
            </div>
            <div>
                <input style="color:blue" style="color: black" type="submit" value="Save">
            </div>
     </div> 
</div>
    @include("admin.adminscript") 
  </body>
</html>