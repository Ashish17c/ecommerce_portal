@extends('layouts.main')

@push('title')
<title>Login</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-user"></i> User Login</h1>
</div>

<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                        <img src="{{asset('assets/images/register.jpg')}}" class="rounded-3 img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div>
                            <form>
                                <div class="mb-3">
                                <div  class="form-text mb-2">Please enter your mobile number</div>
                                    <input type="tel" id="phone" name="phone" maxlength="10" class="form-control form-control-lg" placeholder="+91">
                                </div>

                                <div  class="form-text mb-2">Please enter your OTP</div>
                                    <input type="text" id="otp" name="otp" maxlength="4" class="form-control form-control-lg" placeholder="*****">
                                </div>

                                <div id="loginError" class="text-danger mt-3"></div>
                               
                                <div class="text-center p-3 my-5">Don't have an account? <a href="{{url('register')}}" type="btn" class="btn theme-orange-btn text-light form-control form-control-lg">Signup</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('loginForm');
        const phoneInput = document.getElementById('phone');
        const otpInput = document.getElementById('otp');
        const otpSection = document.querySelector('.otp-section');
        const errorDiv = document.getElementById('loginError');

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const phone = phoneInput.value;
            const otp = otpInput.value;

            if (!otpSection.classList.contains('d-none')) {
                 fetch('{{ route("authentication.verify.otp") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ 
                phone,
                otp 
            })
            .then(response => response.json())
            .then(data => {
                if (data.verified) {
                    window.location.href = data.redirect_url;
                } else {
                    errorDiv.textContent = data.message || 'Invalid OTP. Please try again.';
                }
            }); 
        }else{
            fetch('{{ route("check.phone") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ 
                    phone
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.exists) {
                     otpSection.classList.remove('d-none');
                    errorDiv.textContent = '';
                } else {
                    errorDiv.textContent = "Invalid phone number registered.";
                }
            });

        }
            
        });
    })
</script>

@endsection