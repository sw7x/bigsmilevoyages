

<?php include 'header.php';?>

            <!-- iqoniq Header End-->     
            <!-- iqoniq Mina Banner Start-->       
            <div class="mg_hotel_banner">
                <div class="mg_slider1">
                    <div>
                        <figure>
                            <img src="extra-images/banner1.jpg" alt=""/>
                        </figure>
                    </div>
                    <div>
                        <figure>
                            <img src="extra-images/banner2.jpg" alt=""/>
                        </figure>
                    </div>
                    <div>
                        <figure>
                            <img src="extra-images/banner3.jpg" alt=""/>
                        </figure>
                    </div>
                </div>
                <!-- iqoniq Search Wrapper Start-->
                <div class="search_wraper">
                    <div class="container">
                        <div class="search_one absolute">
                            <!-- Nav tabs Start -->
                            <ul class="mg_hotel_search" role="tablist">
                                <li role="presentation" class="active"><a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hotels</a></li>
                                <li role="presentation"><a href="#rental" aria-controls="rental" role="tab" data-toggle="tab">VACATION RENTALS</a></li>
                                <li role="presentation"><a href="#todo" aria-controls="todo" role="tab" data-toggle="tab">THINGS TO DO</a></li>
                                <li role="presentation"><a href="#restaurante" aria-controls="restaurante" role="tab" data-toggle="tab">RESTAURANTS</a></li> 
                                <li role="presentation"><a href="#flight" aria-controls="flight" role="tab" data-toggle="tab">FLIGHTS</a></li>
                            </ul>
                            <!-- Nav tabs End -->
                            <!-- Tab panes Start -->
                            <div class="tab-content">
                                <!-- Tabs Pane Start -->
                                <div role="tabpanel" class="tab-pane active" id="hotels">
                                    <!-- Search Start -->
                                    <div class="mg_search_tab">
                                        <div class="row">
                                            <!-- Input Field Start -->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="mg_input_1">
                                                    <input type="text" placeholder="Type Hotel Name here...">
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <select class="mg_selectric">
                                                        <option>1 Room</option>
                                                        <option>2 Rooms</option>
                                                        <option>3 Rooms</option>
                                                        <option>4 Rooms</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <select class="mg_selectric">
                                                        <option>1 Person</option>
                                                        <option>2 Persons</option>
                                                        <option>3 Persons</option>
                                                        <option>4 Persons</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <div class="rq-check-inout-wrapper rq-check-in-wrapper" id="rq-check-in-single">
                                                        <div class="rq-check-inout-single-wrapper">
                                                            <span class="rq-single-date">Check In</span>
                                                            <span class="rq-month-year">
                                                                <span class="rq-single-month"></span>
                                                                <span class="rq-single-year"></span>
                                                            </span>
                                                            <span>check in</span>
                                                            <input type="hidden" class="kode-checkin-date" name="date_in" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <div class="rq-check-inout-wrapper rq-check-in-wrapper" id="rq-check-out-single">
                                                        <div class="rq-check-inout-single-wrapper">
                                                            <span class="rq-single-date">24</span>
                                                            <span class="rq-month-year">
                                                                <span class="rq-single-month">sep</span>
                                                                <span class="rq-single-year"></span>
                                                            </span>
                                                            <span>check out</span>
                                                            <input type="hidden" class="kode-checkout-date"  name="date_out" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <!-- TIME WRAP START-->
                                                    <div title="check in" class="time_picker">
                                                        <input id="rq-check-in-time" class="timepicker" placeholder="Time" name="time_in" />
                                                    </div>
                                                    <!--TIME WRAP END-->
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <!-- TIME WRAP START-->
                                                    <div title="check out" class="time_picker">
                                                        <input id="rq-check-out-time" class="timepicker" placeholder="Time" name="time_out" />
                                                    </div>
                                                    <!--TIME WRAP END-->
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="mg_input_1">
                                                    <button class="mg_btn1"><i class="fa fa-search"></i>Find Hotel</button>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                        </div>
                                    </div>
                                    <!-- Search End -->
                                </div>
                                <!-- Tabs Pane End -->
                                <div role="tabpanel" class="tab-pane" id="rental">
                                    <!-- Search Start -->
                                    <div class="mg_search_tab">
                                        <div class="row">
                                            <!-- Input Field Start -->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="mg_input_1">
                                                    <input type="text" placeholder="Where do you want to go?">
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <div class="rq-check-inout-wrapper rq-check-in-wrapper" id="vr-check-in-single">
                                                        <div class="rq-check-inout-single-wrapper">
                                                            <span class="rq-single-date">Check In</span>
                                                            <span class="rq-month-year">
                                                                <span class="rq-single-month"></span>
                                                                <span class="rq-single-year"></span>
                                                            </span>
                                                            <span>check in</span>
                                                            <input type="hidden" class="kode-checkin-date" name="date_in" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <div class="rq-check-inout-wrapper rq-check-in-wrapper" id="vr-check-out-single">
                                                        <div class="rq-check-inout-single-wrapper">
                                                            <span class="rq-single-date">24</span>
                                                            <span class="rq-month-year">
                                                                <span class="rq-single-month">sep</span>
                                                                <span class="rq-single-year"></span>
                                                            </span>
                                                            <span>check out</span>
                                                            <input type="hidden" class="kode-checkout-date"  name="date_out" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <!-- TIME WRAP START-->
                                                    <div title="check in" class="time_picker">
                                                        <input id="vr-check-in-time" class="timepicker" placeholder="Time" name="time_in" />
                                                    </div>
                                                    <!--TIME WRAP END-->
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <!-- TIME WRAP START-->
                                                    <div title="check out" class="time_picker">
                                                        <input id="vr-check-out-time" class="timepicker" placeholder="Time" name="time_out" />
                                                    </div>
                                                    <!--TIME WRAP END-->
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="mg_input_1">
                                                    <button class="mg_btn1"><i class="fa fa-search"></i>Find vacation rentals</button>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                        </div>
                                    </div>
                                    <!-- Search End -->
                                </div>
                                <div role="tabpanel" class="tab-pane" id="todo">
                                    <!-- Search Start -->
                                    <div class="mg_search_tab">
                                        <div class="row">
                                            <!-- Input Field Start -->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="mg_input_1">
                                                    <input type="text" placeholder="Search a destination, attraction, or activity">
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="mg_input_1">
                                                    <button class="mg_btn1"><i class="fa fa-search"></i>Find things to do</button>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                        </div>
                                    </div>
                                    <!-- Search End -->
                                </div>
                                <div role="tabpanel" class="tab-pane" id="restaurante">
                                    <!-- Search Start -->
                                    <div class="mg_search_tab">
                                        <div class="row">
                                            <!-- Input Field Start -->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="mg_input_1">
                                                    <input type="text" placeholder="City or restaurant name">
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="mg_input_1">
                                                    <button class="mg_btn1"><i class="fa fa-search"></i>Find restaurants</button>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                        </div>
                                    </div>
                                    <!-- Search End -->
                                </div>
                                <div role="tabpanel" class="tab-pane" id="flight">
                                    <!-- Search Start -->
                                    <div class="mg_search_tab">
                                        <div class="row">
                                            <!-- Input Field Start -->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="mg_input_1">
                                                    <input type="text" placeholder="City or Airport">
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <input type="text" placeholder="City or Airport">
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <select class="mg_selectric">
                                                        <option>1 Person economy</option>
                                                        <option>2 Persons economy</option>
                                                        <option>3 Persons economy</option>
                                                        <option>4 Persons economy</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->

                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <!-- TIME WRAP START-->
                                                    <div title="check in" class="time_picker">
                                                        <input id="fl-check-in-time" class="timepicker" placeholder="Time" name="time_in" />
                                                    </div>
                                                    <!--TIME WRAP END-->
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <!-- TIME WRAP START-->
                                                    <div title="check out" class="time_picker">
                                                        <input id="fl-check-out-time" class="timepicker" placeholder="Time" name="time_out" />
                                                    </div>
                                                    <!--TIME WRAP END-->
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <div class="rq-check-inout-wrapper rq-check-in-wrapper" id="fl-check-in-single">
                                                        <div class="rq-check-inout-single-wrapper">
                                                            <span class="rq-single-date">Check In</span>
                                                            <span class="rq-month-year">
                                                                <span class="rq-single-month"></span>
                                                                <span class="rq-single-year"></span>
                                                            </span>
                                                            <span>check in</span>
                                                            <input type="hidden" class="kode-checkin-date" name="date_in" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-3 col-sm-3">
                                                <div class="mg_input_1">
                                                    <div class="rq-check-inout-wrapper rq-check-in-wrapper" id="fl-check-out-single">
                                                        <div class="rq-check-inout-single-wrapper">
                                                            <span class="rq-single-date">24</span>
                                                            <span class="rq-month-year">
                                                                <span class="rq-single-month">sep</span>
                                                                <span class="rq-single-year"></span>
                                                            </span>
                                                            <span>check out</span>
                                                            <input type="hidden" class="kode-checkout-date"  name="date_out" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                            <!-- Input Field Start -->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="mg_input_1">
                                                    <button class="mg_btn1"><i class="fa fa-search"></i>Find Flight</button>
                                                </div>
                                            </div>
                                            <!-- Input Field End -->
                                        </div>
                                    </div>
                                    <!-- Search End -->
                                </div>
                            </div>
                            <!-- Tab panes End -->
                        </div>
                    </div>
                </div>
                <!-- iqoniq Search Wrapper End-->
            </div>
            <!-- iqoniq Mina Banner End--> 



            





            <!-- iqoniq Contant Wrapper Start-->  
            <div class="iqoniq_contant_wrapper">
                
                <section class="text-section">                    
                    <div class="container">
                        <div class="mg_hotel_hd1">
                            <h4 class="">Book hotels in top destinations</h4>
                        </div>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a 
                                type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
                            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>                                                
                        
                    </div>
                </section>



                <section class="home-feature-tours">
                    <div class="container">
                        <!-- iqoniq Heading Start -->
                        <div class="mg_hotel_hd1">                            
                            <h4>Book hotels in top destinations</h4>
                        </div>
                        <!-- iqoniq Heading End -->
                        <!-- Destination Start -->
                        <div class="mg_hotel_destination_tab">
                            
                            
                            
                           
                                
                                    <!-- Destination Tab Wrap Start -->
                                    <div class="mg_hotel_destination_wrapper">
                                        <div class="row">
                                            <!-- Hotel Destination Start -->
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mg_hotel_destination fancy-overlay">
                                                    
                                                    <figure>
                                                        <img src="https://placeimg.com/360/225/any" alt=""/>
                                                        <figcaption>                                                                
                                                            <a class="view_btn" href="#">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                                                            </a>
                                                            </figcaption>
                                                            
                                                            <div class="icon-div">
                                                                <i class="fa fa-angle-double-right fa-stack-1x" style=""></i>
                                                            </div>
                                                            
                                                    </figure>
                                                    
                                                    <div class="text">
                                                        <div class="mg_destination_hd">
                                                            <h5><a href="#">London</a></h5>                                                            
                                                        </div>                                                        
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Hotel Destination End -->
                                            <!-- Hotel Destination Start -->
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mg_hotel_destination fancy-overlay">
                                                    <figure>
                                                        <img src="https://placeimg.com/360/225/any" alt=""/>
                                                        <figcaption>
                                                            <a class="view_btn" href="#">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                                                            </a>
                                                        </figcaption>
                                                        
                                                        <div class="icon-div">                                                            
                                                            <i class="fa fa-angle-double-right fa-stack-1x" style=""></i>
                                                        </div>

                                                    </figure>
                                                    
                                                    <div class="text">
                                                        <div class="mg_destination_hd">
                                                            <h5><a href="#">Thailand</a></h5>
                                                        </div>                                                        
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Hotel Destination End -->
                                            <!-- Hotel Destination Start -->
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mg_hotel_destination fancy-overlay">
                                                    <figure>
                                                        <img src="https://placeimg.com/360/225/any" alt=""/>
                                                        <figcaption>
                                                            <a class="view_btn" href="#">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                                                            </a>
                                                        </figcaption>
                                                        
                                                        <div class="icon-div">
                                                            <i class="fa fa-angle-double-right fa-stack-1x" style=""></i>
                                                        </div>
                                                        
                                                    </figure>
                                                    
                                                    <div class="text">
                                                        <div class="mg_destination_hd">
                                                            <h5><a href="#">France</a></h5>                                                            
                                                        </div>                                                        
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Hotel Destination End -->
                                            <!-- Hotel Destination Start -->
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mg_hotel_destination fancy-overlay">
                                                    <figure>
                                                        <img src="https://placeimg.com/360/225/any" alt=""/>
                                                        <figcaption>
                                                            <a class="view_btn" href="#">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                                                            </a>
                                                        </figcaption>
                                                        
                                                        <div class="icon-div">
                                                            <i class="fa fa-angle-double-right fa-stack-1x" style=""></i>
                                                        </div>

                                                    </figure>
                                                    
                                                    <div class="text">
                                                        <div class="mg_destination_hd">
                                                            <h5><a href="#">Dubai UAE</a></h5>                                                            
                                                        </div>                                                        
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Hotel Destination End -->
                                            <!-- Hotel Destination Start -->
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mg_hotel_destination fancy-overlay">
                                                    <figure>
                                                        <img src="https://placeimg.com/360/225/any" alt=""/>
                                                        <figcaption>
                                                            <a class="view_btn" href="#">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                                                            </a>
                                                        </figcaption>
                                                        
                                                        <div class="icon-div">
                                                            <i class="fa fa-angle-double-right fa-stack-1x" style=""></i>
                                                        </div>

                                                    </figure>
                                                    
                                                    <div class="text">
                                                        <div class="mg_destination_hd">
                                                            <h5><a href="#">Germany</a></h5>                                                            
                                                        </div>                                                        
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Hotel Destination End -->
                                            <!-- Hotel Destination Start -->
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mg_hotel_destination fancy-overlay">
                                                    <figure>
                                                        <img src="https://placeimg.com/360/225/any" alt=""/>
                                                        <figcaption>
                                                            <a class="view_btn" href="#">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                                                            </a>
                                                        </figcaption>
                                                        
                                                        <div class="icon-div">
                                                            <i class="fa fa-angle-double-right fa-stack-1x" style=""></i>
                                                        </div>
                                                        
                                                    </figure>
                                                    
                                                    <div class="text">
                                                        <div class="mg_destination_hd">
                                                            <h5><a href="#">Cyprus</a></h5>
                                                        </div>                                                        
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Hotel Destination End -->
                                        </div>
                                    </div>
                                    <!-- Destination Tab Wrap End -->
                               
                                
                            
                        </div>
                        <!-- Destination End -->
                    </div>
                </section>


                <!-- Call to Action Section Start-->
                <section class="mg_travelplan home-bottom-text-section">
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- iqoniq Heading Start -->
                                <div class="mg_hotel_hd1 white">                            
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <!-- iqoniq Heading End -->
                                <div class="mg_plan_caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                                </div>                                
                            </div>                            
                        </div>
                        



                        <div class="row">
                            <div class="col-md-12">
                                <!-- iqoniq Heading Start -->
                                <div class="mg_hotel_hd1 white">                            
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <!-- iqoniq Heading End -->
                                <div class="mg_plan_caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea worldwide carbon rights empowerment. Pursue these aspirations leverage, accessibility UNICEF, reduce child mortality collaborative cities safeguards. Informal economies non-partisan; evolution transformative climate change local benefit.</p>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <!-- iqoniq Heading Start -->
                                <div class="mg_hotel_hd1 white">                            
                                    <h4>consectetur adipiscing elit, sed do</h4>
                                </div>
                                <!-- iqoniq Heading End -->
                                <div class="mg_plan_caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea Start making your Travel Plans</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea Start making your Travel Plans cities safeguards. Informal economies non-partisan; evolution transformative climate change local benefit.</p>
                                    
                                    <div class="btnDiv">
                                        <a class="mg_btn1" href="#">Get a free quote</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        

                           
                        

                    </div>
                </section>
                <!-- Call to Action Section End-->



                <!-- Why Chooses us Section Start -->
                <section class="why_chooseus">
                    <div class="container-fluid">
                        <!-- iqoniq Heading Start -->
                        <div class="mg_hotel_hd1 white">
                            <h4>Our Partners</h4>
                        </div>
                        <!-- iqoniq Heading End -->
                        <div class="row">
                            <!-- Chooseus Slider Start -->
                            <div class="chooseus_slider col-md-10">
                                
                                <!-- Chooseus Thumb Start -->
                                <div class="col-md-4">
                                    <div class="mg_chooseus">
                                        <figure>
                                            <img src="https://via.placeholder.com/468x260?text=client1" alt="">
                                        </figure>                                        
                                    </div>
                                </div>
                                <!-- Chooseus Thumb End -->

                                <!-- Chooseus Thumb Start -->
                                <div class="col-md-4">
                                    <div class="mg_chooseus">
                                        <figure>
                                            <img src="https://via.placeholder.com/468x260?text=client2" alt="">
                                        </figure>                                        
                                    </div>
                                </div>
                                <!-- Chooseus Thumb End -->
                                
                                <!-- Chooseus Thumb Start -->
                                <div class="col-md-4">
                                    <div class="mg_chooseus">
                                        <figure>
                                            <img src="https://via.placeholder.com/468x260?text=client3" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Chooseus Thumb End -->
                                
                                <!-- Chooseus Thumb Start -->
                                <div class="col-md-4">
                                    <div class="mg_chooseus">
                                        <figure>
                                            <img src="https://via.placeholder.com/468x260?text=client4" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Chooseus Thumb End -->

                                <!-- Chooseus Thumb Start -->
                                <div class="col-md-4">
                                    <div class="mg_chooseus">
                                        <figure>
                                            <img src="https://via.placeholder.com/468x260?text=client5" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Chooseus Thumb End -->

                                <!-- Chooseus Thumb Start -->
                                <div class="col-md-4">
                                    <div class="mg_chooseus">
                                        <figure>
                                            <img src="https://via.placeholder.com/468x260?text=client6" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Chooseus Thumb End -->

                                <!-- Chooseus Thumb Start -->
                                <div class="col-md-4">
                                    <div class="mg_chooseus">
                                        <figure>
                                            <img src="https://via.placeholder.com/468x260?text=client7" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Chooseus Thumb End -->
                                
                                <!-- Chooseus Thumb Start -->
                                <div class="col-md-4">
                                    <div class="mg_chooseus">
                                        <figure>
                                            <img src="https://via.placeholder.com/468x260?text=client8" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Chooseus Thumb End -->
                                



                            </div>
                            <!-- Chooseus Slider Ens -->
                        </div>
                    </div>
                </section>
                <!-- Why Chooses us Section End -->


                



                


                
                


                


                
                
<?php include 'footer.php';?>
