@extends('layout')

@section('content')
<div id="hero">
    <h1 id="hero-title">Buffalo's Best Used Car Dealer</h1>
    <h4 id="hero-subtitle">Used cars, trucks, and SUVs for every budget</h4>
    <button id="hero-inventory">Browse Inventory</button>
</div>

<div id="featured-inventory">
    <h1>Featured Inventory</h1>
    <div id="featured-inventory-cards">
        <div class="inventory-card" style="background-image:url('{{asset('images/malibu.jpg')}}');">
            <div class="inventory-card-price">$2450</div>
            <div class="inventory-card-description">
                <p class="inventory-card-title">2004 Chevrolet Impala</p>
                <p class="inventory-card-odo">189,000 Miles</p>
            </div>
        </div>

        <div class="inventory-card" style="background-image:url('{{asset('images/lesabre.jpg')}}');">
            <div class="inventory-card-price">$2200</div>
            <div class="inventory-card-description">
                <p class="inventory-card-title">2003 Buick Lesabre</p>
                <p class="inventory-card-odo">189,689 Miles</p>
            </div>
        </div>

        <div class="inventory-card" style="background-image:url('{{asset('images/silverado.jpg')}}');">
            <div class="inventory-card-price">$6800</div>
            <div class="inventory-card-description">
                <p class="inventory-card-title">2008 Chevrolet Silverado</p>
                <p class="inventory-card-odo">292,092 Miles</p>
            </div>
        </div>
    </div>
</div>

<div id="about-us-container">
    <div id="about-us">
        <div id="about-us-story">
            <h1>About Us</h1>
            <p>At West Coast Exotic Cars, we pride ourselves on giving each and every one of our vehicles the same level of care and expertise to offer our clients only the best of the best. If you choose to sell your car with us, we handle everything in the selling process from start to finish! </p>
            <p> At West Coast Exotic Cars, we pride ourselves on giving each and every one of our vehicles the same level of care and expertise to offer our clients only the best of the best. If you choose to sell your car with us, we handle everything in the selling process from start to finish!

                From Delivery/Pick Up, Service, Photography, Videography, Detailing, Advertising, Vehicle Storage, Negotiation, and financing - we go above and beyond to ensure that our inventory and customer experience is a cut above the rest. Check out this glimpse of our meticulous prep process and see why WCEC is the place to buy or sell your vehicle!</p>
        </div>
        <img id="about-us-photo" src="{{asset('images/about-us-pic.jpg')}}" />
    </div>
</div>

<div id="contact-us">
    <iframe id="contact-us-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3159.371827344936!2d-93.11621352367412!3d37.64046151988483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c5a1a5f86c9dab%3A0xc93fab58f2bdbac2!2sJennings%20Auto%20Sales!5e0!3m2!1sen!2sus!4v1699644881168!5m2!1sen!2sus" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div id="contact-us-info">
        <h2>Jennings Auto Sales</h2>
        <p>1234 Car Dealer Ln.<br/>
        Buffalo, MO 65622</p>
        <p class="contact-us-p"><img class="contact-us-icon"
            src="{{asset('images/tel-icon-2.png')}}"/> 417-444-4444</p>
        <p class="contact-us-p"><img class="contact-us-icon"
            src="{{asset('images/email-icon.png')}}"/> dealer@gmail.com</p>
        <p><b>Mon-Fri</b>: 9:00 AM to 5:00 PM CST</p>
        <p><b>Sat</b>: 10:00 AM to 2:00 PM CST</p>
        <p><b>Sun</b>: Closed</p>
    </div>
</div>
@endsection
