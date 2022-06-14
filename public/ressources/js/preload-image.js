function showPreview(event) {
  if (event.target.files.length > 0) {
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("img-preview");
      var container = document.getElementById("container");

      preview.classList.remove("hidden");
      container.classList.remove("hidden");
      preview.style.display = "block";
      container.style.display = "block";
      preview.src = src;
  }
}


