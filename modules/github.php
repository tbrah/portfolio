<section class="github" ng-app="portApp">
    
    <div class="span-background">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="container-fluid">
        <div class="row" ng-controller="portCtrl">
            <div class="col-md-6 part-treehouse">

                <div class="git-container-left">
                
                    <h2>Treehouse Learning</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut ligula et magna accumsan ultrices. Etiam tempus quam at maximus dignissim. Maecenas ut ligula et magna accumsan ultrices. Etiam tempus quam at maximus dignissim.</p>
                

                    <p class="badge-intro">See what i have been learning recently:</p>
                    <div class="badge-container">
                        <img class="tree-badge" src="https://achievement-images.teamtreehouse.com/badge_php_laravelbasics_stage01.png">
                        <img class="tree-badge" src="https://achievement-images.teamtreehouse.com/badges_csharp_objects_stage03.png">
                        <img class="tree-badge" src="https://achievement-images.teamtreehouse.com/badges_csharp_objects_stage02.png">
                        <img class="tree-badge" src="https://achievement-images.teamtreehouse.com/badges_csharp_objects_stage01.png">
                    </div>
                    
                </div>

            </div>
            <div class="col-md-6 part-github">

                <div class="git-container-right">
                
                    <h2>Github Collection</h2>

                    <ul>
                        <h3>Solo projects:</h3>
                        <a href="{{item.html_url}}" target="_blank">
                        <li ng-repeat="item in gitRepos | limitTo:4" class="btn">
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