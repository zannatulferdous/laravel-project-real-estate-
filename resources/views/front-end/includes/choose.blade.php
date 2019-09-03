<div class="site-section">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 text-center">
            <div class="site-section-title">
                <h2>Why Choose Us?</h2>
            </div>
            <p>HomeLand can use that data to help you determine if the property has what you need.
                Property marketing power. Property doesn't sell due to advertising alone.
                A large share of real estate sales comes as the result of a practitioner's contacts with previous clients, friends, and family.</p>
        </div>
    </div>

    <div class="row">
        @foreach($blogs as $blog)
        <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
                <span class="icon flaticon-house"></span>
                <h2 class="service-heading">{{($blog->blog_name)}}</h2>
                <p>{{$blog->blog_description}}</p>
            </a>
        </div>
        @endforeach
    </div>
</div>
</div>
