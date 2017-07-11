<section class="showcase" id="showcase" ng-controller="showcaseCtrl">

    <div class="showcase-intro-bg"></div>

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <h2>Showcase:</h2>

                <p>Preview some of my work which i have selected to show. <br><br> Here you will be able to see what the project is about and what technologies were used in the process of creating them.</p>


            </div>
            <div class="col-md-6">

                <i class="sparkles"></i>
                <i class="sparklestwo"></i>
                <i class="sparklesfour"></i>
                <i class="sparklesfive"></i>
            
                <div class="showcase-preview" style="background-image:url('assets/img/uploaded/{{featuredShowcase[0].url}}')" ng-click="focusShowcase('featured')">

                    <div class="desc-tag">
                        <h3>{{featuredShowcase[0].title}}</h3>
                        <p>{{featuredShowcase[0].desc}}</p>
                    </div> 
                    
                </div>

            </div>

        </div>

        <div class="row showcase-wrapper">

            <div class="col-md-6" ng-repeat="item in showcase | filter: { featured : 0}" ng-click="focusShowcase(item)">

                <div class="showcase-single" style="background-image:url('assets/img/uploaded/{{item.url}}')">

                    <div class="desc-tag">
                        <h3>{{item.title}}</h3>
                        <p>{{item.desc}}</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php include_once('views/showcase-focus.php');?>

</section>