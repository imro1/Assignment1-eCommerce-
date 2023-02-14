<?php $this->view('shared/header','Contact Us'); ?>
<div class="main">
<h1>Contact Us</h1>
<p>Wanna reach us?Write your email information and message in the following form and then submit</p>

<div>
    <form action='' method='post'>
        <label for="new_email">Email:</label>
        <input type="email" name="new_email" placeholder="example@example.com" required style="width: 300px"></br>

        <label for="new_message">Message:</label>
        <input type="textarea" id="new_message" name="new_message" placeholder="We look forward to your message!" required style="width: 400px; height:80px;"><br></br>
        
        <input type="submit" name="action" value="submit"/>
    </form>
</div>

</div>
<?php $this->view('shared/footer'); ?>