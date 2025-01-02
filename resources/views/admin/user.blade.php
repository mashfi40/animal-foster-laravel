<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Foster Paradise</title>
  @include("admin.admincss") 
  </head>

  <body>
  <div class="container-scroller">
    @include("admin.navbar")

    <div style="position: absolute; top: 150px; right: 500px">
        <table bgcolor="grey" border="3px">
            <tr>
                <th style="padding: 60px">Name</th>
                <th style="padding: 60px">Email</th>
                <th style="padding: 60px">Action</th>
            </tr> 
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>  
            </tr>
            @endforeach    
        </table>
    </div>
  </div>
    @include("admin.adminscript") 
  </body>
</html>