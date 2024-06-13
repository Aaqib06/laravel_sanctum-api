<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1> users </h1>
<a href="{{route('user.create')}}" class="btn btn-primary">add user</a>

<div class="card-body">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
<table class="table">  
<thead>  
<tr>  
<td>  
ID </td>  
<td>  
 Name </td>  
<td>  
email</td>  
<td>  
city</td>  
<td>  
    roles</td> 
    <td>  
        Actions</td> 
</tr>  

</tr>  
</thead>  
<tbody>  
@foreach($data as $user)  
        <tr border="none">  
            <td>{{$user->id}}</td>  
            <td>{{$user->name}}</td>  
            <td>{{$user->email}}</td>  
            <td>{{$user->city}}</td>    
            <td>{{$user->roles}}</td>    
 
    <td>
        <form action ="{{route('user.destroy',$user->id)}}" method="POST"> 
@csrf
@method('DELETE')
            <button type="submit"class="btn btn-danger ">Delete</a> 
              </form>
            
        <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary">Edit</a>
        </td>

  
        </tr>  
@endforeach  
</tbody>  
</table>  

<div>
{{$data->links()}}

</div>
<style>
.w-5{
    display: none;
}


</style>