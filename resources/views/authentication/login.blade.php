@extends('authentication.authLayout')


@section('signinContent')
        <!-- Sign In Start -->
        <div class="container-fluid">

            @if (session('success'))
            @push('scripts')
                <script>
                    Swal.fire({
                        title: 'Success!',
                        text: "{{ session('success') }}",
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                </script>
            @endpush
           @endif 

           @if (session('error'))
            @push('scripts')
                <script>
                    Swal.fire({
                        title: 'Error!',
                        text: "{{ session('error') }}",
                        icon: 'error',
                        confirmButtonText: 'Try Again'
                    });
                </script>
            @endpush
           @endif

           @push('scripts')
           @if (session('logout'))
               <script>
                   Swal.fire({
                       title: 'Logout Successful!',
                       text: "{{ session('logout') }}",
                       icon: 'success',
                       confirmButtonText: 'OK'
                   });
               </script>
           @endif
       @endpush
       

            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    
                    <form action="{{ route("signIn") }}" method="POST" class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        @csrf
                       
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary">iManagement</h3>
                            </a>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>

                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        <p class="text-center mb-0">Don't have an Account? <a href="{{ route('register') }}">Sign Up</a></p>
                    </form>

                </div>
            </div>
        </div>
        <!-- Sign In End -->
@endsection