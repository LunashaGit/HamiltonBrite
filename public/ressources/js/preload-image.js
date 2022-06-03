const chooseFile = document.getElementById("choose-file");
const imgPreview = document.getElementById("img-preview");

[type="file"] {
    height: 0;  
    width: 0;
    overflow: hidden;
  }
  [type="file"] + label {
    font-family: sans-serif;
    background: #f44336;
    padding: 10px 30px;
    border: 2px solid #f44336;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
    transition: all 0.2s;
  }
  [type="file"] + label:hover {
    background-color: #fff;
    color: #f44336;
  }