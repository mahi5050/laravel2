<!DOCTYPE html>
<html>
<head>
<title>index</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    
<br>	
<div class="container-fluid">
<div class="row">	
<div class="float-right">
<a class="btn btn-primary" href="product/create">Add task</a>
<br><br>
</div>
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
            <th>ID</th>
            <th>Catagory</th>
            <th>Product Name</th>
            <th>Model Name</th>
            <th>Description</th>
            <th>Images</th>
            <th>Edit</th>
            <th>show</th>
            <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($product as $pro)
        <tr>
        <th>{{$pro->id}}</th>
        <th>{{$pro->catagory}}</th>
        <th>{{$pro->productname}}</th>
        <th>{{$pro->modelname}}</th>
        <th>{{$pro->description}}</th>
        <th>{{$pro->file}}</th>
        <th><button class="btn btn-success">Edit</button></th>
        <th><button class="btn btn-primary">Show</button></th>
        <th><button class="btn btn-danger">Delete</button></th>
        </tr>
       @endforeach
      </tbody>
    </table>
	
</div>
</div>



</body>
</html>
