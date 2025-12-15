@extends('frontend.layouts.master')

@section('content')
      <!--===========================
        BANNER 3 START
    ============================-->
    @includeIf('frontend.pages.section.hero')
    <!--===========================
        BANNER 3 END
    ============================-->


    <!--===========================
        CATEGORY 4 START
    ============================-->
    @includeIf('frontend.pages.section.category')
    <!--===========================
        CATEGORY 4 END
    ============================-->


    <!--===========================
        ABOUT 3 START
    ============================-->
   @includeIf('frontend.pages.section.about')
    <!--===========================
        ABOUT 3 END
    ============================-->


    <!--===========================
        COUESES 3 START
    ============================-->
   @includeIf('frontend.pages.section.course')
    <!--===========================
        COUESES 3 END
    ============================-->


    <!--===========================
        OFFER START
    ============================-->
   @includeIf('frontend.pages.section.offer')
    <!--===========================
        OFFER END
    ============================-->


    <!--===========================
        BECOME INSTRUCTOR START
    ============================-->
    @includeIf('frontend.pages.section.become-instructor')
    <!--===========================
        BECOME INSTRUCTOR END
    ============================-->


    <!--===========================
        VIDEO START
    ============================-->
    @includeIf('frontend.pages.section.video')
    <!--===========================
        VIDEO END
    ============================-->


    <!--===========================
        BRAND START
    ============================-->
    @includeIf('frontend.pages.section.brand')
    <!--===========================
        BRAND END
    ============================-->


    <!--===========================
        QUALITY COURSES START
    ============================-->
    @includeIf('frontend.pages.section.quality-course')
    <!--===========================
        QUALITY COURSES END
    ============================-->


    <!--===========================
        TESTIMONIAL START
    ============================-->
   @includeIf('frontend.pages.section.testimonial')
    <!--===========================
        TESTIMONIAL END
    ============================-->


    <!--===========================
        BLOG 4 START
    ============================-->
    @includeIf('frontend.pages.section.blog')
    <!--===========================
        BLOG 4 END
    ============================-->


    <!--==FOOTER 3 START===-->
    @includeIf('frontend.layouts.footer')
    <!--=====FOOTER 3 END======-->

@endsection