@extends('authentication.authLayout')

@section('signupContent')
    <!-- Sign Up Start -->
    <div class="container-fluid">

        {{-- @if (session('success'))
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
        @endif --}}
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





        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">

                <form action="{{ route('store') }}" method="POST" class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    @csrf

                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary">iManagement</h3>
                        </a>
                        <h3>Sign Up</h3>
                    </div>

                    <!-- Username Field -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="floatingText" placeholder="jhondoe" value="{{ old('name') }}">
                        <label for="floatingText">Username</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" id="floatingPasswordConfirm" placeholder="Confirm Password">
                        <label for="floatingPasswordConfirm">Confirm Password</label>
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Other Form Elements -->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="">Forgot Password</a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                    <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p>
                </form>

            </div>
        </div>
    </div>
    <!-- Sign Up End -->
@endsection
