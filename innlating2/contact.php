<?php

require_once "config.php";

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//
//require '../vendor/autoload.php';
//
//$mail = new PHPMailer(true);

$name = "";
$name_err = "";
$email = "";
$email_err = "";
$phone = "";
$phone_err = "";
$newid = 0;
$subject = '';
$subject_err = '';
$message = '';
$message_err = '';
$message_sent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } else{
        $name = $input_name;
    }

    // Validate email
    $input_email = trim($_POST["email"]);
    if (empty($input_email)) {
        $email_err = "Please enter an email.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Email is not valid!";
    }else {
        $email = $input_email;
    }

    // Validate phone
    $input_phone = trim($_POST["phone"]);
    if (empty($input_phone)) {
        $phone_err = "Please enter the phone number.";
    } elseif (!is_numeric($input_phone)) {
        $phone_err = "Please enter an integer value.";
    } else {
        $phone = $input_phone;
    }

    // Validate subject
    $input_subject = trim($_POST["subject"]);
    if (empty($input_subject)) {
        $subject_err = "Please enter a subject.";
    } else {
        $subject = $input_subject;
    }

    $input_message = trim($_POST["message"]);
    if (empty($input_message)) {
        $subject_err = "Please enter a message.";
    } else {
        $message = $input_message;
    }

    if (empty($name_err) && empty($email_err) &&
        empty($phone_err) && empty($subject_err) && empty($message_err)) {
        // Prepared statement
        $sql = "INSERT INTO contact (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssiss", $param_name,
                $param_email, $param_phone, $param_subject, $param_message);

            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_phone = $phone;
            $param_subject = $subject;
            $param_message = $message;

            if(mysqli_stmt_execute($stmt)){
                $message_sent = true;
//                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
            $message_sent = true;


            //    try {
//        //$mail->SMTPDebug = 2;
//        $mail->isSMTP();
//        $mail->Host       = 'smtp.gmail.com;';
//        $mail->SMTPAuth   = true;
//        $mail->Username   = 'tattamic@gmail.com';
//        $mail->Password   = 'SET LOGIN TIL EMAIL HER';
//        $mail->SMTPSecure = 'tls';
//        $mail->Port       = 587;
//
//        $mail->setFrom($email, $name);
//        $mail->addAddress('tattamic@gmail.com'); // TÌN EMAIL ADDR
//
//
//        $mail->isHTML(true);
//        $mail->Subject = $subject;
//        $mail->Body    = $message;
//        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
//        $mail->send();
//        echo "Mail has been sent successfully!";
//    } catch (Exception $e) {
//        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//    }
        }

    }
}
?>

<?php
$page = "contact";
include('view/header.php');
?>

    <main id="main_content">
        <section class="contact bg-dark prime--container last--container">
            <div class="table1 from_top" id="form_registration">

                <!--This part is for displaying the the submittet message -->
                <?php if($message_sent): ?>

                    <h3>Thanks, You will hear from us soon</h3>
                    <h4>The message we received is: </h4>

                    <?php
                    $sqlquery = "SELECT * FROM contact WHERE name =" . $name;
                    if ($stmt = mysqli_prepare($link, $sqlquery)) {
                        if (mysqli_stmt_execute($stmt)) {
                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) == 1) {
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $name = $row["name"];
                                $email = $row["email"];
                                $phone = $row["phone"];
                                $subject = $row["subject"];
                                $message = $row["message"];
                            } else {
                                echo "Oops! Something went wrong. Please try again later.";
                                exit();
                            }

                        } else {
                            echo "Oops! Something went wrong. Please try again later.";
                            exit();
                        }
                    }
                    ?> <!--        end php-->
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><?php echo $name; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $email; ?></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td><?php echo $phone; ?></td>
                        </tr>
                        <tr>
                            <td>Subject</td>
                            <td><?php echo $subject; ?></td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td><?php echo $message; ?></td>
                        </tr>
                    </table>


                <?php else: ?>
                <!--    The method of the of the from, specifies how data is submitted to the server.
                        end the action specifies where the form will send data-->
                <form id="registrationForm" class="contact-form" action="contact.php" method="POST">
                    <div><h1>We'd Loved to Hear From You </h1><br></div>
                    <p class="contact-para">
                        <label for="navn">Navn: </label><br>
                        <input
                                type="text"
                                name="name"
                                id="navn"
                                class="form-control"
                                value="<?php echo $name; ?>"
                        />
                        <?php echo $name_err;?>
                    </p>
                    <p class="contact-para">
                        <label for="email">Email: </label><br>
                        <input
                                type="text"
                                name="email"
                                id="email"
                                class="form-control"
                                value="<?php echo $email; ?>"
                        />
                        <?php echo $email_err;?>
                    </p>
                    <p class="contact-para">
                        <label for="phone">Phone: </label><br>
                        <input
                                type="tel"
                                name="phone"
                                id="phone"
                                class="form-control"
                                value="<?php echo $phone; ?>"/>
                        <?php echo $phone_err;?>
                    </p>
                    <p class="contact-para">
                        <label for="navn">Subject</label><br>
                        <input
                                type="text"
                                name="subject"
                                id="subject"
                                class="form-control"
                                value="<?php echo $subject; ?>"/>
                        <?php echo $subject_err;?>
                    </p>
                    <p class="contact-para">
                        <label for="comments">Message</label><br>
                        <textarea
                                name="message"
                                id="comments"
                                class="form-control"
                                rows="3"
                                cols="25"><?php echo $message; ?></textarea>
                        <?php echo $message_err;?>
                    </p>
                    <p class="submit">
                        <button type="submit" name="submit" class='action_btn add_button'/>
                        Send Mail</button>
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
                        <td>Heimagøta 82, 100 Tórshavn</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <?php
        endif;
        ?>
    </main>


<?php include('view/footer.php'); ?>