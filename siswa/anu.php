<form class="text-center" method="POST" enctype="multipart/form-data" id="form_upload">
  <button type="button" class="btn btn-sm btn-warning btn-flat" onclick="document.getElementsByName('foto')[0].click();">Ganti Foto</button>
  <input type="file" name="foto" style="display: none;" onchange="document.getElementById('submit_foto').click();" />
  <button type="submit" style="display: none;" id="submit_foto">Upload</button>
</form>
<script>
document.getElementById("form_upload").addEventListener("submit", function(e){
  e.preventDefault();
  var fileInput = document.getElementsByName('foto')[0];
  var filePath = fileInput.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
  // Validasi ekstensi file
  if(!allowedExtensions.exec(filePath))
  {
      alert('Format gambar yang boleh diupload hanyalah .jpeg/.jpg/.png/.gif!');
      fileInput.value = '';
      return false;
  }
  else
  {
    // Validasi ukuran file
    if(fileInput.files[0].size/1024 > 500)
    {
      alert('Foto profil maksimal berukuran 500Kb!');
    }
    else
    {
      var form_data = new FormData(this);
      form_data.append("foto", fileInput);
      $.ajax({
        url: '<?=$alamat_web?>/menu/ganti_foto.php',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(response){
              var res = JSON.parse(response);
              document.getElementById('user_avatar').src = "<?=$alamat_web?>/assets/img/avatar/" + res.foto;
              if(document.getElementById('user_avatar_big'))
              {
                document.getElementById('user_avatar_big').src = "<?=$alamat_web?>/assets/img/avatar/" + res.foto;
              }
            }
      });
    }
  }
});
</script>
