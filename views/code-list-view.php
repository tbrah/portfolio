<li ng-repeat="item in codingTech">
    {{item.name}}
    <div class="level-wrapper">
        <span ng-style="{'background' : primColor}" ng-if="item.level >= 1"></span>
        <span ng-style="{'background' : primColor}" ng-if="item.level >= 2"></span>
        <span ng-style="{'background' : primColor}" ng-if="item.level >= 3"></span>
        <span ng-style="{'background' : primColor}" ng-if="item.level >= 4"></span>
        <span ng-style="{'background' : primColor}" ng-if="item.level >= 5"></span>
    </div>
    <md-tooltip md-direction="right">{{levelsCode[item.level - 1]}}</md-tooltip>
</li>