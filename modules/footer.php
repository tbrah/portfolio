<footer ng-controller="popUpCtrl">

    <div class="container">
    
        <div class="row">

            <div class="col-md-6">
            
                <div class="phone">

                    <div class="camera"></div>

                    <div class="speaker"></div>

                    <div class="phone-screen">

                            <div class="envelope-wrapper">

                                <div class="env-wrapper-body">

                                    <div class="left-side"></div>

                                    <div class="right-side"></div>

                                </div>

                                <div class="mail">

                                    <span class="stamp"></span>
                                    <span class="heading"></span>
                                    <b class="paragraf"></b>
                                    <b class="paragraf"></b>
                                    <b class="paragraf"></b>

                                </div>
                            
                            </div>

                            <md-button type="button" class="md-raised" data-id="1">Launch Mail App</md-button>

                            <md-button type="button" class="md-raised browser-form-btn" data-id="0" ng-click="openPopUp('form')">Launch Browser Form</md-button>

                            <p><i>Choose whether you want to write an e-mail via your default e-mail software of choice, or simply use the in-browser e-mail form.</i></p>

                    </div>

                    <div class="phone-home-button"></div>

                </div>

            </div>
        
            <div class="col-md-6">
            
                <h2>Ready to get in touch?</h2>

                <p>Feel free to send me a message through the form.</p>

                <p class="explain"><i>Click one of the buttons on the phone to show the form.</i></p>

                <div class="phone-hori">

                        <div class="camera-hori"></div>

                        <div class="speaker-hori"></div>

                        <div class="phone-screen-hori"></div>

                        <div class="phone-home-button-hori"></div>

                </div>

            </div>

        </div>
    
    </div> 

    <?php include('modules/popup.php');?>

</footer>