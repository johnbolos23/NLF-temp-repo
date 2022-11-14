<section class="page-section faqs" id="faqs-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">
                <div class="content-column">
                    <h3 class="heading"><?php echo get_field('heading','option');?></h3>
                    <div class="wysiwyg-content">
                        <?php echo get_field('text','option'); ?>
                    </div>
                </div>

                <ul class="accordion">
                    <?php if( have_rows('accordion', 'option') ): ?>
						<?php while( have_rows('accordion', 'option') ) : the_row(); ?>
                        <li>
                            <p class="link"><a href="#"><?php the_sub_field('title','option'); ?><i class="fa fa-chevron-down"></i></a></p>
                            <ul class="subtext">
                                <li>
                                    <div class="wysiwyg-content">
                                            <?php echo the_sub_field('description','option'); ?>
                                    </div>
                                </li>
                            </ul>
                        </li>
						<?php endwhile; ?>
					<?php endif; ?>
                </ul>


                <!-- <div class="accordion" id="myAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">1. What is HTML?</button>									
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body">
                                <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">2. What is Bootstrap?</button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                            <div class="card-body">
                                <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">3. What is CSS?</button>                     
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body">
                                <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>