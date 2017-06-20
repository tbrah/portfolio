<section class="tree-git" ng-controller="treeGitCtrl">

    <div class="container">
    
        <div class="title-box">
        
            <h4>LEARNING SOMETHING NEW EVERYDAY</h4>
            <h2>LEARNING & PROJECTS</h2>
            <p><i>this data is automatically updated by provided api's</i></p>
            <hr class="custom-hr" ng-style="{'border-bottom': '4px solid ' + secColor + ' '}">
            <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
            <hr>
        
        </div>

        <div class="row">
        
            <div class="col-md-6">
                <img class="logo-img-tree" src="assets/img/treehouse-logo-outlines.png" alt="treehouse logo">
                <p>Constantly trying to improve my coding abilties and expanding into different technologies, i use treehouse.com to assist my learning.</p>
                <p>Below you will be able to see what i have been learning recently and what courses i have completed.</p>  
                    <ul>
                        <li ng-repeat="(key, value) in treehousePoints | activeTech">{{key}} <span>{{value}}<span></li>
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
                <p>I currently use GitHub to store and manage my projects. I Have had some commericial experience with gitLab aswell.</p>
                <p>Here is a quick overview of what projects i have been working on:</p>
                <p><a href="https://github.com/tbrah" target="_blank">Link to my github account</a></p>
                
                <ul>
                    <h3>Solo projects:</h3>
                    
                    <a ng-repeat="item in gitRepos | limitTo:4" href="{{item.html_url}}" target="_blank" >
                        <li>
                        {{item.name}}
                        <p class="desc">{{item.description}}</p>
                        <p>{{item.language}}</p>
                        </li>
                    </a>

                    <h3>Team Projects:</h3>
                    <a href="https://github.com/selkominator/intellifinder" target="_blank">
                        <li>
                            intellifinder
                            <p class="desc">Exam project</p>
                            <p>Javascript</p>
                        </li>
                    </a>
                
                </ul>              
            </div>
        
        </div>

        <hr>

    </div>

</section>