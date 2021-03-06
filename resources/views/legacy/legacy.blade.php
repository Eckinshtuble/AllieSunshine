@extends('master')

<link href="{{ asset('/css/legacy.css') }}" rel="stylesheet">

@section('main-body')
    <section class="section-gray-title-only">
        <h2>Legacy</h2>
    </section>

    <div class="legacy-wrap">
        <div class="legacy-wrap-inner">

            <img src="{{ asset('/images/Carousel1_opt.jpg') }}" alt="legacy" width="530" height="328">
            <p class="long-copy">
                This project was born to ignite learning and wellness in the name of educator
                and wellness pioneer Allison Hayes. Wellness is an actively sought state of
                health and wellbeing and Allie Sunshine, as she was known, was the embodiment
                of conscious wellness.
                <br /><br />
                The depth of health depends on one's ability to sustain
                proper hydration, nutrition, shelter, safety and love for the body, mind and
                spirit. Our personal wellness depends on the overall wellness of the family,
                community, earth and the natural systems that support us. We are a learning
                community. Through nature, shared wisdom and living legacies we empower humanity
                to choose personal wellness.
            </p>
        </div>

        <div class="legacy-wrap-inner-bottom">
            <h3>How we do it</h3>

            <img src="{{ asset('/images/legacy_two_opt.jpg') }}" alt="legacy" width="450" height="300">
            <p class="long-copy">
                Working and playing together, we pass the torch of skill and wisdom as we organize
                projects and events that capture learning opportunities for our bodies, minds and spirits.
                <br /><br />
                Our main event is our annual Plant Giveaway and Flower Sale. This has allowed us to
                connect with other wellness explorers and share in growing and learning experiences.
                We support backyard, patio and community gardeners with free fruit and vegetable transplants
                facilitating the power to nourish our bodies, steward the earth and grow the resilience of
                our self renewing community of care.
                <br /><br />
                Our central project is the Healing Garden. This is a
                one-acre garden that uses the landscape to tell our story. This is a space where we meet to
                connect with Nature, self and others; sharing experiences with the garden vegetables, fruit,
                nuts and flowers. Here we learn in relationship by celebrating our questions, observations
                and aha's.
                <br /><br />
                We are a community of action and we put our learning into motion by voting with
                our dollars for the brighter future we all know is possible.
            </p>
        </div>
    </div>
@endsection

