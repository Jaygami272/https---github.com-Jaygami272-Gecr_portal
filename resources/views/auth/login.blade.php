
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Radial Gradient Background */
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
                hsl(218, 41%, 35%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
        }

        /* Custom shapes */
        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        /* Glassmorphism effect */
        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }

        /* Input and label styling */
        .form-outline {
            position: relative;
        }

        .form-outline input {
            padding-top: 1.25rem;
            padding-bottom: 0.25rem;
        }

        .form-outline label {
            position: absolute;
            top: 0.75rem;
            left: 0.75rem;
            transition: all 0.2s ease-in-out;
            pointer-events: none;
            font-size: 1rem;
            color: #6c757d;
        }

        .form-outline input:focus + label,
        .form-outline input:not(:placeholder-shown) + label {
            top: -1.5rem;
            left: 0.75rem;
            font-size: 0.9rem;
            color: #0d6efd;
        }
        
    </style>
</head>
<body>
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden min-vh-100 ">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 ">
            <div class="row gx-lg-5 align-items-center mb-5">
                <!-- Left Column: Text Content -->
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        The best offer <br />
                        <span style="color: hsl(218, 81%, 75%)">for your Education</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, expedita iusto veniam atque, magni tempora mollitia dolorum consequatur nulla, neque debitis eos reprehenderit quasi ab ipsum nisi dolorem modi. Quos?
                    </p>
                </div>

                <!-- Right Column: Form and Decorative Shapes -->
                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <!-- Decorative Shapes -->
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <!-- Card with Form -->
                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form method="post" action="{{ url('/login') }}" class="row g-3 needs-validation" novalidate>
                                @csrf
                                <p class="text-center fw-bold mb-4">Log in</p>

                                <!-- Username Input -->
                                {{-- <div class="form-outline mb-4">
                                    <input type="text" id="username" class="form-control" placeholder=" " required />
                                    <label class="form-label" for="username">Username</label>
                                </div> --}}
                                <div>
                                    <input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" id="username">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                 </div>

                                <!-- Password Input -->
                                <div>
                                    
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password">
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    
                                    

                                <!-- Checkbox -->
                               

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block mb-4">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</body>
</html>