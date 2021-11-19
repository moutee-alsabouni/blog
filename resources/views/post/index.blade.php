<x-layouts.app>
  <section class="hero is-medium is-success">
    <div class="container">
      <div class="hero-body has-text-centered">
        <p class="title">
          Sanabel Blog
        </p>
        <p class="subtitle">
          Welcome to our Blog, here you will learn about Laravel
        </p>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="title is-2 has-text-centered">
        Our Latest Posts
      </div>
      <div class="container has-text-centered">
        <a href="{{route("posts.create")}}">
          <button class="button is-success" style="margin: 2em">
            Create a new post
          </button>
        </a>
      </div>
      {{-- row --}}
      <div class="columns is-multiline">
        @foreach ($posts as $post)
        <div class="column is-4">
          <a href="{{ route('posts.show', $post) }}">
            <div class="card" style="height: 100%;">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="{{ $post->featured_image }}" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <p class="title is-4">{{ $post->title }}</p>
                    <p class="subtitle is-6">@moutee_sabouni</p>
                  </div>
                </div>
                <div class="content">
                  {{-- {{ $post->content }} --}}
                  {{ Str::limit($post->content, 80) }} ...
                  <br>
                  <a href="{{ route('posts.show', $post) }}">
                    Read more
                  </a>
                  <br>
                  <time datetime="2016-1-1">{{ $post->created_at }}</time>
                </div>
                <button class="button is-dark">
                  <a href="{{route('posts.edit', $post)}}" class="button is-dark">
                    <i class='fas fa-pen'></i>
                    Edit post
                  </a>
                </button>
                <button class="button is-dark">
                  <a href="{{route('posts.destroy', $post)}}" class="button is-dark">
                    <i class="fa fa-trash-o"></i>
                    Delete post
                  </a>
                </button>
              </div>
            </div>
          </a>
        </div>
        @endforeach
        <div class="column is-12">{{ $posts->links() }}</div>
      </div>
    </div>
  </section>
</x-layouts.app>
