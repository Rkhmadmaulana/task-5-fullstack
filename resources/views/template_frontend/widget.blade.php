<div class="col-md-4">
  <!-- category widget -->
  <div class="aside-widget">
    <div class="section-title">
      <h2 class="title">Categories</h2>
    </div>
    <div class="category-widget">
      <ul>
        @foreach ($category_widget as $hasil)
          <li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }} <span>{{ $hasil->posts->count() }}</span></a></li>
        @endforeach
      </ul>
    </div>
  </div>
  <!-- /category widget -->

  <!-- post widget -->
  <div class="aside-widget">
    <div class="section-title">
      <h2 class="title">POSTINGAN TERBARU</h2>
    </div>
    <!-- post -->
    @foreach ($posts_widget as $data)
      <div class="post post-widget">
        <a class="post-img" href="blog-post.html"><img src="{{ asset($data->gambar) }}" alt=""></a>
        <div class="post-body">
          <div class="post-category">
            <a href="{{ route('blog.category', $data->category->slug) }}">{{ $data->category->name }}</a>
          </div>
          <h3 class="post-title"><a href="{{ route('blog.isi', $data->slug) }}">{{ $data->judul }}</a></h3>
        </div>
      </div>
    @endforeach
    <!-- /post -->
  </div>
  <!-- /post widget -->
</div>
