@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="d-flex  flex-column align-items-center" style="height: 100vh;">

            <article>
                <div class="card my-5 shadow-lg border-secondary border-opacity-50" style="width: 35rem;">

                    <div class="card-header text-center bg-dark-subtle fw-bold ">
                        <a href="{{ url('posts/my-first-post') }}">  My First Post </a>
                    </div>

                    <div class="card-body text-center " style="height: 10rem;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur at atque consequuntur
                            dignissimos, distinctio dolorem dolorum eaque eligendi hic illum in neque odit pariatur,
                            perspiciatis quos suscipit veniam? Mollitia.</p>
                    </div>

                    <div class="card-footer">
                        {{ \Carbon\Carbon::translateTimeString(now()) }}
                    </div>
                </div>
            </article>

            <article>
                <div class="card my-5 shadow-lg" style="width: 35rem;">

                    <div class="card-header text-center bg-info-subtle ">
                        <a href="{{ url('posts/my-second-post') }}"> My Second Post </a>
                    </div>

                    <div class="card-body text-center" style="height: 10rem;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eos facere voluptates.
                            Exercitationem mollitia nobis odit provident quidem repellat rerum saepe similique voluptatibus!
                            Accusamus distinctio dolore hic natus quos saepe?</p>
                    </div>

                    <div class="card-footer">
                        {{ now() }}
                    </div>
                </div>
            </article>

            <article>
                <div class="card my-5 shadow-lg" style="width: 35rem;">

                    <div class="card-header text-center bg-info-subtle ">
                        <a href="{{ url('posts/my-third-post') }}"> My Third Post </a>
                    </div>

                    <div class="card-body text-center" style="height: 10rem;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eos facere voluptates.
                            Exercitationem mollitia nobis odit provident quidem repellat rerum saepe similique voluptatibus!
                            Accusamus distinctio dolore hic natus quos saepe?</p>
                    </div>

                    <div class="card-footer">
                        {{now()}}
                    </div>
                </div>
            </article>

        </div>

    </div>

    @foreach( $posts as $post)

            @php
                ob_start();
        $filesize = readfile($post);
        $content = ob_get_clean();
        echo $content;
            @endphp


    @endforeach
@endsection



