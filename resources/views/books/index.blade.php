<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Multiple favicon sizes -->
<link rel="icon" type="image/png" sizes="32x32" href="https://burmese-agriculture.vercel.app/logo.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://burmese-agriculture.vercel.app/logo.png">
        <link rel="apple-touch-icon" href="https://burmese-agriculture.vercel.app/logo.png">
        <title>AgriCare</title>

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
            
        .card-img-top {
            width: 100%;
            height: 200px; /* Set a fixed height */
            object-fit: cover; /* Ensure the image covers the area without distortion */
        }
        .dropdown-item:hover {
                background-color: #f0fdf4;
                color: #22C55D;
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
    
        </style>
    </head>
    <body class="antialiased">
        <!-- Navbar -->
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>  
        <!-- End Navbar -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">စာအုပ်စင်</h3>
                        </div>
                        <div class="card-body">
    <div class="container mt-5">
   
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center">
                <form class="my-4 mr-2 form-inline" action="{{ route('books.index') }}" method="GET">
                    @csrf
                    <label class="my-1 mr-4" for="author">စာရေးဆရာ</label>
                    <select class="custom-select my-1 mr-sm-2" id="author" name="author" onchange="this.form.submit()">
                        <option value="all">အားလုံး</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author }}" {{ request('author') == $author ? 'selected' : '' }}>{{ $author }}</option>
                        @endforeach
                    </select>
                    <label class="my-1 mr-4" for="category">အမျိုးအစား</label>
                    <select class="custom-select my-1 mr-sm-2" id="category" name="category" onchange="this.form.submit()">
                        <option value="all">အားလုံး</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </form>
            </div>
            <div class="row">
                @foreach ($books as $book)
                <div class="col-lg-3 col-md-4 my-2  ">
                    <a href="{{ route('books.show', $book->id) }}" class="book">
                        <div class="book-cover">
                            <img src="{{ Storage::url($book->cover_image) }}" class="img-fluid">
                        </div>
                        <h6 class="my-2" class="book-title">{{ $book->title }}</h6>
                        <small class="text-muted">{{ $book->author }}</small>
                    </a>
                </div>
                @endforeach
            </div>
            <nav aria-label="Page navigation">
                {{ $books->appends(request()->input())->links() }}
            </nav>
        </div>
    </div>


       <!-- Scripts -->
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
