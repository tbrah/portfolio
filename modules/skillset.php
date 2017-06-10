<section class="skillset" ng-controller="skillsetCtrl">

    <div class="skillset-background">
        
    </div>

    <div class="container">

        <div class="title-box">

            <h4>LEARN ABOUT MY TECHINCAL SKILLS</h4>

            <h2>MY SKILLS</h2>

        </div>

    </div>

        <div class="row">

            <div class="col-lg-6 tile-wrapper">

                <div class="tile-overlay">

                    <div class="circle-div"><i class="fa fa-code"></i></div>

                        <div class="button-wrapper">

                            <md-button type="button" class="md-raised" data-id="1">Coding Skills</md-button>
                            <md-button type="button" class="md-raised" data-id="1">Design Skills</md-button>

                        </div>

                        <div class="skill-explain">
                            <span><md-tooltip md-direction="bottom">Tried it once</md-tooltip></span>
                            <span><md-tooltip md-direction="bottom">Used it in a project</md-tooltip></span>
                            <span><md-tooltip md-direction="bottom">Used it in multiple projects  /  Comfortable using it</md-tooltip></span>
                            <span><md-tooltip md-direction="bottom">Use it on a regular basis / Very Comfortable using it</md-tooltip></span>
                            <span><md-tooltip md-direction="bottom">Senpai</md-tooltip></span>
                        </div>

                        <ul>
                            <li ng-repeat="item in codingTech">
                                {{item.name}}
                                <div class="level-wrapper">
                                    <span ng-if="item.level >= 1"></span>
                                    <span ng-if="item.level >= 2"></span>
                                    <span ng-if="item.level >= 3"></span>
                                    <span ng-if="item.level >= 4"></span>
                                    <span ng-if="item.level >= 5"></span>
                                </div>
                            </li>
                        </ul>

                </div>

                <div class="tile-gradient"></div>

            </div>
        
        </div>

        <div class="container">

            <div class="row">
     
                <div class="col-lg-6 showfirst">

                </div>
                
                <div class="col-lg-6 text-box">

                    <h4>TECHNOLOGIES I USE</h4>

                    <h2>CODING</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut ligula et magna accumsan ultrices. Etiam tempus quam at maximus dignissim. Nulla vitae mauris ipsum. Etiam commodo, augue vitae viverra ullamcorper, metus sem lobortis purus, a tincidunt arcu nulla sit amet purus. Pellentesque vitae lorem eu lacus convallis convallis. Pellentesque at condimentum nunc. Phasellus at dictum augue, sed convallis turpis. In eget consectetur ante. Integer posuere viverra nulla. Nam sed egestas justo. Sed vitae efficitur dolor. Nullam nec sagittis quam. Maecenas viverra quis diam vitae convallis. Nulla ullamcorper varius dui, vitae tempus odio efficitur sit amet. Vivamus vel justo sodales, porttitor ante at, sodales magna.</p>

                </div>


            </div>

        </div>



</section>