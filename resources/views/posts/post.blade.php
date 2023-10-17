<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<article class="container p-5 lh-base fst-normal fs-5 " style="width: 50rem;" >
<h1>My First Post</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur at atque consequuntur
                dignissimos, distinctio dolorem dolorum eaque eligendi hic illum in neque odit pariatur,
                perspiciatis quos suscipit veniam? Mollitia.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur at atque consequuntur
                dignissimos, distinctio dolorem dolorum eaque eligendi hic illum in neque odit pariatur,
                perspiciatis quos suscipit veniam? Mollitia.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur at atque consequuntur
                dignissimos, distinctio dolorem dolorum eaque eligendi hic illum in neque odit pariatur,
                perspiciatis quos suscipit veniam? Mollitia.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur at atque consequuntur
                dignissimos, distinctio dolorem dolorum eaque eligendi hic illum in neque odit pariatur,
                perspiciatis quos suscipit veniam? Mollitia.</p>



    <a class="btn bg-danger-subtle " href=" {{ route('posts') }}">Back to posts</a>
</article>

<?= $post ?>

</body>
</html>
