 <!-- Top navbar -->
 <div class="top-navbar">
     <p></p>
     <div class="icons" id="loginDiv"><a href="{{ route('login') }}"><img src="./images/register.png" alt="" width="18px">Login</a>
         <a href="{{ route('register') }}"><img src="./images/register.png" alt="" width="18px">Register</a>
     </div>
 </div>
 <!-- end Top navbar -->

 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg" id="navbar">
     <div class="container-fluid">
         <a class="navbar-brand" href="index.html" id="logo"><span id="span1">E</span>Lectronic
             <span>Shop</span></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span><img src="./public/images/menu.png" alt="" width="30px"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('products.index') }}">Product</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Category
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(67 0 86);">
                         @foreach($categoryList as $category)
                         <li><a class="dropdown-item" href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></li>
                         <!-- <li><a class="dropdown-item" href="category.html?categoryId=2">Houseware</a></li>
                            <li><a class="dropdown-item" href="category.html?categoryId=3">Smart Watch</a></li>
                            <li><a class="dropdown-item" href="category.html?categoryId=4">Headphone</a></li>
                            <li><a class="dropdown-item" href="category.html?categoryId=5">Laptop</a></li>
                            <li><a class="dropdown-item" href="category.html?categoryId=6">PC Moniter</a></li> -->
                         @endforeach
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="./about.html">About</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="./contact.html">Contact</a>
                 </li>
             </ul>
             <form class="d-flex" id="search" action="{{ route('search') }}">
                 <input name="key" class="form-control me-2" type="search" placeholder="Search ....." aria-label="Search">
                 <button class="btn btn-outline-success" type="submit">Search</button>
                 <div class="cart">
                     <a href="{{ route('cart.index') }}"><button type="button" class="btn  position-relative text-wrap">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="shopping-cart" class="lucide lucide-shopping-cart">
                                 <circle cx="8" cy="21" r="1"></circle>
                                 <circle cx="19" cy="21" r="1"></circle>
                                 <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                             </svg>
                             <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                 <span class="visually-hidden">New alerts</span>
                             </span>
                         </button>
                     </a>
                 </div>
             </form>
         </div>
     </div>
 </nav>
 <!-- end Navbar -->