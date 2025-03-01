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
            
        .card-img-top {
            width: 100%;
            height: 200px; /* Set a fixed height */
            object-fit: cover; /* Ensure the image covers the area without distortion */
        }
        
        </style>
        <script>
    function previewPhotos(event) {
        const container = document.getElementById("photo-upload-container");
        container.innerHTML = ""; // Clear previous previews

        Array.from(event.target.files).forEach(file => {
            if (file.type.startsWith('image/')) { 
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement("img");
                    img.src = e.target.result;
                    img.classList.add("preview-image");
                    img.style.width = "100px"; // Set a fixed width
                    img.style.height = "100px"; // Set a fixed height
                    img.style.margin = "5px";
                    img.style.borderRadius = "10px";
                    container.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        });
    }
</script>

    </head>
    <body class="antialiased">
        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">AgriCare</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
        
      </ul>
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
            <li class="nav-item">
            <a class="nav-link ml-5" href="{{ route('books.index') }}">စာအုပ်စင်</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-5" href="#">အမေးအဖြေ</a>
            </li>
                </ul>    
            <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                        @auth
                            
                        @if (auth()->user()->hasRole('admin'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.posts.index') }}">Dashboard</a>
                                </li>
                            @endif
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
    <div class="container mt-4">
        <div class="row">
            <!-- Category Selection Sidebar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">ကဏ္ဍအလိုက်ကြည့်ရန်</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            @foreach($categories->where('parent_id', 59) as $category)
                                <div class="list-group-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" 
                                               class="custom-control-input category-filter" 
                                               id="category-{{ $category->id }}"
                                               value="{{ $category->id }}"
                                               {{ in_array($category->id, (array)request('category', [])) ? 'checked' : '' }}>
                                        <label class="custom-control-label d-flex justify-content-between align-items-center" 
                                               for="category-{{ $category->id }}">
                                            {{ $category->name }}
                                            <span class="badge badge-primary badge-pill">
                                                {{ $category->questions()->count() }}
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Questions Display Section -->
            <div class="col-md-9">
                <div class="py-4 media">
                    <img src="https://greenwaymyanmar.com/img/farmer-icon.png" class="forum-post-user mr-3 img-fluid rounded-circle align-self-center" style="width: 40px; height: 40px;">
                    <div class="media-body">
                        @auth
                            <div data-toggle="modal" data-target="#questionModal" class="forum-masked">သင့်ကိုယ်ပိုင်မေးခွန်းမေးပါ</div>
                        @else
                            <div data-toggle="modal" data-target="#loginModal" class="forum-masked">မေးခွန်းမေးရန် အကောင့်ဝင်ပါ။</div>
                        @endauth
                    </div>
                </div>

                <div class="questions-container mt-4">
                    @if(request('category'))
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>
                                    ရွေးချယ်ထားသော ကဏ္ဍများ: 
                                    @foreach($categories->whereIn('id', (array)request('category')) as $selectedCategory)
                                        <span class="badge badge-primary">{{ $selectedCategory->name }}</span>
                                    @endforeach
                                </h5>
                                <a href="{{ url()->current() }}" class="btn btn-sm btn-outline-secondary">အားလုံးပြန်ကြည့်ရန်</a>
                            </div>
                        </div>
                    @endif
                    
                    @forelse($questions as $question)
                        @if(!request('category') || $question->categories->whereIn('id', (array)request('category'))->count() > 0)
                            <div class="card mb-3">
                                <div class="card-body py-3">
                                    <!-- User info section -->
                                    <div class="d-flex align-items-center mb-2">
                                        <img src="https://greenwaymyanmar.com/img/farmer-icon.png" class="rounded-circle mr-2" style="width: 32px; height: 32px;">
                                        <div>
                                            <h6 class="mb-0 small">{{ $question->user->name }}</h6>
                                            <small class="text-muted">{{ $question->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                    
                                    <!-- Question content -->
                                    <p class="card-text mb-2">{{ $question->question }}</p>
                                    
                                    <!-- Photos display -->
                                    @if($question->photos && is_array($question->photos))
                                        <div class="row">
                                            @foreach($question->photos as $photo)
                                                <div class="col-4 col-md-3 mb-2">
                                                    <img src="{{ Storage::url('questions/' . $photo) }}" 
                                                         class="img-fluid rounded question-photo" 
                                                         style="width: 100%; height: 120px; object-fit: cover; cursor: pointer;"
                                                         onclick="showFullImage('{{ Storage::url('questions/' . $photo) }}')">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
    
                                    <!-- Categories display -->
                                    <div class="mt-2">
                                        <small class="text-muted">
                                            <i class="fas fa-tags"></i>
                                            @foreach($question->categories as $category)
                                                <span class="badge badge-light">{{ $category->name }}</span>
                                            @endforeach
                                        </small>
                                    </div>

                                    <!-- Comments section -->
                                    <div class="mt-3 border-top pt-3">
                                        @auth
                                            <form action="{{ route('comments.store') }}" method="POST" class="mb-3">
                                                @csrf
                                                <input type="hidden" name="question_id" value="{{ $question->id }}">
                                                <div class="form-group">
                                                    <textarea name="comment" class="form-control" rows="2" placeholder="မှတ်ချက်ရေးရန်..." required></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-primary">မှတ်ချက်ပေးရန်</button>
                                            </form>
                                        @else
                                            <p class="text-muted small">မှတ်ချက်ပေးရန် <a href="{{ route('login') }}">အကောင့်ဝင်ပါ</a></p>
                                        @endauth
                               <div class="comments-list">
                                            @if($question->comments && count($question->comments) > 0)
                                                @foreach($question->comments as $comment)
                                                    <div class="d-flex mb-2">
                                                        <img src="https://greenwaymyanmar.com/img/farmer-icon.png" class="rounded-circle mr-2" style="width: 24px; height: 24px;">
                                                        <div class="bg-light p-2 rounded flex-grow-1">
                                                            <div class="d-flex justify-content-between">
                                                                <small class="font-weight-bold">{{ $comment->user->name }}</small>
                                                                <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                                            </div>
                                                            <p class="mb-0 small">{{ $comment->comment }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div class="alert alert-info">
                            @if(request('category'))
                                ရွေးချယ်ထားသော ကဏ္ဍအတွက် မေးခွန်းများ မရှိသေးပါ။
                            @else
                                မေးခွန်းများ မရှိသေးပါ။
                            @endif
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- Add these styles -->
<style>
    .card {
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .forum-masked {
        cursor: pointer;
        padding: 10px;
        border: 1px dashed #ddd;
        border-radius: 8px;
        background-color: #f8f9fa;
    }
    .forum-masked:hover {
        background-color: #e9ecef;
    }
</style>

<!-- Question Modal -->
<div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="questionModalLabel">အသစ် ဆွေးနွေး / မေးမြန်းရန်</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding-bottom: 80px;">
                <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data" id="questionForm">
                    @csrf
                    <!-- Update the category checkboxes section -->
                    <div class="form-group">
                        <label>အမျိုးအစားရွေးချင်သော အကြောင်းအရာ ရိုက်ထည့်ပါ <span class="text-danger">*</span></label>
                        <div class="category-checkboxes p-2 border rounded bg-light">
                            <div class="row g-2">
                                @foreach ($categories->where('parent_id', 59) as $category)
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input type="checkbox" name="category_id[]" 
                                                   class="form-check-input category-checkbox" 
                                                   id="category{{ $category->id }}"
                                                   value="{{ $category->id }}">
                                            <label class="form-check-label py-1 px-2 rounded w-100" for="category{{ $category->id }}">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="invalid-feedback" id="categoryError" style="display: none;">
                            အနည်းဆုံး အမျိုးအစားတစ်ခု ရွေးချယ်ပါ။
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea name="question" rows="5" placeholder="မိတ်ဆွေမေးချင်သော အကြောင်းအရာ ရိုက်ထည့်ပါ" class="form-control" required></textarea>
                    </div>

                    <!-- Replace the photo upload section and its related JavaScript -->
                    <div class="form-group">
    <label>ပုံတင်ရန် (တစ်ပုံချင်းစီရွေးပါ)</label>
    <div class="custom-file mb-2">
        <input type="file" name="photos[]" multiple accept="image/*" class="custom-file-input" id="photoInput">
        <label class="custom-file-label" for="photoInput">ပုံရွေးရန်</label>
    </div>
    <div id="photo-upload-container" class="d-flex flex-wrap mt-2 p-3"></div>
</div>

<style>
    #photo-upload-container {
        min-height: 100px;
        border: 2px dashed #ddd;
        border-radius: 8px;
        background-color: #f8f9fa;
        padding: 10px;
    }
    .preview-wrapper {
        position: relative;
        margin: 5px;
    }
    .preview-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 8px;
    }
    .remove-btn {
        position: absolute;
        top: -8px;
        right: -8px;
        background: #dc3545;
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 20px;
        cursor: pointer;
        font-size: 14px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const categoryFilters = document.querySelectorAll('.category-filter');
    
    categoryFilters.forEach(filter => {
        filter.addEventListener('change', function() {
            const selectedCategories = Array.from(categoryFilters)
                .filter(cb => cb.checked)
                .map(cb => cb.value);
            
            const url = new URL(window.location.href);
            url.searchParams.delete('category[]');
            
            if (selectedCategories.length > 0) {
                selectedCategories.forEach(category => {
                    url.searchParams.append('category[]', category);
                });
            }
            
            window.location.href = url.toString();
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const photoInput = document.getElementById('photoInput');
    const container = document.getElementById('photo-upload-container');
    const form = document.getElementById('questionForm');
    let selectedFiles = [];

    photoInput.addEventListener('change', function(e) {
        const files = Array.from(e.target.files);
        files.forEach(file => {
            if (file.type.startsWith('image/')) {
                selectedFiles.push(file);
            }
        });
        displayPhotos();
    });

    function displayPhotos() {
        container.innerHTML = '';
        const dt = new DataTransfer();
        
        selectedFiles.forEach((file, index) => {
            dt.items.add(file);
            const reader = new FileReader();
            reader.onload = function(e) {
                const wrapper = document.createElement('div');
                wrapper.className = 'preview-wrapper';

                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'preview-image';

                const removeBtn = document.createElement('div');
                removeBtn.className = 'remove-btn';
                removeBtn.innerHTML = '×';
                removeBtn.onclick = (e) => {
                    e.preventDefault();
                    selectedFiles.splice(index, 1);
                    displayPhotos();
                };

                wrapper.appendChild(img);
                wrapper.appendChild(removeBtn);
                container.appendChild(wrapper);
            };
            reader.readAsDataURL(file);
        });

        photoInput.files = dt.files;
        const label = document.querySelector('.custom-file-label');
        label.textContent = selectedFiles.length > 0 ? `${selectedFiles.length} ပုံရွေးချယ်ပြီး` : 'ပုံရွေးရန်';
    }

    form.addEventListener('submit', function(e) {
        if (selectedFiles.length > 0) {
            const dt = new DataTransfer();
            selectedFiles.forEach(file => dt.items.add(file));
            photoInput.files = dt.files;
        }
    });
});
</script>

                    <!-- Update the JavaScript for lightbox -->
                    <script>
                        function showFullImage(imgSrc) {
                            const lightbox = document.getElementById('lightbox');
                            const lightboxImg = document.getElementById('lightbox-img');
                            const closeLightbox = document.querySelector('.close-lightbox');

                            // Initialize for all question photos
                            document.querySelectorAll('.question-photo').forEach(photo => {
                                photo.onclick = function() {
                                    lightboxImg.src = this.src;
                                    lightbox.style.display = 'block';
                                };
                            });

                            // Close lightbox when clicking outside image
                            lightbox.onclick = function(e) {
                                if (e.target !== lightboxImg) {
                                    lightbox.style.display = 'none';
                                }
                            };

                            // Close on X button click
                            closeLightbox.onclick = function() {
                                lightbox.style.display = 'none';
                            };

                            // Close on ESC key
                            document.addEventListener('keydown', function(e) {
                                if (e.key === 'Escape') {
                                    lightbox.style.display = 'none';
                                }
                            });
                        };
                    

                    // Close on ESC key
                    document.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape') {
                            document.getElementById('lightbox').style.display = 'none';
                        }
                    });

                    // Initialize for all question photos
                    document.addEventListener('DOMContentLoaded', function() {
                        const photos = document.querySelectorAll('.question-photo');
                        photos.forEach(photo => {
                            photo.onclick = function() {
                                showFullImage(this.src);
                            };
                        });
                    });
                    </script>
                    <!-- Replace the JavaScript section -->
                    <script>
                         document.getElementById('questionForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent form submission initially
        
        const checkboxes = document.querySelectorAll('.category-checkbox');
        const errorDiv = document.getElementById('categoryError');
        const categoryBox = document.querySelector('.category-checkboxes');
        
        // Check if any checkbox is selected
        const isAnyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
        
        if (!isAnyChecked) {
            errorDiv.style.display = 'block';
            categoryBox.style.borderColor = '#dc3545';
            return false; // Stop form submission
        }
        
        // If validation passes, submit the form
        this.submit();
    });

    // Reset error state when a checkbox is checked
    document.querySelectorAll('.category-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const errorDiv = document.getElementById('categoryError');
            const categoryBox = document.querySelector('.category-checkboxes');
            if (this.checked) {
                errorDiv.style.display = 'none';
                categoryBox.style.borderColor = '#ddd';
            }
        });
    });
                        function previewPhotos(event) {
                            const container = document.getElementById("photo-upload-container");
                            const files = event.target.files;
                            container.innerHTML = "";
                    
                            Array.from(files).forEach((file, index) => {
                                if (file.type.startsWith('image/')) {
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        const imageContainer = document.createElement("div");
                                        imageContainer.className = "preview-image-container";
                                        
                                        const img = document.createElement("img");
                                        img.src = e.target.result;
                                        img.className = "preview-image";
                                        
                                        const removeButton = document.createElement("div");
                                        removeButton.className = "remove-image";
                                        removeButton.innerHTML = "×";
                                        removeButton.onclick = function() {
                                            imageContainer.remove();
                                            updateFileList(index);
                                        };
                                        
                                        imageContainer.appendChild(img);
                                        imageContainer.appendChild(removeButton);
                                        container.appendChild(imageContainer);
                                    };
                                    reader.readAsDataURL(file);
                                }
                            });
                    
                            updateLabel(files.length);
                        }
                    
                        function updateFileList(removedIndex) {
                            const input = document.getElementById('photoInput');
                            const dt = new DataTransfer();
                            const { files } = input;
                    
                            for(let i = 0; i < files.length; i++) {
                                if(i !== removedIndex) {
                                    dt.items.add(files[i]);
                                }
                            }
                    
                            input.files = dt.files;
                            updateLabel(input.files.length);
                        }
                    
                        function updateLabel(count) {
                            const label = document.querySelector('.custom-file-label');
                            label.textContent = count > 0 ? `${count} ပုံရွေးချယ်ပြီး` : 'ပုံရွေးရန်';
                        }
                    </script>
                    <!-- Replace the JavaScript section -->
                    <script>
                        function previewPhotos(event) {
                            const container = document.getElementById("photo-upload-container");
                            const files = event.target.files;
                            container.innerHTML = "";
                    
                            Array.from(files).forEach((file, index) => {
                                if (file.type.startsWith('image/')) {
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        const imageContainer = document.createElement("div");
                                        imageContainer.className = "preview-image-container";
                                        
                                        const img = document.createElement("img");
                                        img.src = e.target.result;
                                        img.className = "preview-image";
                                        
                                        const removeButton = document.createElement("div");
                                        removeButton.className = "remove-image";
                                        removeButton.innerHTML = "×";
                                        removeButton.onclick = function() {
                                            imageContainer.remove();
                                            updateFileList(index);
                                        };
                                        
                                        imageContainer.appendChild(img);
                                        imageContainer.appendChild(removeButton);
                                        container.appendChild(imageContainer);
                                    };
                                    reader.readAsDataURL(file);
                                }
                            });
                    
                            updateLabel(files.length);
                        }
                    
                        function updateFileList(removedIndex) {
                            const input = document.getElementById('photoInput');
                            const dt = new DataTransfer();
                            const { files } = input;
                    
                            for(let i = 0; i < files.length; i++) {
                                if(i !== removedIndex) {
                                    dt.items.add(files[i]);
                                }
                            }
                    
                            input.files = dt.files;
                            updateLabel(input.files.length);
                        }
                    
                        function updateLabel(count) {
                            const label = document.querySelector('.custom-file-label');
                            label.textContent = count > 0 ? `${count} ပုံရွေးချယ်ပြီး` : 'ပုံရွေးရန်';
                        }
                    </script>
                    <div class="text-right mt-4" style="position: absolute; bottom: 0; right: 0; padding: 20px; z-index: 1000;">
                        <button type="submit" class="btn btn-success">တင်ရန်</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Update the modal structure (place it before the scripts) -->
    <!-- Update the photo viewer modal structure -->
    
