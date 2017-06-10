<section class="github">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 part-treehouse" ng-controller="treehouseCtrl">

                <div class="git-container-left">
                
                    <h2>Treehouse Learning</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut ligula et magna accumsan ultrices. Etiam tempus quam at maximus dignissim. Maecenas ut ligula et magna accumsan ultrices. Etiam tempus quam at maximus dignissim.</p>
                
                    <ul>
                        <li ng-repeat="(key, value) in treehousePoints" ng-if="value > 0">{{key}} <span>{{value}}<span></li>
                    </ul>

                    <p class="badge-intro">See what i have been learning recently:</p>
                    <div class="badge-container">
                        <figure ng-repeat="item in treehouseBadges | reverse | limitTo:12">
                            <img class="tree-badge" ng-src="{{item.icon_url}}">
                            <md-tooltip md-direction="bottom">{{item.name}} // {{item.courses[0].title}}</md-tooltip>
                        </figure>
                    </div>
                    
                </div>

            </div>
            <div class="col-md-6 part-github" ng-controller="githubCtrl">

                <div class="git-container-right">
                
                    <h2>Github Collection</h2>

                    <ul>
                        <h3>Solo projects:</h3>
                        
                        <li ng-repeat="item in gitRepos | limitTo:4" class="btn">
                        <a href="{{item.html_url}}" target="_blank">
                        {{item.name}}
                        <p class="desc">{{item.description}}</p>
                        <p>{{item.language}}</p>
                        </li></a>

                        <h3>Team Projects:</h3>
                        <li class="btn"><a href="https://github.com/selkominator/intellifinder" target="_blank">intellifinder</a>
                            <p class="desc">Exam project</p>
                            <p>Javascript</p>
                        </li>
                    </ul>
                
                </div>

            </div>
        </div>
    </div>
</section>