<div class="popupc closePopUp" ng-class="{popupActive: togglePopUp}" ng-click="closePopUp($event)" data-state="open">

  <div class="popup-content" ng-class="{referenceActive: currentView == 'reference'}">

    <p class="close-popup closePopUp" ng-click="closePopUp($event)">close</p>

      <mail-form ng-if="currentView == 'form'"></mail-form>

      <reference-letter ng-if="currentView == 'reference'"></reference-letter>
    
  </div>


</div>