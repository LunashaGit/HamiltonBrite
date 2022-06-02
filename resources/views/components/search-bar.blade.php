<section id="select-container">
    @foreach($categories as $category)
        <a href="/?category={{ $category->slug }}">{{ $category->name }}</a>
    @endforeach
  </section>
