<div id="homepage-block-2" class="bgMove" style="background-image: url(assets/images/_homepage-1-bg.jpg);">
    <div class="container">
        <h2>Get Taxi Online</h2>

        <form class="" method="get" action="get-taxi.php">
            <div class="row forms">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" value="" name="txtPickup" id="txtPickup" placeholder="Pickup Location" class="ajaxField required" required><span class="fa fa-map-marker"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" value="" name="txtDrop" id="txtDrop" placeholder="Drop Location" class="ajaxField required" required><span class="fa fa-map-marker"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" value="" name="txtDate" id="datepicker1" placeholder="Date" class="ajaxField required" required><span class="fa fa-calendar"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" value="" name="txtPassengers" id="txtPassengers" placeholder="No of Passengers" class="input-validater" required><span class="fa fa-male"></span>
                    </div>
                </div>
            </div>
            <input type="submit" id="btnSubmit" class="btn btn-yellow btn-bg-dark btn-lg" value="Get Taxi">
            <input type="hidden" id="type" name="type" value="2" class="ajaxField">
        </form>


        <div id="large-image">
            <img src="assets/images/_car-big-2.png" alt="Taxi">
            <div class="dialog">
                <span class="fa fa-phone"></span>
                <h4 class="white">Call Taxi Now</h4>
                <h3 class="yellow">800-5-800</h3>
            </div>
        </div>
    </div>
</div>