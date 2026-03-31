<div class="innerpage-top-banner">
    <div class="container">
        <div class="breadcrumbe">
            <a href="./home" class="home-link">Home</a>
            <span> / Events</span>
        </div>
    </div>

</div>
<div class="inner-page">
    <div class="container">
        <!-- inner header -->
        <div class="row">
            <div class="inner-head text-center">
                <div class="section-title wow animate__animated animate__fadeInDown">
                    <h4>Events <span class="events-line"></span></h4>
                    <h2>Celebrating Learning, Achievements, and Fun Together</h2>
                    <p>Discover upcoming and past events highlighting our students’ creativity, achievements, sports,
                        cultural programs, and memorable moments in school life.</p>
                </div>
            </div>
        </div>


        <!--  -->
        <!-- Events Grid -->
        <div class="row g-3 mt-2 inner-page-content wow animate__animated animate__fadeInUp">

            <!-- Large Featured Card (left) -->
            <div class="col-lg-5 col-md-12 wow animate__animated animate__fadeInUp">
                <div class="event-card event-card-large h-100" id="featured-event">
                    <div class="event-card-img-wrap">
                        <img src="./img/event1.png" alt="School Opening Ceremony" class="event-img featured-img">
                        <span class="event-date-badge-large featured-date">2083 Baisakh 10</span>
                    </div>
                    <div class="event-card-body p-custom">
                        <h5 class="event-title fw-bold mb-2 featured-title">School Opening Ceremony</h5>
                        <p class="event-desc text-muted small mb-0 featured-desc">
                            Kickstarting the new academic year with a warm welcome,
                            inspiring speeches, cultural performances, and celebrations
                            for students and staff alike.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Column: 2x2 smaller cards -->
            <div class="col-lg-7 col-md-12 wow animate__animated animate__fadeInUp">
                <div class="row g-3">

                    <!-- Card 2 -->
                    <div class="col-sm-6">
                        <div class="event-card h-100 swappable-card" onclick="swapEvent(this)" style="cursor: pointer;"
                            title="Click to feature this event">
                            <div class="event-card-img-wrap">
                                <img src="./img/event2.png" alt="Art and Dance Competition" class="event-img">
                                <span class="event-date-badge">2083 Jestha 05</span>
                            </div>
                            <div class="event-card-body p-custom">
                                <h6 class="event-title fw-bold mb-0">Art and Dance Competition</h6>
                                <!-- Hidden description for featured view -->
                                <p class="event-desc text-muted small mb-0 d-none">
                                    Experience an incredible display of talent as students express themselves
                                    through vibrant artwork and energetic dance routines.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-sm-6">
                        <div class="event-card h-100 swappable-card" onclick="swapEvent(this)" style="cursor: pointer;"
                            title="Click to feature this event">
                            <div class="event-card-img-wrap">
                                <img src="./img/event3.png" alt="Sports Day" class="event-img">
                                <span class="event-date-badge">2083 Asar 21</span>
                            </div>
                            <div class="event-card-body p-custom">
                                <h6 class="event-title fw-bold mb-0">Sports Day</h6>
                                <p class="event-desc text-muted small mb-0 d-none">
                                    A day full of athleticism and teamwork, featuring track and field events, team
                                    sports, and spirited competitions.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-sm-6">
                        <div class="event-card h-100 swappable-card" onclick="swapEvent(this)" style="cursor: pointer;"
                            title="Click to feature this event">
                            <div class="event-card-img-wrap">
                                <img src="./img/event4.png" alt="Cultural Evening" class="event-img">
                                <span class="event-date-badge">2083 Shrawan 15</span>
                            </div>
                            <div class="event-card-body p-custom">
                                <h6 class="event-title fw-bold mb-0">Cultural Evening</h6>
                                <p class="event-desc text-muted small mb-0 d-none">
                                    Celebrate our rich diversity with traditional music, ethnic performances, and
                                    displays from various cultural backgrounds.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-sm-6">
                        <div class="event-card h-100 swappable-card" onclick="swapEvent(this)" style="cursor: pointer;"
                            title="Click to feature this event">
                            <div class="event-card-img-wrap">
                                <img src="./img/event5.png" alt="Science Fair" class="event-img">
                                <span class="event-date-badge">2083 Bhadra 28</span>
                            </div>
                            <div class="event-card-body p-custom">
                                <h6 class="event-title fw-bold mb-0">Science Fair</h6>
                                <p class="event-desc text-muted small mb-0 d-none">
                                    Discover innovative projects, fascinating experiments, and creative models
                                    presented by our budding young scientists.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
</div>

<script>
    function swapEvent(clickedCard) {
        // Featured (large) event elements
        const featuredCard = document.getElementById('featured-event');
        const featuredImg = featuredCard.querySelector('.featured-img');
        const featuredDate = featuredCard.querySelector('.featured-date');
        const featuredTitle = featuredCard.querySelector('.featured-title');
        const featuredDesc = featuredCard.querySelector('.featured-desc');

        // Clicked (small) event elements
        const clickedImg = clickedCard.querySelector('.event-img');
        const clickedDate = clickedCard.querySelector('.event-date-badge');
        const clickedTitle = clickedCard.querySelector('.event-title');
        const clickedDesc = clickedCard.querySelector('.event-desc');

        // Save current featured content
        const tempImgSrc = featuredImg.src;
        const tempDateText = featuredDate.textContent;
        const tempTitleText = featuredTitle.textContent;
        const tempDescHTML = featuredDesc.innerHTML;

        // Apply clicked content to featured slot
        featuredImg.src = clickedImg.src;
        featuredDate.textContent = clickedDate.textContent;
        featuredTitle.textContent = clickedTitle.textContent;
        featuredDesc.innerHTML = clickedDesc.innerHTML;

        // Apply old featured content into clicked slot
        clickedImg.src = tempImgSrc;
        clickedDate.textContent = tempDateText;
        clickedTitle.textContent = tempTitleText;
        clickedDesc.innerHTML = tempDescHTML;

        // On mobile and tablet size, scroll back to top of featured card smoothly
        if (window.innerWidth < 992) {
            featuredCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
</script>