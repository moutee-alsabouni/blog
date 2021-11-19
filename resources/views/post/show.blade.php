<x-layouts.app>
  <section class="hero is-large is-primary">
    <div class="container">
      <div class="hero-body has-text-centered">
        <p class="title">
          {{ $post->title }} <br/>
          <span class="tag is-danger"><a href="{{ route('posts.edit', $post) }}">edit</a></span>
        </p>
        <p class="subtitle">
          Moutee, is the author, <br/>
          Category: <span class="tag is-warning">{{$post->category->name}}</span>
        <br/>
        Tags:
          @foreach($post->tags as $tag)
          <span class="tag is-info">{{$tag->name}}</span>
        @endforeach
        </p>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <figure class="image is-128x128">
        <img src="{{ $post->featured_image }}">
      </figure>
      <p class="content">
        {{ $post->content }}
      </p>
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
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit blandit non. Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis.
              <br>
              <small><a>Like</a> · <a>Reply</a> · 3 hrs</small>
            </p>
          </div>
        </div>
      </article>
      <article class="media">
        <figure class="media-left">
          <p class="image is-64x64">
            <img src="https://bulma.io/images/placeholders/128x128.png">
          </p>
        </figure>
        <div class="media-content">
          <div class="field">
            <p class="control">
              <textarea class="textarea" placeholder="Add a comment..."></textarea>
            </p>
          </div>
          <div class="field">
            <p class="control">
              <button class="button">Post comment</button>
            </p>
          </div>
        </div>
      </article>
    </div>
  </section>
</x-layouts>
