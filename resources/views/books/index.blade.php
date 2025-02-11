<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
            }
        </style>
    </head>
    <body class="antialiased">
        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">AgriCare</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                @foreach(App\Models\Category::whereNull('parent_id')->get() as $parent)
                 <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle ml-5" href="#" id="navbarDropdown{{ $parent->id }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                </ul> 
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
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
<div class="container mt-5">
    <div class="row">
        <div class="col-md-9">
            <div class="d-flex">
                <form class="my-4 mr-2 form-inline" action="https://greenwaymyanmar.com/books" method="POST">
                    <input type="hidden" name="_token" value="rADzb5vmtOwYQlIx8oOZJS4ROSUF5hcLKxFVHU7W">
                    <label class="my-1 mr-2" for="author">စာရေးဆရာ</label>
                    <select class="custom-select my-1 mr-sm-2" id="author" name="author" onchange="this.form.submit()">
                        <option value="all">အားလုံး</option>
                        <option value="19">အစိမ်းရောင်လမ်း</option>
                        <option value="22">စိုက်ပျိုးရေးဦးစီးဌာန</option>
                        <option value="42">Dr. Khin Hnin Yu</option>
                        <option value="39">ko khun</option>
                        <option value="5714">Kyaw Swar Win</option>
                        <option value="17367">ကမ္ဘာ့ငါးအဖွဲ့</option>
                        <option value="200">ဆင်းသီဟ</option>
                        <option value="14">ဒေါက်တာ ခင်မာဌေး - (စိုက်/သု)</option>
                        <option value="10653">internews</option>
                        <option value="5">သိန်းစိုးမင်း</option>
                        <option value="36">ဦးဘဟိန်း</option>
                    </select>
                    <label class="my-1 mr-2" for="category">အမျိုးအစား</label>
                    <select class="custom-select my-1 mr-sm-2" id="category" name="category" onchange="this.form.submit()">
                        <option value="all">အားလုံး</option>
                        <option value="2">အထွေထွေ ဗဟုသုတ</option>
                        <option value="5">အပင်အာဟာရ</option>
                        <option value="6">စိုက်ပျိုးနည်း</option>
                        <option value="7">ပိုးမွှားရောဂါ</option>
                        <option value="8">စိုက်ပျိုးစီးပွား</option>
                        <option value="10">ရိတ်သိမ်းချိန်လွန်နည်းပညာ</option>
                        <option value="11">တန်ဘိုးမြှင့်ထုတ်ကုန်</option>
                        <option value="12">စိုက်ပျိုး ရေ</option>
                        <option value="13">စိုက်ပျိုး ဗဟုသုတ</option>
                        <option value="14">အာဟာရနှင့် ကျန်းမာရေး</option>
                        <option value="15">ပတ်ဝန်းကျင်ဆိုင်ရာ</option>
                        <option value="16">အတွေးအမြင်ဆောင်းပါး</option>
                        <option value="17">စိုက်ပျိုးရေး ဥပဒေများ</option>
                        <option value="21">မွေးမြူရေး ဆောင်းပါးများ</option>
                        <option value="35">ငါး</option>
                        <option value="37">ငွေကြေးစီမံခန့်ခွဲမှု</option>
                        <option value="41">ရေလုပ်ငန်း</option>
                        <option value="51">မွေးမြူနည်း</option>
                    </select>
                </form>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <a href="https://greenwaymyanmar.com/books/happy_fish_cook_book" class="book">
                        <div class="book-cover">
                            <img src="https://greenway.sgp1.digitaloceanspaces.com/book_covers/Happy Cook.png" class="img-fluid">
                        </div>
                        <h2 class="book-title">ပျော်ရွှင်ဖွယ် ငါးဟင်းချက်နည်းစာအုပ်</h2>
                        <small class="text-muted">ကမ္ဘာ့ငါးအဖွဲ့</small>
                    </a>
                </div>
                <!-- Repeat similar blocks for other books -->
            </div>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="https://greenwaymyanmar.com/books?page=2">2</a></li>
                    <li class="page-item"><a class="page-link" href="https://greenwaymyanmar.com/books?page=3">3</a></li>
                    <li class="page-item"><a class="page-link" href="https://greenwaymyanmar.com/books?page=4">4</a></li>
                    <li class="page-item"><a class="page-link" href="https://greenwaymyanmar.com/books?page=5">5</a></li>
                    <li class="page-item"><a class="page-link" href="https://greenwaymyanmar.com/books?page=6">6</a></li>
                    <li class="page-item"><a class="page-link" href="https://greenwaymyanmar.com/books?page=7">7</a></li>
                    <li class="page-item"><a class="page-link" href="https://greenwaymyanmar.com/books?page=8">8</a></li>
                    <li class="page-item">
                        <a class="page-link" href="https://greenwaymyanmar.com/books?page=2">→</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

       <!-- Scripts -->
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
