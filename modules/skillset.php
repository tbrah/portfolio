<section class="skillset" ng-controller="skillsetCtrl">

    <div class="skillset-background"></div>

    <div class="container">

        <div class="title-box">

            <h4>LEARN ABOUT MY TECHINCAL SKILLS</h4>

            <h2>MY SKILLS</h2>

        </div>

    </div>

        <div class="row">

            <div class="col-lg-6 tile-wrapper">

                <div class="tile-overlay" ng-class="{'tile-overlay-design': currentTab == 'design'}">

                    <div class="circle-div" ng-class="{'blue-circle': currentTab == 'design'}">
                        <i class="fa" ng-class="{'fa-code': currentTab == 'code', 'fa-paint-brush': currentTab == 'design'}"></i>
                    </div>

                        <div class="button-wrapper">

                            <md-button type="button" class="md-raised" ng-click="selectTab('code')" ng-class="{'red-btn': currentTab == 'code'}">Coding Skills</md-button>
                            <md-button type="button" class="md-raised" ng-click="selectTab('design')" ng-class="{'blue-btn': currentTab == 'design'}">Design Skills</md-button>

                        </div>

                        <div class="skill-explain">
                            <span ng-repeat="item in levelsCode" ng-class="{'blue-circle': currentTab == 'design'}">
                                <md-tooltip md-direction="bottom">{{item}}</md-tooltip>
                            </span>
                        </div>

                        <ul>

                            <code-list ng-if="currentTab == 'code'"></code-list>

                            <design-list ng-if="currentTab == 'design'"></design-list>

                        </ul>

                </div>

                <div class="tile-gradient" ng-class="{'tile-gradient-blue': currentTab == 'design'}"></div>

            </div>
        
        </div>

        <div class="container">

            <div class="row">
                
                <div class="col-lg-6 col-lg-offset-6 text-box">

                    <h4>TECHNOLOGIES I USE</h4>

                    <h2><span ng-if="currentTab == 'code'">CODING</span><span ng-if="currentTab == 'design'">DESIGN</span></h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut ligula et magna accumsan ultrices. Etiam tempus quam at maximus dignissim. Nulla vitae mauris ipsum. Etiam commodo, augue vitae viverra ullamcorper, metus sem lobortis purus, a tincidunt arcu nulla sit amet purus. Pellentesque vitae lorem eu lacus convallis convallis. Pellentesque at condimentum nunc. Phasellus at dictum augue, sed convallis turpis. In eget consectetur ante. Integer posuere viverra nulla. Nam sed egestas justo. Sed vitae efficitur dolor. Nullam nec sagittis quam. Maecenas viverra quis diam vitae convallis. Nulla ullamcorper varius dui, vitae tempus odio efficitur sit amet. Vivamus vel justo sodales, porttitor ante at, sodales magna.</p>

                    <p><a href="#" ng-class="{'blue-link': currentTab == 'design'}">See what i am currently learning <i class="fa fa-angle-right"></i></a></p>
                
                </div>


            </div>

        </div>



</section>