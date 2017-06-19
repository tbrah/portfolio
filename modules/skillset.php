<section class="skillset" ng-controller="skillsetCtrl">

    <div class="skillset-background">

        <img class="connection-dots" src="assets/img/connection-dots.svg">

    </div>

    <div class="container">

        <div class="title-box">

            <h4>LEARN ABOUT MY TECHINCAL SKILLS</h4>

            <h2>MY SKILLS</h2>

            <hr class="custom-hr" ng-class="{'red-hr': currentTab == 'code'}">

        </div>

    </div>

        <div class="row">

            <div class="col-lg-6 tile-wrapper">

                <div class="tile-overlay" 
                ng-class="{'tile-overlay-design': currentTab == 'design'}"
                ng-style="currentTab !== 'design' ? {'background': 'linear-gradient(160deg, #fff 23%, ' + primColor + ' 92%)'} : {'background': 'linear-gradient(160deg, #fff 23%, ' + secColor + ' 92%)'}">
                

                    <div class="circle-div" 
                    ng-style="currentTab !== 'design' ? { 'background': primColor } : { 'background': secColor }" 
                    ng-click="check()">
                        <i class="fa" ng-class="{'fa-code': currentTab == 'code', 'fa-paint-brush': currentTab == 'design'}"></i>
                    </div>

                        <div class="button-wrapper">

                            <md-button type="button" class="md-raised" 
                            ng-click="selectTab('code')" 
                            ng-class="{'red-btn': currentTab == 'code'}"
                            ng-style="currentTab == 'code' ? { 'background': primColor } : {}" >
                            Coding Skills
                            </md-button>

                            <md-button type="button" class="md-raised" 
                            ng-click="selectTab('design')" 
                            ng-class="{'blue-btn': currentTab == 'design'}"
                            ng-style="currentTab == 'design' ? { 'background': secColor } : {}">
                            Design Skills
                            </md-button>

                        </div>

                        <div class="skill-explain">
                            <span ng-repeat="item in levelsCode" ng-style="currentTab !== 'design' ? { 'background': primColor } : { 'background': secColor }">
                                <md-tooltip md-direction="top">{{item}}</md-tooltip>
                            </span>
                            
                            <p><i>Hover your mouse over the dots to see what they mean.</i></p>
                        </div>

                        <ul>

                            <code-list ng-if="currentTab == 'code'"></code-list>

                            <design-list ng-if="currentTab == 'design'"></design-list>

                        </ul>

                </div>

                <div class="tile-gradient" 
                ng-class="{'tile-gradient-blue': currentTab == 'design'}"
                ng-style="currentTab !== 'design' ? {'background': 'linear-gradient(160deg, #fff 23%, ' + primColor + ' 92%)'} : {'background': 'linear-gradient(160deg, #fff 23%, ' + secColor + ' 92%)'}"></div>

            </div>
        
        </div>

        <div class="container">

            <div class="row">
                
                <div class="col-lg-6 col-lg-offset-6 text-box">

                    <h4>TECHNOLOGIES I USE</h4>

                    <h2><span ng-if="currentTab == 'code'">CODING</span><span ng-if="currentTab == 'design'">DESIGN</span></h2>

                    <p ng-if="currentTab == 'code'">
                        My true passions lies with front end development, but my core competences
                        reach beyond just coding. HTML, CSS, JavaScript frameworks (JQuery, AngularJS,
                        Angular 2) as well as Bootstrap are skills that not only I excel at, but I still find
                        exciting to work with. I am familiar with PHP and MySQL and have worked with
                        them on several occasions. I have briefly worked with Smarty, which is a template
                        engine that Ordbogen.com used. I understand the logic behind object orientated
                        code through Angular 2 and can easily translate the same logic to backend
                        frameworks if needed.
                        <br><br>
                        I spend a lot of time learning new coding technologies which you will be able to get a insight aswell.
                    </p>
                    
                    <p ng-if="currentTab == 'design'">I have internship experience working as a digital designer at Ordbogen.com. Designing mockups and various marketing peices is something i feel confident in doing and have experience doing so. The Adobe Package is the software bundle of choice. Currently moving into Adobe Experience Design for designing mockups, although i would prefer working with Sketch.
                    <br>
                    <br>
                    <i>Being able to design aswell as code eleminates the need of a supporting designer. You get more bang for you buck hiring me!</i>
                    <br><br>
                     I have designed print marketing peices for PR events aswell as Social Media content. If you are interested in seeing these marketing peices I have designing click <a href="">here</a> to skip to my showcase.
                     </p>

                    <p><a href="#" ng-if="currentTab == 'code'">See what i am currently learning <i class="fa fa-angle-right"></i></a></p>
                
                </div>


            </div>

        </div>



</section>