<!DOCTYPE html>
<html lang="en">
<head>

  @include('maincss')
  <style>
    nav {
        width: 100%;
        left: 0;
        z-index: 100;
        background-color: rgb(0, 64, 255);
        text-transform: uppercase;
    }

    .nav-link {
        color: white;
    }

    .nav-link:hover {
        color: white;
    }

    .dropdown-menu {
        max-height: 200px;
        overflow-y: scroll;
    }

    .filters-news {
        margin-top: 40px;
        padding: 0 8px;
    }

    section {
        display: block;
    }

    .carousel-inner {
        max-width: 100%;
        /* Adjust as needed */
        overflow: hidden;
        padding: 0 20px;
        /* Adjust horizontal padding */
    }

    .carousel-item {
        /* display: flex; */
        align-items: center;
        justify-content: center;
    }

    .card-img-top {
        max-width: 100%;
        /* Ensure images don't exceed container width */
        max-height: 400px;
        /* Set max height for vertical images */
        object-fit: contain;
        /* Maintain aspect ratio */
    }

    .carousel-control-prev {
        position: absolute;
        left: -2%;
    }

    .carousel-control-prev-icon {
        width: 30px;
        height: 50px;
        background-color: rgb(68, 68, 71);
    }

    .carousel-control-next {
        position: absolute;
        right: -2%;
    }

    .carousel-control-next-icon {
        width: 30px;
        height: 50px;
        background-color: rgb(68, 68, 71);
    }

    .carousel-indicators button[Type="button"] {
        height: 10px;
    }


</style>
</head>
<body>
    @include('header')

    @include('mainnav')

    <div class="container p-4 ">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <div class="text-center">
            <h1 class="">KMD News</h1>
            <hr>
          </div>

            <h3 class="text-center">{{ $post->title }}</h3>

            <div>
                {!! $post->description !!}
            </div>
<hr>
            <div class="text-primary">
                {!! $post->category !!}
                {!! $post->years !!}

                <a href="{{ url('/posts') }}" class="btn btn-primary float-end" tabindex="-1"
                    role="button" aria-disabled="true">Back</a>
            </div>



        </div>
      </div>
    </div>
@include('footer')
  </body>
</html>
