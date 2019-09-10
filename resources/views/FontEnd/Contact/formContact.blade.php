<!--   start Contact us-->
<div class="full-contact-us">
        <div class="container">
            <form id="contact" action="{{route('contactform')}}" method="post">
            {{csrf_field()}}
                <h3>Get in touch with us:

                </h3>
                <h4>Please feel free to reach out to us. We will be more than happy to help.

                </h4>
                <fieldset>
                    <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Phone Number" name="phone" type="tel" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <textarea placeholder="Type your message here..." name="message" tabindex="5" required></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>
        </div>
    </div>