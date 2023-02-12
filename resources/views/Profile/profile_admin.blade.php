@extends('Template.template_admin')

@section('title', 'Admin Profile | GameSlot')

@section('content')
    <div class="col-md-5 container d-flex flex-wrap justify-content-center mt-5">
        <main class="form-signin w-100 m-auto">
            <form action={{route('login')}} method="POST" class="flex-wrap">
                @csrf
                <a class="navbar-brand px-2 d-flex justify-content-center text-center" href="/"><h1>GameSlot</h1></a>
                <h1 class="h3 mb-3 fw-normal d-flex justify-content-center text-center">My Profile</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" value="{{$profile->name}}" readonly>
                    <label for="floatingInput">Name</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" value="{{$profile->email}}" readonly>
                    <label for="floatingInput">Email</label>
                </div> 
                <div class="form-floating">
                    <input type="text" class="form-control" value="{{$profile->gender}}" readonly>
                    <label for="floatingInput">Gender</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" value="{{$profile->date_of_birth}}" readonly>
                    <label for="floatingInput">Date of Birth</label>
                </div>
            </form>
        </main>
    </div>
@endsection
