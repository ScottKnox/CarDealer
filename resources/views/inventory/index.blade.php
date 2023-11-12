@extends('layout')

@section('content')
<div id="inventory">
    <h1>Browse Inventory</h1>
    <div id="inventory-browser">
        <div id="inventory-search-sort">
            <input id="inventory-search" type="text" name="search" value="Search By Keyword" />
            <select id="inventory-sort" name="sort">
                <option value="sortby">Sort By:</option>
                <option value="pricelh">Price: Low to High</option>
                <option value="pricehl">Price: High to Low</option>
                <option value="yearon">Year: Oldest to Newest</option>
                <option value="yearno">Year: Newest to Oldest</option>
                <option value="mileagelh">Mileage: Lowest to Highest</option>
                <option value="mileagehl">Mileage: Highest to Lowest</option>
            </select>
        </div>
        <div id="inventory-filter-browse">
            <div id="inventory-filters">
                <select class="inventory-filter" name="price">
                    <option value="Price">Price</option>
                    <option value="0to10">$0 to $10k</option>
                    <option value="10to20">$10k to $20k</option>
                    <option value="20to30">$20k to $30k</option>
                </select>
                <select class="inventory-filter" name="type">
                    <option value="Type">Type</option>
                    <option value="cars">Cars</option>
                    <option value="trucks">Trucks</option>
                    <option value="suvs">Suvs</option>
                </select>
                <select class="inventory-filter" name="year">
                    <option value="Year">Year</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                </select>
                <select class="inventory-filter" name="make">
                    <option value="Make">Make</option>
                    <option value="alfa">Alfa Romeo</option>
                    <option value="dodge">Dodge</option>
                    <option value="ford">Ford</option>
                </select>
                <select class="inventory-filter" name="model">
                    <option value="model">Model</option>
                    <option value="guilia">Guilia</option>
                    <option value="chally">Challenger</option>
                    <option value="raptor">Raptor</option>
                </select>
                <select class="inventory-filter" name="location">
                    <option value="location">Location</option>
                    <option value="buffalomo">Buffalo, MO</option>
                </select>
            </div>
            <div id="inventory-browse">
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

                <div class="inventory-card" style="background-image:url('{{asset('images/malibu.jpg')}}');">
                    <div class="inventory-card-price">$2450</div>
                    <div class="inventory-card-description">
                        <p class="inventory-card-title">2004 Chevrolet Impala</p>
                        <p class="inventory-card-odo">189,000 Miles</p>
                    </div>
                </div>

                <div class="inventory-card" style="background-image:url('{{asset('images/malibu.jpg')}}');">
                    <div class="inventory-card-price">$2450</div>
                    <div class="inventory-card-description">
                        <p class="inventory-card-title">2004 Chevrolet Impala</p>
                        <p class="inventory-card-odo">189,000 Miles</p>
                    </div>
                </div>

                <div class="inventory-card" style="background-image:url('{{asset('images/malibu.jpg')}}');">
                    <div class="inventory-card-price">$2450</div>
                    <div class="inventory-card-description">
                        <p class="inventory-card-title">2004 Chevrolet Impala</p>
                        <p class="inventory-card-odo">189,000 Miles</p>
                    </div>
                </div>

                <div class="inventory-card" style="background-image:url('{{asset('images/malibu.jpg')}}');">
                    <div class="inventory-card-price">$2450</div>
                    <div class="inventory-card-description">
                        <p class="inventory-card-title">2004 Chevrolet Impala</p>
                        <p class="inventory-card-odo">189,000 Miles</p>
                    </div>
                </div>

                <div class="inventory-card" style="background-image:url('{{asset('images/malibu.jpg')}}');">
                    <div class="inventory-card-price">$2450</div>
                    <div class="inventory-card-description">
                        <p class="inventory-card-title">2004 Chevrolet Impala</p>
                        <p class="inventory-card-odo">189,000 Miles</p>
                    </div>
                </div>

                <div class="inventory-card" style="background-image:url('{{asset('images/malibu.jpg')}}');">
                    <div class="inventory-card-price">$2450</div>
                    <div class="inventory-card-description">
                        <p class="inventory-card-title">2004 Chevrolet Impala</p>
                        <p class="inventory-card-odo">189,000 Miles</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
