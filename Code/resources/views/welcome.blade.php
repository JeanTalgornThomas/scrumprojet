<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.87.0">
        <title>Anti-Covi</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
        
        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#7952b3">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    .public-header {
    height:70vh;
    min-height:250px;
    background-size:cover;
    background-position-x: center;
    background-image:url('https://cdnuploads.aa.com.tr/uploads/Contents/2020/04/21/thumbs_b_c_de7fe0b9aed85dbeb6fc79924ea0ddc3.jpg?v=221159');
    opacity: 0.9;
}
/* stylelint-disable selector-list-comma-newline-after */
.blog-header {
    line-height: 1;
    border-bottom: 1px solid #e5e5e5;
}
.blog-header-logo {
    font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
    font-size: 2.25rem;
}

.blog-header-logo:hover {
    text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
    font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
}

.display-4 {
    font-size: 2.5rem;
}
@media (min-width: 768px) {
    .display-4 {
        font-size: 3rem;
    }
}

.nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
}

.nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
}

.nav-scroller .nav-link {
    padding-top: .75rem;
    padding-bottom: .75rem;
    font-size: .875rem;
}

.card-img-right {
  height: 100%;
  border-radius: 0 3px 3px 0;
}

.flex-auto {
  flex: 0 0 auto;
}

.h-250 {
    height: 250px; 
}
@media (min-width: 768px) {
    .h-md-250 { height: 250px; }
}

/* Pagination */
.blog-pagination {
    margin-bottom: 4rem;
}
.blog-pagination > .btn {
    border-radius: 2rem;
}

/*
 * Blog posts
 */
.blog-post {
    margin-bottom: 4rem;
}
.blog-post-title {
    margin-bottom: .25rem;
    font-size: 2.5rem;
}
.blog-post-meta {
    margin-bottom: 1.25rem;
    color: #727272;
}

/*
 * Footer
 */
.blog-footer {
    padding: 2.5rem 0;
    color: #727272;
    text-align: center;
    background-color: #f9f9f9;
    border-top: .05rem solid #e5e5e5;
}
.blog-footer p:last-child {
    margin-bottom: 0;
}
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}
</style>    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">Anti-Covid</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
                <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div>
                <a class="btn btn-sm btn-outline-secondary" href="#">Panier</a>
            </div>
        </div>
    </header>
</div>

    </head>
    <body>
<header class="public-header">
        <div class="row">
                <div class="col-12 text-center" style='position:absolute;top:35vh;left:0;z-index: 1000; font-size:30px'>
                    <span class="banner-title" style="color:white">Prticipez à la lutte contre l’épidémie </span>
                    <div style='font-size:1.5rem;margin-bottom:1rem;color:white' >en réduisant les risques de transmission</div>
                    <div style="font-size:1.5em;margin-bottom:2em;font-family: 'Playfair Display', serif;font-weight: bold;color:white">Anti-Covid vous propose des produits qui ...</div>
                    <a href="#"><button class="btn btn-primary btn-lg" style="font-weight:600;font-size:1rem;border-radius: 2rem;border-color: #74c0fc;background-color:#74c0fc; width:17rem; padding: 18px 0">Voir tous les produits</button></a>
                </div>
            </div>
</header>



<main class="container">
    <div class="nav-scroller py-1 mb-2">
        <a class="p-2 link-secondary" href="#">Produits</a>
        <a class="p-2 link-secondary" href="#">Catégories</a>    
    </div>
<div class="row mb-2">
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">Masque</strong>
                <h3 class="mb-0">Produit (1)</h3>
                <div class="mb-1 text-muted">Prix</div>
                    <p class="card-text mb-auto">Description</p>
                </div>
            <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">image-produit</text></svg>
        </div>
    </div>
</div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Gant</strong>
          <h3 class="mb-0">Produit (2)</h3>
          <div class="mb-1 text-muted">Prix</div>
          <p class="card-text mb-auto">Description</p>
          <a href="#" class="stretched-link btn btn-primary">Voir le produit</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">image-produit</text></svg>

        </div>
      </div>
    </div>
  </div>

  <div class="row mb-2">

  


    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Blouse</strong>
          <h3 class="mb-0">Produit (3)</h3>
          <div class="mb-1 text-muted">Prix</div>
          <p class="card-text mb-auto">Description</p>
          <a href="#" class="stretched-link btn btn-primary">Voir le produit</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">image-produit</text></svg>

        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Gel</strong>
          <h3 class="mb-0">Produit (4)</h3>
          <div class="mb-1 text-muted">Prix</div>
          <p class="card-text mb-auto">Description</p>
          <a href="#" class="stretched-link btn btn-primary">Voir le produit</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">image-produit</text></svg>

        </div>
      </div>
    </div>
  </div>

  

        <div class="p-4">
          <h4 class="fst-italic">Rejoignez-nous</h4>
          <ol class="list-unstyled">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Github</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="blog-footer">
</footer>
</body>
</html>