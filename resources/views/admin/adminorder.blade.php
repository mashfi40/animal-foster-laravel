<!DOCTYPE html>
<html lang="en">
    
  <head>
  @include("admin.admincss")
 
  </head>
  <body>
  <div class="container-scroller">
    
    @include("admin.navbar")
    <div style="position: absolute; top:150px; right: 200px">
        <table bgcolor="black" border="3px">
            <tr style="background-color: black">
            <th style="padding: 30px">Customer Name</th>
                <th style="padding: 30px">Phone</th>
                <th style="padding: 30px">Address</th>
                <th style="padding: 30px">Product Name</th>
                <th style="padding: 30px">Amount</th>
                <th style="padding: 30px">Price</th>
                
                <th style="padding: 30px">Total Price</th>
                
            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->Name}}</td>
                <td>{{$data->Phone}}</td>
                <td>{{$data->Address}}</td>
                <td>{{$data->Productname}}</td>
                <td>{{$data->Amount}}</td>
                <td>{{$data->Price}}</td>
                <td>{{$data->Price * $data->Amount}}</td>
                
                
            </tr>
            
            @endforeach
        </table>
    </div>
  </div>
   
   
    @include("admin.adminscript")
   
  </body>
</html>