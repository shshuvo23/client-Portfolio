@extends('website.master')

@section('slide')
<div class="section started">
    <div class="slide" style="background-image: url('{{ asset($lastSlide->image) }}');">
    </div>
    <div class="centrize full-width">
        <div class="vertical-center">
            <div class="st-title align-center">
                <div class="typing-title">
                    <p>Designer</p>
                    <p>Photographer</p>
                    <p>Vedio Editor</p>
                    <p>Freelancer</p>
                </div>
                <span class="typed-title"></span>
            </div>
            <div class="socials">
                <a target="blank" href="https://www.facebook.com/"><i class="fa-brands fa-facebook fa-beat fa-2xl"></i></a>
                <a target="blank" href="https://github.com/"><i class="fa-brands fa-instagram fa-flip fa-2xl"></i></a>
                <a target="blank" href="https://twitter.com/"><i class="fa-brands fa-linkedin fa-bounce fa-2xl"></i></a>
                <a target="blank" href="https://www.youtube.com/"><i class="fa-brands fa-dribbble fa-shake fa-2xl"></i></a>
                <a target="blank" href="https://www.behance.net/sadimahmudfoysalovi"><i class="fa-brands fa-behance fa-fade fa-2xl"></i></a>
            </div>
        </div>
    </div>
    <a href="#" class="mouse-btn"><i class="icon ion ion-chevron-down"></i></a>
</div>
@endsection
@section('body')
<div class="section about align-left" id="about-section">
    <div class="fw">
        <div class="row">
            <div class="col col-m-12 col-t-4 col-d-4">
                <div class="profile">
                    @if ($lastImage)
                        <img src="{{ asset($lastImage->image) }}" alt="Last uploaded image">
                    @else
                        No images found.
                    @endif
                </div>
            </div>
            <div class="col col-m-12 col-t-8 col-d-8">
                <div class="text-box">
                    <h1 class="namep">Sadi Mahmud Foysal Ovi,</h1>
                    <p class="nameg">Graphic Designer</p>
                    <p>
                        I have rich experience in web site design & building and customization. Also I am
                        good at html, css, javascript, wordpress, php, jquery, bootstrap. I love to talk
                        with you about our unique approach. Feel free to contact me writing an email with
                        your project idea.
                    </p>
                </div>
                <div class="bts">
                    <a href="{{asset('/')}}website/CV__Sadi Mahmud Foysal.pdf" class="btn extra category">View Resume</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section Services -->
<div class="section services gray align-left" id="services-section">
    <div class="fw">
        <div class="titles">
            <div class="title">What I Do</div>
        </div>
        <div class="row">
            <div class="col col-m-12 col-t-6 col-d-4">
                <div class="service-item">
                    <div class="circle"><i class="icon ion ion-ios-browsers-outline"></i></div>
                    <div class="name">UI/UX Design</div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam.</p>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-4">
                <div class="service-item">
                    <div class="circle"><i class="icon ion ion-ios-lightbulb-outline"></i></div>
                    <div class="name">Brand Identity</div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam.</p>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-4">
                <div class="service-item">
                    <div class="circle"><i class="icon ion ion-ios-color-wand-outline"></i></div>
                    <div class="name">Web Design</div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam.</p>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-4">
                <div class="service-item">
                    <div class="circle"><i class="icon ion ion-social-android-outline"></i></div>
                    <div class="name">Mobile Apps</div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam.</p>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-4">
                <div class="service-item">
                    <div class="circle"><i class="icon ion ion-ios-analytics-outline"></i></div>
                    <div class="name">Analytics</div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam.</p>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-4">
                <div class="service-item">
                    <div class="circle"><i class="icon ion ion-ios-camera-outline"></i></div>
                    <div class="name">Photography</div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio -->
