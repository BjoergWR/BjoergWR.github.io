<?php
$page = "contact";
include('view/header.php');
?>


    <main id ="main_content">
        <section class="contact bg-dark prime--container last--container">
<!--        <div><p id="contact-p">SEND US AN EMAIL</p></div>-->

        <div class="table1 from_top" id="form_registration">
            <!--    The method of the of the from, specifies how data is submitted to the server.
                    end the action specifies where the form will send data-->
            <form id="registrationForm" class="contact-form" action="formContact.php" method="POST">
                <div><h1>We'd Loved to Hear From You</h1><br></div>
                <p class="contact-para">
                    <label for="navn">Navn: </label><br>
                    <input
                            type="text"
                            name="name"
                            id ="navn"
                            placeholder="Firstname Lastname"/>
                </p>
                <p class="contact-para">
                    <label for="email">Email: </label><br>
                    <input
                            type="text"
                            name="email"
                            id="email"
                            placeholder="Your email"/>
                </p>
                <p class="contact-para">
                    <label for="phone">Number: </label><br>
                    <input
                            type="tel"
                            name="phone "
                            id="phone"
                            placeholder= "505050"
                            pattern = "\d{6}"/>
                </p>
                <p class="contact-para">
                    <label for="navn">Subject </label><br>
                    <input
                            type="text"
                            name="subject"
                            id="subject"
                            placeholder="Subject"/>
                </p>
                <p class="contact-para">
                    <label for="comments">Message</label><br>
                    <textarea
                            name="message"
                            id="comments"
                            placeholder="Message"
                            rows="3"
                            cols="25"></textarea>
                </p>
                <p class="submit">
                    <button type="submit" name="submit" class='action_btn add_button'/>Send Mail</button>
                </p>
            </form>
        </div>
        <div class="table2">
            <table>

                <div><h1>Contact Us</h1><br></div>

                <tbody>
                <tr>
                    <td>OPIÐ:</td>
                    <td>15.00-23.00</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>505050</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><a href="mailto:email@email.fo" class="mail" target="_blank">burgarastova@mail.fo</a></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>Heimagøta 82, 100 Tórshavn </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
    </main>


<?php include('view/footer.php');?>