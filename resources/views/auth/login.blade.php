<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AgriCare</title>
<!-- Multiple favicon sizes -->
<link rel="icon" type="image/png" sizes="32x32" href="https://burmese-agriculture.vercel.app/logo.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://burmese-agriculture.vercel.app/logo.png">
        <link rel="apple-touch-icon" href="https://burmese-agriculture.vercel.app/logo.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color:#F0F7E9;
            }
            .navbar {
                box-shadow: 0 2px 10px rgba(34, 197, 94, 0.15);
            }

            .navbar-brand {
                font-weight: 600;
                font-size: 1.5rem;
            }

            .dropdown-menu {
                border-radius: 12px;
                border: none;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            }

            .dropdown-item {
                padding: 0.75rem 1.5rem;
                transition: all 0.2s ease;
            }

            .dropdown-item:hover {
                background-color: #f0fdf4;
                color: #22C55D;
            }
            
        .card-img-top {
            width: 100%;
            height: 200px; /* Set a fixed height */
            object-fit: cover; /* Ensure the image covers the area without distortion */
        }
        .nature-gradient {
    background: linear-gradient(45deg, #1b8d53, #34c277);
    position: relative;
}

.leaf-pattern {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0.1;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 40' width='80' height='40'%3E%3Cpath fill='%23ffffff' d='M0 40a19.96 19.96 0 0 1 5.9-14.11 20.17 20.17 0 0 1 19.44-5.2A20 20 0 0 1 20.2 40H0zM65.32.75A20.02 20.02 0 0 1 40.8 25.26 20.02 20.02 0 0 1 65.32.76zM.07 0h20.1l-.08.07A20.02 20.02 0 0 1 .75 5.25 20.08 20.08 0 0 1 .07 0zm1.94 40h2.53l4.26-4.24v-9.78A17.96 17.96 0 0 0 2 40zm5.38 0h9.8a17.98 17.98 0 0 0 6.67-16.42L7.4 40zm3.43-15.42v9.17l11.62-11.59c-3.97-.5-8.08.3-11.62 2.42zm32.86-.78A18 18 0 0 0 63.85 3.63L43.68 23.8zm7.2-19.17v9.15L62.43 2.22c-3.96-.5-8.05.3-11.57 2.4zm-3.49 2.72c-4.1 4.1-5.81 9.69-5.13 15.03l6.61-6.6V6.02c-.51.41-1 .85-1.48 1.33zM17.18 0H7.42L3.64 3.78A18 18 0 0 0 17.18 0zM2.08 0c-.01.8.04 1.58.14 2.37L4.59 0H2.07z'%3E%3C/path%3E%3C/svg%3E");
}

.card {
    border-radius: 20px;
    overflow: hidden;
    backdrop-filter: blur(10px);
    background: rgba(255, 255, 255, 0.95);
}

.custom-input {
    border: 2px solid #e8f5e9;
    border-radius: 10px;
    padding: 12px 15px;
    transition: all 0.3s ease;
}

.custom-input:focus {
    border-color: #1b8d53;
    box-shadow: 0 0 0 0.25rem rgba(27, 141, 83, 0.15);
}



.farm-bg {
    background: linear-gradient(135deg, #ffffff, #f8faf8);
}

.nature-gradient-light {
    background: linear-gradient(45deg, #f1f8e9, #e8f5e9);
}

body {
    background: linear-gradient(135deg, #f1f8e9, #e8f5e9);
    min-height: 100vh;
}

.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label {
    color: #1b8d53;
    transform: scale(.85) translateY(-0.75rem) translateX(0.15rem);
}

.text-success {
    color: #1b8d53 !important;
}

.text-success:hover {
    color: #167445 !important;
    text-decoration: none;
}

.form-check-input:checked {
    background-color: #1b8d53;
    border-color: #1b8d53;
}
.leaf-btn {
                            background: linear-gradient(135deg, #2ecc71, #27ae60);
                            color: white;
                            padding: 12px 30px;
                            border-radius: 50px;
                            position: relative;
                            overflow: hidden;
                            z-index: 1;
                            transition: all 0.4s ease;
                            font-weight: 600;
                            letter-spacing: 0.5px;
                            width: 100%;
                            border: none;
                            box-shadow: 0 4px 15px rgba(46, 204, 113, 0.2);
                        }
                        
                        .leaf-btn::before {
                            content: '';
                            position: absolute;
                            top: 0;
                            left: -100%;
                            width: 100%;
                            height: 100%;
                            background: linear-gradient(135deg, #27ae60, #219a52);
                            transition: all 0.6s ease-in-out;
                            z-index: -1;
                        }
                        
                        .leaf-btn:hover::before {
                            left: 0;
                        }
                        
                        .leaf-btn:hover {
                            transform: translateY(-3px);
                            box-shadow: 0 6px 20px rgba(46, 204, 113, 0.3);
                            color: white;
                        }
                        
                        .leaf-btn:active {
                            transform: translateY(-1px);
                        }
                        
                        .leaf-btn i {
                            transition: all 0.3s ease;
                            margin-right: 8px;
                        }
                        
                        .leaf-btn:hover i {
                            transform: rotate(180deg);
                        }
                        
    
        </style>
    </head>
    <body class="antialiased">
        <!-- Navbar -->
    <!-- Update the navbar section -->
    <nav class="navbar navbar-expand-lg navbar-dark text-white sticky-top" style="background-color:#22C55D !important">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="https://burmese-agriculture.vercel.app/logo.png" alt="Logo" style="width:50px;height:50px;margin-right:10px">
                <a class="navbar-brand text-light" href="{{ url('/') }}">AgriCare</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
        
      </ul>
            <ul class="navbar-nav mr-auto">
            @foreach(App\Models\Category::whereNull('parent_id')->get() as $parent)
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ml-5 text-light" href="#" id="navbarDropdown{{ $parent->id }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ $parent->name }}
            </a>
            @if($parent->children->isNotEmpty())
                <div class="dropdown-menu" aria-labelledby="navbarDropdown{{ $parent->id }}">
                    @foreach($parent->children as $child)
                        <a class="dropdown-item" href="{{ route('categories.show', $child->id) }}">{{ $child->name }}</a>
                    @endforeach
                </div>
            @endif
        </li>
            @endforeach
            <li class="nav-item">
            <a class="nav-link ml-5 text-light" href="{{ route('books.index') }}">စာအုပ်စင်</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-5 text-light" href="{{route('questions-and-answers')}}">အမေးအဖြေ</a>
            </li>
                </ul>    
            <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                        @auth
                            
                        @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('agronomist'))
        <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('admin.posts.index') }}">Dashboard</a>
        </li>
    @endif
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @else
                          
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    <div class="row justify-content-center min-vh-100 align-items-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header text-white text-center py-4 nature-gradient position-relative overflow-hidden">
                    <div class="leaf-pattern"></div>
                    <i class="fas fa-tree mb-3" style="font-size: 2.5rem;"></i>
                    <h3 class="mb-0 fw-bold">{{ __('Welcome Back') }}</h3>
                    <p class="small mb-0 mt-2">Continue Your Growth Journey</p>
                </div>

                <div class="card-body p-4 farm-bg">
                    @if (session('success'))
                        <div class="alert alert-success mb-3">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control custom-input @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input id="password" type="password" class="form-control custom-input @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="current-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                       

                        <div class="d-grid gap-2 mb-3">
    <button type="submit" class="leaf-btn">
        <i class="fas fa-seedling"></i>{{ __('Sign In') }}
    </button>
</div>

                    </form>
                </div>
                <div class="card-footer text-center py-3 nature-gradient-light">
                    <p class="mb-0 text-dark">New to AgriCare? 
                        <a href="{{ route('register') }}" class="text-success fw-bold">Create Account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
