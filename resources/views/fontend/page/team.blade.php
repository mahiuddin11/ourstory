@extends('fontend.master')

@section('content')
    <div class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <span>Tag</span>
            <h3>Name</h3>

              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, id!</p>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-white">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href=""><img src="" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">Team Name</span>

              <h2><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptas ex repellat magnam soluta, natus sed.</a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left">
                  {{-- <img src="@if($post->user->image){{ asset($post->user->image) }} @else {{ asset('website/images/user.png') }} @endif" alt="Image" class="img-fluid"> --}}
                </figure>
                <span class="d-inline-block mt-1">By <a href="#">Name</a></span>
                {{-- <span>&nbsp;-&nbsp; {{ $post->created_at->format('M d, Y') }}</span> --}}
              </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
         
        </div>
        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
             {{-- {{ $posts->links() }} --}}
          </div>
      </div>
    </div>
    </div>
@endsection
