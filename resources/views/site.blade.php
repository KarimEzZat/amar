@extends('layouts.front')

@section('content')
    <section class="about-area section-gap" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-12 about-right mb-lg-0 mb-4">
                    <!-- Section Title -->
                    <div class="section-title mb-50">
                        <h2>عن الشركة</h2>
                    </div>
                    <div>
                        {!! $companies->first()->description !!}
                    </div>
                </div>

                <div class="col-lg-6 about-left">
                    <img class="img-fluid" src="{{ asset('assets/Images/'.$companies->first()->photo) }}"
                         alt="شركة عوازل الفوم بالرياض">
                </div>
            </div>
        </div>
    </section>

    <section class="services-area section-gap" id="service">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-12 mb-50">
                    <div class="section-title">
                        <h2>خدماتنا</h2>
                        <p>تتشرف شركة مورة بتقديم بعض الخدمات ومنها عزل الفوم والاسطح والخزانات بالرياض :</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(isset($services))
                    @foreach($services as $service)
                        <div class="col-lg-4 col-md-6 mb-3">
                            <!-- Start Single Blog -->
                            <div class="single-service text-center">
                                <div>
                                    <!-- service image -->
                                    <img src="{{ asset('assets/services/img/'. $service->image) }}" class="img-fluid"
                                         alt="شركة مورة لعزل الاسطح و الخزانات وعزل الفوم بالرياض">
                                </div>
                                <h4 class="my-3">
                                    {{ $service->title }}
                                </h4>
                                <div>{!! $service->description  !!}</div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="blog-area section-gap">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-12 mb-50">
                    <div class="section-title">
                        <h2>المقالات</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(isset($articles))
                    @foreach($articles as $article)
                        <div class="col-lg-4 col-md-6 mb-3">
                            <!-- Start Single Blog -->
                            <div class="single-blog text-center">
                                <!-- blog image -->
                                <img src="{{ asset('assets/Articles/img/'. $article->image) }}" class="img-fluid"
                                     alt="شركة مورة لعزل الاسطح و الخزانات وعزل الفوم بالرياض">
                                <!-- blog info date & writter -->
                                <div class="blog-info">
                                    <div class="text-white"><i
                                            class="fa fa-calendar"></i>{{ $article->created_at }}</div>
                                    <div class="text-white"><i
                                            class="fa fa-user"></i>بواسطة شركة عوازل الرياض
                                    </div>
                                </div>
                                <!-- blog header -->
                                <h4>
                                    {{ $article->title }}
                                </h4>
                                <div>{!! $article->description  !!}</div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="mt-4 d-flex justify-content-between align-items-center">
                {{ $articles->links() }}
            </div>
        </div>
    </section>

    <!-- Start Gallery Section -->
    <section class="gallery-area section-gap">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-12 mb-50">
                    <div class="section-title">
                        <h2>أعمال تم تنفيذها</h2>
                        <p>هذه بعض الفيديوهات الخاصة بنا أثناء العمل يمكنك القاء نظرة عليها</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="video-list">
                        @foreach($videos as $video)
                            <div class="vid">
                                <video src="{{asset('assets/Videos/'.$video->video)}}" controls muted></video>
                                <h5 class="title">{{ $video->title }}</h5>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="main-video">
                        @if (isset($videos) && $videos->count() > 0)
                            <div class="video">
                                <video src="{{asset('assets/Videos/'.$videos->first()->video)}}" controls></video>
                                <h3 class="title my-4">{{ $videos->first()->title }}</h3>
                                <div class="description">
                                    {!! $videos->first()->description !!}
                                </div>
                            </div>
                        @else
                            <h3>لا توجد فيديوهات في الوقت الحالي</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->


    <section class="faqs-area section-gap" id="faqs">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-12 mb-50">
                    <div class="section-title">
                        <h2>بعض الاسئلة الشائعة</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(isset($faqs))
                    @foreach($faqs as $faq)
                        <div class="col-lg12 col-md-12 mb-3">
                            <h4 class="mb-3">
                                {{ ++$loop->index }}- {{ $faq->question }}
                            </h4>
                            <div class="answer">{!! $faq->answer !!}</div>
                        </div>
                        <!-- End Single Blog -->

                    @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection
