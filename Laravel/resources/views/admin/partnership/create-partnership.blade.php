<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Partnership</title>
</head>
<body>
    <form action="/admin/partnership" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Nama</label>
        <input type="text" name="name_partnership" id="nama" value="">
        {{-- munculkan previe image --}}
        <img id="image-preview" src="" alt="" srcset="">
        <label for="">Logo</label>
        <img class="preview img-fluid">
        <input type="file" name="image_partnership" class="form-control" id="image" onChange="previewImage()">        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        function previewImage() {
            const input = document.querySelector('#image');
            const image = document.querySelector('.preview');

            const file = input.files[0];

            image.style.display = 'block';

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    image.src = e.target.result;
                }
                reader.readAsDataURL(file);
            } else {
                image.src = '';
            }
        }
    </script>
</body>
</html>