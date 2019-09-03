<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="site-section-title text-center">
                    <h2>Our Agents</h2>
                    <p>Our agents will preview properties to ensure that you are only shown homes that match your requirements.
                        We will arrange all viewings and walk you through each potential home, answering all your questions.
                        When it comes to negotiation our agents are all experts and will carry this out and smooth out any potential conflicts.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($agents as $agent)
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                <div class="team-member">

                    <img src="{{asset($agent->agent_image)}}" alt="Image" class="img-fluid rounded mb-4">

                    <div class="text">

                        <h2 class="mb-2 font-weight-light text-black h4">{{$agent->agent_name}}</h2>
                        <span class="d-block mb-3 text-white-opacity-05">{{$agent->agent_designation}}</span>
                        <p>{{$agent->agent_description}}<p>
                            <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
