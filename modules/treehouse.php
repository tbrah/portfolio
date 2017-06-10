<section class="tree-git" ng-controller="treeGitCtrl">

    <div class="container">
    
        <div class="title-box">
        
            <h4>LEARNING SOMETHING NEW EVERYDAY</h4>
            <h2>LEARNING & PROJECTS</h2>
            <p><i>this data is automatically updated by provided api's</i></p>
            <hr class="custom-hr">
            <hr>
        
        </div>

        <div class="row">
        
            <div class="col-md-6">
                <img class="logo-img-tree" src="assets/img/treehouse-logo-outlines.png" alt="treehouse logo">
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
            
            <div class="col-md-6">
                <img class="logo-img-git" src="assets/img/github.png" alt="github logo">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut ligula et magna accumsan ultrices. Etiam tempus quam at maximus dignissim. Maecenas ut ligula et magna accumsan ultrices. Etiam tempus quam at maximus dignissim.</p>
                
                <ul>
                    <h3>Solo projects:</h3>
                    
                    <li ng-repeat="item in gitRepos | limitTo:4">
                    <a href="{{item.html_url}}" target="_blank">
                    {{item.name}}
                    <p class="desc">{{item.description}}</p>
                    <p>{{item.language}}</p>
                    </li></a>

                    <h3>Team Projects:</h3>
                    <li><a href="https://github.com/selkominator/intellifinder" target="_blank">intellifinder</a>
                        <p class="desc">Exam project</p>
                        <p>Javascript</p>
                    </li>
                
                </ul>              
            </div>
        
        </div>

        <hr>

    </div>

</section>