<div class="laptop">
    <span class="shadow"></span>
    <span class="lid"></span>
    <span class="camera"></span>
    <div class="screen">

        <div class="console-background">

            <div class="background-fader" ng-if="viewSelected"></div>

            <color-picker ng-show="viewSelected == 'color-picker'" class="ng-hide"></color-picker>

            <i class="right-corner fa" ng-click="showTab()" ng-class="{'fa-info': !tabState, 'fa-times': tabState}"></i>
            <div class="puls"></div>

            <div class="right-side-menu" ng-class="{'tab-active': tabState}">
                <button class="md-button md-raised" ng-click="viewSelector('color-picker')"><i class="fa fa-paint-brush"></i> Color picker</button>
                <button class="md-button md-raised">hello</button>
            </div>

            <p >
                Portfolio System [Version 10.0.14393]
                <br>
                (c) 2017 Last updated: {{portfolio[0].pushed_at | date:"MM/dd/yyyy 'at' h:mma"}}
            </p>

            <p>
                c:\Users\Guest > <input autofocus>
            </p>

        </div>

    </div>
    <span class="chassis">
    <span class="keyboard"></span>
    <span class="trackpad"></span>
    </span>
</div>