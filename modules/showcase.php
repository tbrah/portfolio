<section class="showcase" id="showcase" ng-controller="showcaseCtrl">

    <div class="showcase-intro-bg"></div>

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <h2>Showcase:</h2>

                <p>Preview some of my work which i have selected to show. <br><br> Here you will be able to see what the project is about and what technologies were used in the process of creating them.</p>

                <p><i>NOTE: This section is still under alot of development and functionality for the time being is heavily restricted. Appearence will most likely change aswell. <br><br> Sorry for the inconvenience.</i></p>

            </div>
            <div class="col-md-6">

                <div class="showcase-preview" style="background-image:url('assets/img/uploaded/{{featuredShowcase[0].url}}')">

                    <div class="desc-tag">
                        <h3>{{featuredShowcase[0].title}}</h3>
                        <p>{{featuredShowcase[0].desc}}</p>
                    </div>
                    
                </div>

            </div>

        </div>

        <div class="row showcase-wrapper">

            <div class="col-md-6" ng-repeat="item in showcase | filter: { featured : 0}">

                <div class="showcase-single" style="background-image:url('assets/img/uploaded/{{item.url}}')">

                    <div class="desc-tag">
                        <h3>{{item.title}}</h3>
                        <p>{{item.desc}}</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>