  <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                <img src="{{asset('website/images/slider/1.jpg')}}" alt="Los Angeles">
                </div>

                <div class="item">
                <img src="{{asset('website/images/slider/2.jpg')}}" alt="Chicago">
                </div>

                <div class="item">
                <img src="{{asset('website/images/slider/3.jpg')}}" alt="New York">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
</div>
       
    </section>

     <!-- QUICK LINKS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="wed-hom-ser">
                    <ul>
                        <li>
                            <a href="awards.html"  class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('website/images/icon/h-ic1.png')}}" alt=""> Academy</a>
                        </li>
                        <li>
                            <a href="admission.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('website/images/icon/h-ic2.png')}}" alt=""> Admission</a>
                        </li>
                        <li>
                            <a href="all-courses.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('website/images/icon/h-ic4.png')}}" alt=""> Classes</a>
                        </li>
                        <li>
                            <a href="seminar.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('website/images/icon/h-ic3.png')}}" alt=""> Seminar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>