<div class="nav-bar">
    <p>ColorChanger.exe</p>
    <div class="icon-wrapper">
        <i class="fa fa-window-minimize"></i>
        <i class="fa fa-window-maximize"></i>
        <i class="fa fa-window-close-o" ng-click="viewSelector('')"></i>
    </div>
</div>

<div class="content">

    <p>Primary color:</p>
    <input ng-click="checkDiv($event)" type="color" value="{{color}}" ng-model="color" />
    {{color}}
    <br>
    <p>Secondary color:</p>
    <input ng-click="checkDiv($event)" type="color" value="{{twoColor}}" ng-model="twoColor" />
    {{twoColor}}
    <br>
    <button class="md-button md-raised" style="background: {{secondaryColor}}" ng-click="changeColor()">Reset colors</button><br>

</div>