</div>
<!-- Photo Viewer Modal -->
<div class="modal fade" id="photoViewerModal" tabindex="-1" role="dialog" aria-labelledby="photoViewerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0">
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center p-0">
                <img id="enlargedPhoto" class="img-fluid" src="" alt="Enlarged photo">
            </div>
        </div>
    </div>
</div>

<!-- Add this to your existing styles -->
<style>
    .question-photo {
        cursor: pointer;
        transition: opacity 0.3s;
    }
    .question-photo:hover {
        opacity: 0.8;
    }
    #photoViewerModal .modal-dialog {
        max-width: 90vw;
    }
    #photoViewerModal .close {
        position: absolute;
        right: 20px;
        top: 20px;
        z-index: 1050;
        font-size: 30px;
        color: white;
        opacity: 1;
    }
    #enlargedPhoto {
        max-height: 100vh;
        width: 120vh;
        margin: auto;
    }
</style>

<!-- Update your JavaScript -->
<script>
    function showFullImage(imgSrc) {
        $('#enlargedPhoto').attr('src', imgSrc);
        $('#photoViewerModal').modal('show');
    }
</script>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function showFullImage(imgSrc) {
            $('#enlargedPhoto').attr('src', imgSrc);
            $('#photoViewerModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        }

        $(document).ready(function() {
            // Initialize photo viewer for all images
            $('.questions-container img.img-fluid').each(function() {
                $(this).addClass('question-photo');
                $(this).on('click', function() {
                    var imgSrc = $(this).attr('src');
                    $('#enlargedPhoto').attr('src', imgSrc);
                    $('#photoViewerModal').modal({
                        backdrop: true,
                        keyboard: true
                    });
                });
            });
        });
    </script>
</body>
</html>
