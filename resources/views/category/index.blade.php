<x-layouts.app>
  <section class="hero is-medium is-warning">
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
        Our Categories
      </div>
      <div class="container has-text-centered">
        <a href="{{route("categories.create")}}">
          <button class="button is-warning" style="margin: 2em">
            Create a new category
          </button>
        </a>
      </div>
      {{-- row --}}
      <div class="columns is-multiline">
        @foreach ($categories as $category)
        <div class="column is-4">
          <a href="{{ route('categories.show', $category) }}">
            <div class="card" style="height: 100%;">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="{{ $category->icon }}" alt="Placeholder image">
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
                    <p class="title is-4">{{ $category->name }}</p>
                  </div>
                </div>
                <div class="content">
                  <time datetime="2016-1-1">{{ $category->created_at }}</time>
                </div>
              </div>
              <div>
                <a href="/categories/{{$category->id}}/edit" class="button is-dark">
                  Edit category
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

