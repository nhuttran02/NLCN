@php use App\Models\Menu; @endphp
@php use App\Models\article; @endphp
@extends('main')

@section('content')
    <link rel='stylesheet' id='classic-theme-styles-css' href='{{asset('gardening/style.css')}}' type='text/css'
          media='all'/>
    <section class="about_section mt-60" style="margin-top: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <figure>
                        <div class="about_thumb">
                            <img src="{{asset('gardening/images/staff.jpg')}}" alt="">
                        </div>
                        <figcaption class="about_content">
                            <h1>ABOUT THE BUSINESS & WEBSITE </h1>
                            <p>Welcome to Nstore, where you can freely find the best outfits for yourself</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->

    <!--services img area-->
    <!-- <div class="about_gallery_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <article class="single_gallery_section">
                        <figure>
                            <div class="gallery_thumb">
                                <img src="{{asset('gardening/images/2.jpeg')}}" alt="">
                            </div>
                            <figcaption class="about_gallery_content">
                                <h3>What do we do?</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                    architecto. The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of letters, as opposed to using ‘Content here, content here’, making it
                                    look like readable English.</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6">
                    <article class="single_gallery_section">
                        <figure>
                            <div class="gallery_thumb">
                                <img src="{{asset('gardening/images/3.jpeg')}}" alt="">
                            </div>
                            <figcaption class="about_gallery_content">
                                <h3>Meet the Team</h3>
                                <p>Yes, we’re experts in digital advertising, publishing, marketing, and more, but before everything else, we’re gardeners.
                                    That’s why we’re so passionate about helping you with your garden.
                                    Collectively, we’ve gardened in every region in the U.S.
                                    and many parts of the world too. We have expertise in a wide range of topics, from creating native gardens and wildlife habitats to small-space urban gardening, houseplants, and more.
                                    Coming soon, our team bio pages where you can get a peek at each of our gardens and learn more about the expertise we can share with you.

                                </p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div> -->
    <!--services img end-->


   
@endsection
