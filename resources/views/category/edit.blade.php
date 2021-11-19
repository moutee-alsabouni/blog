<x-layouts.app>
  <section class="section">
    <div class="container">
      <div class="title is-2">Edit {{ $category->name }}</div>
      <form action="/categories/{{ $category->id }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input class="input @error('name')is-danger @enderror" name="name" type="text" value="{{ old('name') }}" placeholder="Category name" value="{{ $category->name }}">
          </div>
          @error('name')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="field">
          <label class="label">Icon (URL)</label>
          <div class="control">
            <input class="input @error('icon')is-danger @enderror" name="icon" type="text" value="{{ old('icon') }}" placeholder="http://hi.com/pic.jpg" value="{{ $category->icon }}">
          </div>
          @error('icon')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="field">
          <label class="label">Slug</label>
          <div class="control">
            <input class="input @error('slug')is-danger @enderror" name="slug" type="text" value="{{ old('slug') ?? $tag->slug }}" placeholder="slug">
          </div>
          @error('slug')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link">Update Category</button>
          </div>
          <div class="control">
            <button class="button is-link is-light">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </section>

</x-layouts.app>
