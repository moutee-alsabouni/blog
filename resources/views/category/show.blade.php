<x-layouts.app>
  <section class="hero is-large is-primary">
    <div class="container">
      <div class="hero-body has-text-centered">
        <p class="title">
          {{ $category->name }}<br/>
          <span class="tag is-danger"><a href="{{ route('categories.edit', $category) }}">edit</a></span>
        </p>
        <p class="subtitle">
          Moutee, is the author.<br/>
          Posts under this category are:
        @foreach ($category->posts as $post )
          <li> {{ $post->title }} </li>
        @endforeach
        </p>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <figure class="image is-128x128">
        <img src="{{ $category->icon }}">
      </figure>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <article class="media">
        <figure class="media-left">
          <p class="image is-64x64">
            <img src="https://bulma.io/images/placeholders/128x128.png">
          </p>
        </figure>
        <div class="media-content">
          <div class="content">
            <p>
              <strong>Barbara Middleton</strong>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Duis porta eros lacus, nec ultricies elit blandit non.
              Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis.
              <br>
              <small><a>Like</a> · <a>Reply</a> · 3 hrs</small>
            </p>
          </div>
        </div>
      </article>
    </div>
  </section>
</x-layouts>
