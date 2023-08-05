@extends('layout')

@section('main')
 <!-- main -->
 <main class="container">
      <h2 class="header-title">All Blog Posts</h2>
      @if (session('status'))
        <p style="color:white; font-size:18px;font-weigth:500;;background:#1abd1a;padding:10px;margin-bottom:10px;border-radius:10px">{{session('status')}}</p>
    @endif
      <div class="searchbar">
        <form action="">
          <input type="text" placeholder="Search..." name="search" />

          <button type="submit">
            <i class="fa fa-search"></i>
          </button>

        </form>
      </div>
      <div class="categories">
        <ul>
          <li><a href="">Health</a></li>
          <li><a href="">Entertainment</a></li>
          <li><a href="">Sports</a></li>
          <li><a href="">Nature</a></li>
        </ul>
      </div>
      <section class="cards-blog latest-blog">
        
        @foreach ($posts as $post)
        <div class="card-blog-content">
                    
                    <img src="{{ asset($post->imagePath) }}" alt="" />
                    <p>
                        {{ $post->created_at->diffForHumans() }}
                        <span>Written By {{ $post->user->name }}</span>
                    </p>
                    <h4>
                        <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
                    </h4>
                    @auth
                        @if (auth()->user()->id === $post->user->id)
                            <div class="post-buttons" style="display:flex;justify-content:space-between;">
                                <a href="{{ route('blog.edit', $post) }}" style="background:green;padding:8px 27px;font-size: 14px;margin-top: 2px;color:white;border-radius:8px">Edit</a>
                                <form action="{{ route('blog.delete', $post) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input style="background:red;padding:8px 20px;color:white;border-radius:8px" type="submit" value=" Delete">
                                </form>
                            </div>
                        @endif
                    @endauth
        </div>
        
        @endforeach

        <!-- pagination -->
        
      </section>
      <div class="pagination" id="pagination">
          <a href="">&laquo;</a>
          <a class="active" href="">1</a>
          <a href="">2</a>
          <a href="">3</a>
          <a href="">4</a>
          <a href="">5</a>
          <a href="">&raquo;</a>
        </div>
        <br>
      <!-- Main footer -->
      
    </main>
@endsection