<li ng-repeat="item in designTech">
    {{item.name}}
    <div class="level-wrapper">
        <span class="blue-circle" ng-if="item.level >= 1"></span>
        <span class="blue-circle" ng-if="item.level >= 2"></span>
        <span class="blue-circle" ng-if="item.level >= 3"></span>
        <span class="blue-circle" ng-if="item.level >= 4"></span>
        <span class="blue-circle" ng-if="item.level >= 5"></span>
    </div>
    <md-tooltip md-direction="right">{{levelsDesign[item.level - 1]}}</md-tooltip>
</li>