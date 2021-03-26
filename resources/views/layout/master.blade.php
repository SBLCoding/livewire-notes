<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Notes 📝</title>

    <script src="https://kit.fontawesome.com/90becf6d73.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    @livewireStyles
</head>
<body>
    @include('includes._nav_master')

    <div class="container-fluid">
        @livewire('note.note-form')
        @livewire('note.note-card')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
        let toastEl = document.querySelector('.toast')
        let toast = new bootstrap.Toast(toastEl)

        window.addEventListener('showToast', event => {
            toast.show()
        })
    </script>
    @livewireScripts
</body>
</html>