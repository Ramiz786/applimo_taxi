
<section class="page-header">
                        <div class="page-header-shape"></div>
                        <div class="container">
                                <div class="page-header-info">
                                        <h4>Service Details!</h4>
                                        <h2>Feel your journey <br> with <span>American Platinum Limousine!</span></h2>
                                        <p>Luxury Cars For Any Occasions </p>
                                </div>
                        </div>
                </section><div class="taxi-booking bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <form action="<?php echo base_url('book-taxi/submit-form') ?>" method="post" id="book-taxi-ride" class="default_form">
                    <div class="taxi-booking-form">
                        <div class="form-field">
                            <i class="las la-user-tie"></i>
                            <input type="text" id="full-name" name="full_name" class="form-control" placeholder="Your Name"  fdprocessedid="gzjb15">
                        </div>
                        <div class="form-field">
                            <i class="las la-phone"></i>
                            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile"  fdprocessedid="yphfyn">
                        </div>
                        <div class="form-field">
                            <i class="las la-envelope-open"></i>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email"  fdprocessedid="yphfyn">
                        </div>
                        <div class="form-field">
                            <i class="las la-tags"></i>
                            <select name="package_type" id="package-type" class="niceSelect" style="display: none;">
                                <option value="Luxury Sedan" <?php echo ($type != '' && $type == 'luxury-sedan') ? 'selected' : ''; ?>>Luxury Sedan</option>
                                <option value="Luxury SUV" <?php echo ($type != '' && $type == 'luxury-suv') ? 'selected' : ''; ?>>Luxury SUV</option>
                                <option value="Stretch Limousine" <?php echo ($type != '' && $type == 'stretch-limousine') ? 'selected' : ''; ?>>Stretch Limousine</option>
                                <option value="Party & Executive Bus" <?php echo ($type != '' && $type == 'party-bus') ? 'selected' : ''; ?>>Party & Executive Bus</option>
                                <option value="Special Request" <?php echo ($type != '' && $type == 'special-request') ? 'selected' : ''; ?>>Special Request</option>
                            </select>
                            <!-- <div class="nice-select niceSelect" tabindex="0"><span class="current">Luxury Sedan</span>
                                <ul class="list">
                                    <li data-value="Luxury Sedan" class="option selected">Luxury Sedan</li>
                                    <li data-value="Luxury SUV" class="option">Luxury SUV</li>
                                    <li data-value="Stretch Limousine" class="option">Stretch Limousine</li>
                                    <li data-value="Party & Executive Bus" class="option">Party & Executive Bus</li>
                                    <li data-value="Special Request" class="option">Special Request</li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="form-field">
                            <i class="las la-user-friends"></i>
                            <select name="passengers" id="passengers" class="niceSelect" style="display: none;">
                                <option value="1">1 Person</option>
                                <option value="2">2 Person</option>
                                <option value="3">3 Person</option>
                                <option value="4">4 Person</option>
                                <option value="5">5 Person</option>
                            </select>
                            <div class="nice-select niceSelect" tabindex="0"><span class="current">1 Person</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected">1 Person</li>
                                    <li data-value="2" class="option">2 Person</li>
                                    <li data-value="3" class="option">3 Person</li>
                                    <li data-value="4" class="option">4 Person</li>
                                    <li data-value="5" class="option">5 Person</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-field">
                            <i class="las la-map-marker"></i>
                            <input type="text" id="start-dest" name="start_dest" class="form-control" placeholder="Start Destination"  fdprocessedid="ec217j">
                        </div>
                        <div class="form-field">
                            <i class="las la-map-marker"></i>
                            <input type="text" id="end-dest" name="end_dest" class="form-control" placeholder="End Destination"  fdprocessedid="npy7p">
                        </div>
                        <div class="form-field">
                            <i class="las la-calendar"></i>
                            <input type="text" id="ride-date" name="ride_date" class="form-control date-picker" placeholder="Select Date"  fdprocessedid="y5g1gf">
                        </div>
                        <div class="form-field">
                            <i class="las la-clock"></i>
                            <input type="text" id="ride-time" name="ride_time" class="form-control time-picker" placeholder="Select Time"  fdprocessedid="a7qmb9">
                        </div>
                        <div class="form-field">
                            <button id="submit" class="default-btn" style="width:100%;" type="submit" fdprocessedid="qpr1fn">Book Your Limo</button>
                        </div>
                    </div>
                    <div id="form-messages" class="alert" role="alert"></div>
                </form>
            </div>
        </div>
    </div>
</div>