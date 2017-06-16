

<p>Primary color:</p>
<input ng-click="checkDiv($event)" type="color" value="{{color}}" ng-model="color" />
{{color}}
<br>
<p>Secondary color:</p>
<input ng-click="checkDiv($event)" type="color" value="{{twoColor}}" ng-model="twoColor" />
{{twoColor}}
<button class="md-button md-raised" ng-click="changeColor()">Change colors</button><br>
