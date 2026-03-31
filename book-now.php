<div class="content-banner">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="./home">Home</a></li>
            <li><i class="fa fa-angle-right"></i></li>
            <li>Book Now</li>
        </ul>
    </div>
</div>

<div class="content book-now-page page-black-text">
    <div class="container">
        <div class="content-block">
            <div class="row">
                <div class="col-md-5">
                    <div class="booking-info-sidebar wow animate__animated animate__fadeInLeft">
                        <div class="section-title">
                            <h4><img src="https://jasperusa.sfo3.cdn.digitaloceanspaces.com/CM-Accounts-Ltd/pencil.webp" alt=""> Book an Appointment</h4>
                            <h2>Take Control of Your Finances Today</h2>
                        </div>
                        <p>Schedule a consultation with our expert accountants. We are here to help you with bookkeeping, tax preparation, and more.</p>
                        
                        <div class="sidebar-contact-list">
                            <div class="contact-item">
                                <i class="fa fa-phone"></i>
                                <div>
                                    <h5>Call Us</h5>
                                    <p><?php echo $phone; ?></p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fa fa-envelope"></i>
                                <div>
                                    <h5>Email Us</h5>
                                    <p><?php echo $email; ?></p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fa fa-map-marker"></i>
                                <div>
                                    <h5>Visit Us</h5>
                                    <p><?php echo $address; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="why-book-with-us">
                            <h3>Why Choose CM Accounts Ltd?</h3>
                            <ul>
                                <li><i class="fa fa-check-circle"></i> Certified Professionals</li>
                                <li><i class="fa fa-check-circle"></i> Tailored Financial Solutions</li>
                                <li><i class="fa fa-check-circle"></i> Accurate & Timely Reporting</li>
                                <li><i class="fa fa-check-circle"></i> Data Security Guaranteed</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="booking-form-wrapper wow animate__animated animate__fadeInRight">
                        <div class="form-header">
                            <h3>Ready to Start?</h3>
                            <p>Please fill out the form below and we'll get back to you shortly.</p>
                        </div>
                        <form action="./contact-send-vgsvshv" method="POST" class="booking-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group custom-form-group">
                                        <label for="name">Full Name*</label>
                                        <input type="text" name="fullName" class="form-control" id="name" placeholder="John Doe" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group custom-form-group">
                                        <label for="email">Email Address*</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="john@example.com" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group custom-form-group">
                                        <label for="phone">Phone Number*</label>
                                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="(123) 456-7890" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group custom-form-group">
                                        <label for="service">Select Service*</label>
                                        <select name="service" class="form-control" id="service" required>
                                            <option value="" disabled selected>Select a service</option>
                                            <option value="Bookkeeping">Bookkeeping</option>
                                            <option value="Tax Preparation">Tax Preparation</option>
                                            <option value="Payroll">Payroll</option>
                                            <option value="Accounting Consulting">Accounting Consulting</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group custom-form-group">
                                        <label for="message">Message*</label>
                                        <textarea name="message" class="form-control" id="message" rows="5" placeholder="How can we help you?" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="btnSubmit" class="btn-booking-submit">Book Now <i class="fa fa-calendar-check"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
