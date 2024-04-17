
<div class="file-upload">

  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add File</button>

  <div class="upload-wrap">
    <input class="file-upload-input" type='file' onchange="readURL(this);" />

  </div>
  <div class="file-upload-content">
    <img class="file-upload" src="#" alt="Your File" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded File</span></button>
    </div>
  </div>
</div>
