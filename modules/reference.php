<section class="reference" ng-controller="referenceCtrl">

    <div class="container">

        <div class="title-box">

            <h4>WHAT DO PEOPLE HAVE TO SAY ABOUT ME?</h4>
            <h2>REFERENCE</h2>

            <hr class="custom-hr" ng-style="{'border-bottom' : '4px solid ' + secColor + ''}">

        </div>
    
        <div class="row">

            <div class="col-md-6">

                <div class="reference-text-wrapper">

                    <md-button class="md-raised green-btn" ng-click="openPopUp('reference')">Read full recomendation letter</md-button>

                    <p class="fa fa-quote-left"></p>
                    <p>It’s my pleasure to write this letter of recommendation for Thomas Messell. Thomas has been
with us at Ordbogen.com on a digital design/front-end programming internship at Ordbogen
from January 24th-April 24th 2017.</p>

                    <p>Thomas’s tasks were widely varied. He worked on digital design and animation pieces for SoMe,
designed and coded an internal messaging and task board for the marketing department,
designed, updated and implemented new pages to our existing careers website and generally
picked up necessary tasks when needed.</p>

                    <p>As a person, Thomas is a hard worker. He focuses on the task at hand, and is constantly striving
to learn more. He certainly has a very keen eye for modern, clean design and is an absolute asset
in the way that he can design and then implement his design via programming. He has
demonstrated an easy ability to work with various stakeholders and team members and has
produced some very unique design pieces for us as a company.</p>

                    <p>Without a doubt, I confidently recommend Thomas to join as a junior frontend programmer or
digital designer on any team. As a dedicated and knowledgeable employee and an all-around
great person, I know that he will be a beneficial addition to your organization.</p>

                    <p>Please feel free to contact me at +45 39 99 20 36 or at wjo@ordbogen.com should you like to
discuss Thomas’s qualifications and experience further. I’d be happy to expand on my
recommendation.</p>

                    <p>Best wishes,</p>

                    <p>Whitney Jørgensen</p>
                    <p>Head of Marketing & Talent</p>

                </div>

            </div>
            <div class="col-md-6">

                <div class="image-container">
                    <img src="assets/img/whitney.png">
                    <div class="text-heading">
                        <p><b>Whitney Jørgensen</b></p>
                        <p><i>Head of Marketing & Talent<br><br>Ordbogen.com</i></p>
                    </div>
                </div>

            </div>

        </div>
    </div>   

    <?php include('modules/popup.php');?> 

</section>

