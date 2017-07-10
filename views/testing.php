<div class="outer ng-hide" ng-show="toggleFocus == true" ng-click="closeFocus($event)">
    <div class="center-div">

        <div class="left-side">

            <div class="image-preview">
                <img ng-src="assets/img/uploaded/{{selectedItem.url}}">
            </div>

        </div>
        <div class="right-side">

            <div class="tech-view">

                <i class="fa fa-times" ng-click="closeFocus($event)"></i>

                <h2>TECHNOLOGIES USED:</h2>

                <div class="icon-wrapper">

                    <figure ng-repeat="item in selectedItem.techarray">
                        <img ng-src="assets/img/uploaded/tech/{{item.img}}" alt="{{item.title}}">
                        <md-tooltip class="showme" md-direction="bottom">{{item.title}}</md-tooltip>
                    </figure>
                    
                </div>

            </div>

            <div class="desc-view">

                <div class="slant">

                    <h2>{{selectedItem.title}}</h2>

                    <p><i>{{selectedItem.desc}}</i></p>

                </div>

                <p class="desc-p" ng-bind-html="selectedItem.text"></p>

            </div>

            <div class="nxt-view" style="background-image:url('assets/img/uploaded/{{nextKey.url}}');">

                <div class="next-view-overlay" ng-click="switchShowcase()">

                    <a href="#">Next <i class="fa fa-angle-right"></i></a>

                </div>
                
            </div>

        </div>

    </div>
</div>