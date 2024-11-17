@extends('client.layouts.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-9   mb-5 mb-lg-0">
                    <article>
                        <div class="post-slider mb-4">
                            <img src="images/post/post-2.jpg" class="card-img" alt="post-thumb">
                        </div>

                        <h1 class="h2">
                            {{ $book->title }}
                        </h1>

                        <div class="content">
                            <p>{{ $book->publication }}</p>
                            <p>{{ $book->author }}</p>
                            <p>{{ $book->publisher }}</p>
                        </div>
                    </article>

                </div>

            </div>
        </div>
    </section>
@endsection
