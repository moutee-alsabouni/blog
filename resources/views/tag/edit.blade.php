<x-layouts.app>
  <section class="section">
    <div class="container">
      <div class="title is-2">Edit {{ $tag->name }}</div>
      <form action="{{ route('tags.update', $tag)}}" method="POST">
        @csrf
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        @method('put')

        <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input class="input @error('name')is-danger @enderror" name="name" type="text" value="{{ old('name') ?? $tag->name}}" placeholder="Tag name" value="{{ $tag->name }}">
          </div>
          @error('name')
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
            <button class="button is-link">Update Tag</button>
          </div>
          <div class="control">
            <button class="button is-link is-light">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </section>

</x-layouts.app>
