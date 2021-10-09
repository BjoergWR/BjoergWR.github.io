<?php
$page = "contact";
include('view/header.php');
?>


    <main id ="main_content">
        <section class="contact bg-dark prime--container last--container from_top ">
<!--        <div><p id="contact-p">SEND US AN EMAIL</p></div>-->
        <div class="table1 " id="form_registration">
            <!--    The method of the of the from, specifies how data is submitted to the server.
                    end the action specifies where the form will send data-->
            <form id="registrationForm" class="contact-form" action="formContact.php" method="POST">
                <p class="contact-para">
                    <label for="navn">Navn: </label>
                    <input
                            type="text"
                            name="name"
                            id ="navn"
                            placeholder="Firstname Lastname"/>
                </p>
                <p class="contact-para">
                    <label for="email">Email: </label>
                    <input
                            type="text"
                            name="email"
                            id="email"
                            placeholder="Your email"/>
                </p>
                <p class="contact-para">
                    <label for="phone">Number: </label>
                    <input
                            type="tel"
                            name="phone "
                            id="phone"
                            placeholder= "505050"
                            pattern = "\d{6}"/>
                </p>
                <p class="contact-para">
                    <label for="navn">Subject </label>
                    <input
                            type="text"
                            name="subject"
                            id="subject"
                            placeholder="Subject"/>
                </p>
                <p class="contact-para">
                    <label for="comments">Message</label>
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
                <caption>
                    <strong>Kontakta okkum</strong>
                </caption>
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
                    <td><a href="mailto:email@email.fo">Email.fo</a></td>
                </tr>
                <tr>
                    <td>Stað</td>
                    <td><a href="lokation.html">Vestarabryggja</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
    </main>


<?php include('view/footer.php');?>