<div class="section works align-left" id="works-section">
    <div class="fw">
        <div class="titles">
            <div class="title">Recent Works</div>
        </div>

        <form method="GET" action="{{ route('home') }}">
            <div class="filters">
                <div class="f_btn active">
                    <label>
                        <input type="radio" name="fl_radio" value="box-item" {{ Request::get('fl_radio') == 'box-item' ? 'checked' : '' }}>
                        All
                    </label>
                </div>
                @foreach ($categories as $category)
                    <div class="f_btn">
                        <label>
                            <input type="radio" name="fl_radio" value="f-{{ $category->id }}" {{ Request::get('fl_radio') == 'f-' . $category->id ? 'checked' : '' }}>
                            {{ $category->name }}
                        </label>
                    </div>
                @endforeach

            </div>
        </form>
        <div class="row box-items">
            @foreach ($posts as $post)
            <div class="col col-m-12 col-t-6 col-d-3 box-item f-{{ $post->category_id}}">
                <div class="item">
                    <div class="desc">
                        <div class="image">
                            <a href="#popup-{{ $post->id }}" class="has-popup"><img
                                    src="{{ asset($post->image) }}"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div id="popup-{{ $post->id }}" class="popup-box mfp-fade mfp-hide">
                    <div class="content">
                        <div class="image">
                            <img src="{{ asset($post->image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col col-m-12 col-t-6 col-d-4 box-item f-branding">
                <div class="item">
                    <div class="desc">
                        <div class="image">
                            <a href="#popup-2" class="has-popup"><img
                                    src="{{ asset('/') }}website/images/works/work2.jpg"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div id="popup-2" class="popup-box mfp-fade mfp-hide">
                    <div class="content">
                        <div class="image">
                            <img src="{{ asset('/') }}website/images/works/work2.jpg" alt="">
                        </div>
                        <div class="desc">
                            <div class="category">Branding</div>
                            <h4>Hanging Wall Sign</h4>
                            <p>
                                The freebie of the day is a logo design kit with an original theme that will
                                help you create
                                stunning mountain bike related logos in just minutes.
                            </p>
                            <a href="#" class="btn">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-4 box-item f-mockups">
                <div class="item">
                    <div class="desc">
                        <div class="image">
                            <a href="#popup-3" class="has-popup"><img
                                    src="{{ asset('/') }}website/images/works/work3.jpg"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div id="popup-3" class="popup-box mfp-fade mfp-hide">
                    <div class="content">
                        <div class="image">
                            <img src="{{ asset('/') }}website/images/works/work3.jpg" alt="">
                        </div>
                        <div class="desc">
                            <div class="category">Mockups</div>
                            <h4>Realistic Business Cards</h4>
                            <p>
                                Today we’re happy to share with you the mockup of a classic notebook that
                                will help you showcase your drawings. Today we’re happy to share with you
                                the mockup of a classic notebook that will help.
                            </p>
                            <a href="#" class="btn">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-4 box-item f-branding">
                <div class="item">
                    <div class="desc">
                        <div class="image">
                            <a href="#popup-4" class="has-popup"><img
                                    src="{{ asset('/') }}website/images/works/work4.jpg"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div id="popup-4" class="popup-box mfp-fade mfp-hide">
                    <div class="content">
                        <div class="image">
                            <img src="{{ asset('/') }}website/images/works/work4.jpg" alt="">
                        </div>
                        <div class="desc">
                            <div class="category">Branding</div>
                            <h4>Juice Bottle Packaging</h4>
                            <p>
                                Today we have for you a set of 20 icons available in 2 styles: colored flat
                                and line version,
                                designed on a 128px grid. These polished icons come in multiple formats so
                                you can easily include them in your projects.
                            </p>
                            <a href="#" class="btn">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-4 box-item f-photo">
                <div class="item">
                    <div class="desc">
                        <div class="image">
                            <a href="#popup-5" class="has-popup"><img
                                    src="{{ asset('/') }}website/images/works/work5.jpg"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div id="popup-5" class="popup-box mfp-fade mfp-hide">
                    <div class="content">
                        <div class="image">
                            <img src="{{ asset('/') }}website/images/works/work5.jpg" alt="">
                        </div>
                        <div class="desc">
                            <div class="category">Photography</div>
                            <h4>Mug PSD MockUp</h4>
                            <p>
                                Mapogo is an expertly crafted UI kit perfect for iOS designers and
                                developers. The free sample includes 10 screens (750×1334 px) that can be
                                easily customized in Photoshop
                            </p>
                            <a href="#" class="btn">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-4 box-item f-ui">
                <div class="item">
                    <div class="desc">
                        <div class="image">
                            <a href="#popup-6" class="has-popup"><img
                                    src="{{ asset('/') }}website/images/works/work6.jpg"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div id="popup-6" class="popup-box mfp-fade mfp-hide">
                    <div class="content">
                        <div class="image">
                            <img src="images/works/work6.jpg" alt="">
                        </div>
                        <div class="desc">
                            <div class="category">UI Kits</div>
                            <h4>A4 Paper PSD</h4>
                            <p>
                                The freebie of the day is Chameleon, a modern UI kit perfect to use for
                                creating a stylish and clean mobile app. This kit includes 10 screens from
                                various categories that can be easily edited.
                            </p>
                            <a href="#" class="btn">View Project</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="clear"></div>
    </div>
</div>

<!-- Blog -->
<div class="section blog align-left gray" id="blog-section">
    <div class="fw">
        <div class="titles">
            <div class="title">Type's of Work</div>
        </div>
        <div class="row blog-items">
            @foreach ($categories as $category)
            <div class="col col-m-12 col-t-4 col-d-4">
                <div class="blog-item">
                    <div class="image">
                        <a href="{{route('post.category', ['id' => $category->id])}}"><img src="{{asset($category->image)}}" alt=""  height="200" width="100%"/></a>
                    </div>
                    <a href="{{route('post.category', ['id' => $category->id])}}" class="name">{{$category->name}}</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="bts">
            <a href="{{route('all.category')}}" class="btn extra category">View all Category</a>
        </div>
        <div class="clear"></div>
    </div>
</div>



<div class="section align-left" id="client">
    <div class="fw">
        <div class="titles">
            <div class="title">Our Client</div>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach ($clients as $client)
            <div class="item">
                <img src="{{asset($client->image)}}" alt="" height="200">
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Section Contacts -->
<div class="section contacts align-left" id="contact-section">
    <div class="fw">
        <div class="titles">
            <div class="title">Contact Me</div>
        </div>
        <div class="contact-form">
            <form id="cform" method="post">
                <div class="row">
                    <div class="col col-m-12 col-t-6 col-d-6">
                        <div class="value">
                            <input type="text" name="name" placeholder="Name *" />
                        </div>
                    </div>
                    <div class="col col-m-12 col-t-6 col-d-6">
                        <div class="value">
                            <input type="tel" name="tel" placeholder="Phone *" />
                        </div>
                    </div>
                    <div class="col col-m-12 col-t-6 col-d-6">
                        <div class="value">
                            <input type="text" name="email" placeholder="Email *" />
                        </div>
                    </div>
                    <div class="col col-m-12 col-t-6 col-d-6">
                        <div class="value">
                            <input type="text" name="subject" placeholder="Subject *" />
                        </div>
                    </div>
                    <div class="col col-m-12 col-t-12 col-d-12">
                        <div class="value">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col col-m-12 col-t-12 col-d-12">
                        <a href="#" class="btn"
                            onclick="$('#cform').submit(); return false;">Send Message</a>
                    </div>
                </div>
            </form>
            <div class="alert-success">
                <p>Thanks, your message is sent successfully. We will contact you shortly!</p>
            </div>
        </div>
    </div>
</div>


@endsection
