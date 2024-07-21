<div class="contact-us">
    <h1 class="top-title mb-5 contact-us-title">Contacts.</h1>
    <p class="mb-5 contact-us-title" style="color:#8a8a8a">A desire for a big big party or a very select congress? Contact us.</p>
    <div class="contact-details">
        <div>
        <h2><?php echo esc_html(get_theme_mod('contact_name1', 'Location')); ?></h2>
        <p><?php echo wp_kses_post(get_theme_mod('contact_address1', '242 Rue du Faubourg Saint-Antoine<br>75020 Paris FRANCE')); ?></p>
        </div>
    <div>
        <h2><?php echo esc_html(get_theme_mod('contact_name2', 'Manager')); ?></h2>
        <p><?php echo nl2br((get_theme_mod('contact_contact2', '+33 1 53 31 25 23<br>info@company.com'))); ?></p>
    </div>
        <div>
        <h2><?php echo esc_html(get_theme_mod('contact_name3', 'CEO')); ?></h2>
        <p><?php echo nl2br((get_theme_mod('contact_contact3', '+33 1 53 31 25 25<br>ceo@company.com'))); ?></p>
    </div>
    </div>
    <div class="image-container contact-us-img">
        <img class="mb-5" src="<?php echo esc_url(get_theme_mod('contact_us_image', get_template_directory_uri() . '/assets/img/Concert1.png')); ?>" alt="Contact Us Image"/>
    </div>

    <div class="contact-form">
        <h1 class="top-title contact-us-title">Write us here</h1>
        <p class="mb-5 contact-us-title" style="color:#8a8a8a">Go! Don’t be shy.</p>
        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="contact-us-title" method="post">
            <div class="form-group">
                <input type="text" style='width: 31.5%;' placeholder="Subject" id="Subject" name="Subject" class="form-control" required>
            </div>
            <div class="form-group" style="display: flex">
                <input type="email" style="width: 20%" id="email" placeholder="Email" name="email" class="form-control" required>
                <input type="phone" style="width: 20%" id="phone" placeholder="Phone" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <textarea id="message" name="message" placeholder="Message"  class="form-control" rows="4" required></textarea>
            </div>
            <input type="hidden" name="action" value="contact_form">
            <button type="submit" class="btn btn-primary">Sumbit</button>
        </form>
    </div>

</div>
