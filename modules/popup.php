<div class="popupc" ng-class="{popupActive: togglePopUp}" ng-click="popUpControl()">

  <div class="popup-content">

    <h2>Write me a message!</h2>

            <form name="contact-form" method="post" action="contact_form.php">
                <input placeholder="Name:" name="name" maxlength="50" required>
                <input placeholder="Phone:" name="phone" maxlength="50">
                <input placeholder="E-mail:" name="email" maxlength="80" required>
                <textarea placeholder="Write your message here:" name="message" required></textarea>
                <md-button class="md-raised" type="submit">Send</md-button>
            </form>
    
  </div>


</div>