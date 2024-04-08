<div class="container mt-3 px-5 mb-3">
    <div class="row row-cols-1 row-cols-md-2 g-3">
        @foreach ($posts as $post)
            <div class="col">
                <div class="card">
                    {{-- <img src="{{ $post->$image }}" class="card-img-top" alt="..."> --}}
                    <div class="card-body shadow">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        {{-- Use {!! !!} to output HTML without escaping --}}
                        <p id="post_body" class="card-text">{!! $post->description !!}</p>
                        <small class="text-body-secondary">{{ $post->category }}
                            <span class="mx-1">|</span>
                            {{ $post->years }}</small>
                        <a href="{{ url('show', $post->id) }}" class="btn btn-primary float-end" tabindex="-1"
                            role="button" aria-disabled="true">See More</a>
                    </div>
                </div>
            </div>

        @endforeach


    </div>

    {{-- <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav> --}}
      {{ $posts->links('pagination::bootstrap-5') }}
</div>
<div class="container">


</div>


