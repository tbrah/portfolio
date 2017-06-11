<footer ng-controller="popUpCtrl">

    <div class="container">
    
        <div class="row">

            <div class="col-md-6">

                <div class="form">

                    <mail-form></mail-form>

                </div>

            </div>
        
            <div class="col-md-6">

                <div class="title-box">

                    <h2>Ready to get in touch?</h2>

                    <p>Feel free to send me a message through the form.</p>

                    <p class="explain"><i>Rather write through your e-mail app of choice?<br>I've got you covered, launch the Mail App instead below.</i></p>

                </div>

                <div class="phone-hori">

                        <div class="camera-hori"></div>

                        <div class="speaker-hori"></div>

                        <div class="phone-screen-hori">

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

                        </div>

                        <div class="phone-home-button-hori"></div>

                </div>

            </div>

        </div>
    
    </div> 

    <?php include('modules/popup.php');?>

</footer>