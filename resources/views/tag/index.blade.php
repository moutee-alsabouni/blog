<x-layouts.app>
  <section class="hero is-medium is-primary">
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
        Our Tags
      </div>
      <div class="container has-text-centered">
        <a href="{{route("tags.create")}}">
          <button class="button is-primary" style="margin: 2em">
            Create a new tag
          </button>
        </a>
      </div>
      {{-- row --}}
      <div class="columns is-multiline">
        @foreach ($tags as $tag)
        <div class="column is-4">
          <a href="{{ route('tags.show', $tag) }}">
            <div class="card" style="height: 100%;">
              <div class="card-content">
                <div class="media">
                  <div class="media-content">
                    <p class="title is-4">{{ $tag->name }}</p>
                  </div>
                </div>
                <div class="content">
                  <time datetime="2016-1-1">{{ $tag->created_at }}</time>
                </div>
              </div>
              <div>
                <a href="/tags/{{$tag->id}}/edit" class="button is-dark">
                  Edit tag
                </a>
              </div>
              
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</x-layouts.app>
