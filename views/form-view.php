
              <form name="contact-form" method="post" action="includes/contact_form.php">
                  <label>
                  <input name="name" maxlength="50" required>
                  <span class="floating-label">Name:</span>
                  </label>

                  <label>
                  <input name="email" maxlength="80" required>
                  <span class="floating-label">E-mail:</span>
                  </label>

                  <label>
                  <textarea placeholder="Message:" name="message" required></textarea>
                  </label>

                  <md-button class="md-raised" type="submit">Send</md-button>
              </form>