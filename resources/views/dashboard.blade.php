<h1> welcome to dashboard </h1>
<a href="{{route('logout')}}" class="btn btn-primary">logout</a>

{{Auth::user()}}
@if(Gate::allows('isAdmin')){
    <a href="{{route('/')}}" class="btn btn-primary">show</a>
}
    
@endif