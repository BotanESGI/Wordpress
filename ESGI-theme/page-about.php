<?php
/*
Template Name: About Us
*/
get_header();
get_template_part('template-parts/apropos');
?>
<div class="our-team">
    <h1>Our Team</h1>
    <div class="team-container">
            <div class="team-item">
                <img src="<?php echo get_theme_mod("team_image_1", get_template_directory_uri() . "/assets/img/team1.jpg"); ?>" alt="Team Member <?php echo 1; ?>">
                <div class="role"><?php echo get_theme_mod("about_us_role_1", "Sales Managers"); ?></div>
                <div class="phone"><?php echo get_theme_mod("about_us_phone_1", "+33 1 53 31 25 23"); ?></div>
                <div class="email"><?php echo get_theme_mod("about_us_email_1", "sales@company.com"); ?></div>
            </div>
            <div class="team-item">
                <img src="<?php echo get_theme_mod("team_image_2", get_template_directory_uri() . "/assets/img/team2.jpg"); ?>" alt="Team Member <?php echo 2; ?>">
                <div class="role"><?php echo get_theme_mod("about_us_role_2", "Event planner"); ?></div>
                <div class="phone"><?php echo get_theme_mod("about_us_phone_2", "+33 1 53 31 25 24"); ?></div>
                <div class="email"><?php echo get_theme_mod("about_us_email_2", "plan@company.com"); ?></div>
            </div>
            <div class="team-item">
                <img src="<?php echo get_theme_mod("team_image_3", get_template_directory_uri() . "/assets/img/team3.jpg"); ?>" alt="Team Member <?php echo 3; ?>">
                <div class="role"><?php echo get_theme_mod("about_us_role_3", "Designer"); ?></div>
                <div class="phone"><?php echo get_theme_mod("about_us_phone_3", "+33 1 53 31 25 20"); ?></div>
                <div class="email"><?php echo get_theme_mod("about_us_email_3", "design@company.com"); ?></div>
            </div>
            <div class="team-item">
                <img src="<?php echo get_theme_mod("team_image_4", get_template_directory_uri() . "/assets/img/team4.jpg"); ?>" alt="Team Member <?php echo 4; ?>">
                <div class="role"><?php echo get_theme_mod("about_us_role_4", "CEO"); ?></div>
                <div class="phone"><?php echo get_theme_mod("about_us_phone_4", "+33 1 53 31 25 25"); ?></div>
                <div class="email"><?php echo get_theme_mod("about_us_email_4", "ceo@example.com"); ?></div>
            </div>
    </div>
</div>
<?php get_footer(); ?>
