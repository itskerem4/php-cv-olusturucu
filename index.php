<!doctype html>
<html lang="tr-TR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" lang="tr-Tr">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CV Oluşturucu</title>
  </head>
  <body class="bg-info">
    <form action="cv.php" method="POST" enctype="multipart/form-data">
    <div class="container">
      <div class="row">
        <h1 id="cv_heading">
          CV Oluşturucu
        </h1>
        <div class="col-md-6 bg-primary shadow p-4">
          <div class="mb-3">
            <label>Ad Soyad</label>
            <input type="text" name="fullname" placeholder="" class="form-control">
          </div>
          <div class="mb-3">
            <label>Uzmanlık Alanı</label>
            <input type="text" name="profession" placeholder="" class="form-control">
          </div>
          <div class="mb-3">
            <label>Resim</label>
            <input type="file" name="picture" class="form-control">
          </div>
          <div class="mb-3">
            <label>Hakkında</label>
            <textarea class="form-control" name="objective" rows="3">
            </textarea>
          </div>
          <div class="mb-3">
            <label>Kişisel Bilgiler</label>
            <input class="form-control" type="text" name="father" placeholder="Baba Adı">
            <input class="form-control" type="text" name="gender" placeholder="Cinsiyet(Sizin)">
            <input class="form-control" type="date" name="dob" placeholder="Doğum Tarihi">
            <input class="form-control" type="text" name="nationality" placeholder="Uyruk">
          </div>
          <div class="mb-3">
            <label>İletişim</label>
            <input type="text" name="address" placeholder="Adres" class="form-control">
            <input type="email" name="email" placeholder="E-Mail" class="form-control">
            <input type="text" name="mobile" placeholder="Telefon Numarası" class="form-control">
          </div>
          <div class="mb-3">
            <label>Eğitimler</label>
            <textarea class="form-control" name="education" id="edu"></textarea>
          </div>
        </div>
        <div class="col-md-6 bg-primary shadow p-4">
          <div class="mb-3">
            <div class="mb-3">
            <label>Deneyimler</label>
            <textarea class="form-control" name="experience" id="cv"></textarea>
          </div>
          </div>
          <div class="mb-3">
            <label>Beceriler</label>
            <textarea class="form-control" name="skills" id="skill">
            </textarea>
          </div>
          <div class="mb-3">
            <label>Sertifikalar</label>
            <input type="text" name="certificate1" placeholder="" class="form-control">
            <input type="text" name="certificate2" placeholder="" class="form-control">
            <input type="text" name="certificate3" placeholder="" class="form-control">
          </div>
          <div class="mb-3">
            <label>Diller</label>
            <input type="text" name="language1" placeholder="İngilizce A1" class="form-control">
            <input type="text" name="language2" placeholder="Almanca C2" class="form-control">
            <input type="text" name="language3" placeholder="Fransızca B2" class="form-control">
          </div>
          <div class="mb-3">
            <input type="submit" name="btn" class="btn btn-dark" value="CV Oluştur">
          </div>
        </div>
      </div>
    </div>
    </form>

    <!-- Online CDN Links --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
         CKEDITOR.replace( 'cv',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
         CKEDITOR.replace( 'skills',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
         CKEDITOR.replace( 'education',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
    </script>
  </body>
</html>