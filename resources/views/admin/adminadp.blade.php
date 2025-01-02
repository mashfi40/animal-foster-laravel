<!DOCTYPE html>
<html lang="en">
    
  <head>
  @include("admin.admincss")
 
  </head>
  <body>
  <div class="container-scroller">
    
    @include("admin.navbar")
    <div style="position: absolute; top:150px; right: 400px">
        <table bgcolor="black" border="3px">
            <tr style="background-color: black">
            <th style="padding: 30px">Customer Name</th>
                <th style="padding: 30px">Phone</th>
                <th style="padding: 30px">Address</th>
                <th style="padding: 30px">Breed Name</th>
                
               
                
            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->Name}}</td>
                <td>{{$data->Phone}}</td>
                <td>{{$data->Address}}</td>
                <td>{{$data->Breedname}}</td>
            
                
                
                
            </tr>
            
            @endforeach
        </table>
    </div>
  </div>
   
   
    @include("admin.adminscript")
   
  </body>
</html>