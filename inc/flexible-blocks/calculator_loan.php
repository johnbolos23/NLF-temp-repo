<style>
    #calculator-loan-section-<?php echo get_row_index(); ?> .left-side-image{
        background-image: url("<?php echo get_sub_field('background_image'); ?>");
        background-size: cover; 
        background-repeat: no-repeat;
        background-position: center;
        position:relative;
    }


</style>

<section class="page-section calculator-loan-section" id="calculator-loan-section-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row contents">
            <div class="col-xl-6 left-side-image">
                <div class="custom-dots">
                    <?php get_template_part('icons/dot-new'); ?>
                </div>
                
                <h2 class="heading"><?php echo get_sub_field('heading');?></h2>
            </div>
            <div class="col-xl-6 information">
                <div class="subheading"><?php echo get_sub_field('form_subheading');?></div>

                <div class="calculator-wrapper">
                        <form class="calculator">
                                <div class="calculator__row">
                                        <label for="bill">Loan Amount:</label>
                                        <input type="text" name="amountInput" id="bill" class="calculator__bill"  value="0" oninput="this.form.amountRange.value=this.value" required/>
                                        <input type="range" class="amount-range" name="amountRange" min="0" max="1000000" value="0" oninput="this.form.amountInput.value=this.value" />
                                </div>
                                <div class="calculator__row">
                                        <label for="tip">For How Long:</label> <p><span class="tip-amount">0</span> month(s)</p>
                                        <input type="range" min="0" max="100" value="1" step="1" class="calculator__tip" id="tip" required/>
                                </div>
                                <h5>Estimated fortnightly repayments</h5>
                                <h3 class="heading calculator__monthly">0</span></h3>
                        </form>
                </div>

                <!-- <p>Estimated fortnightly repayments</p>
                <h3 class="heading">$ 4,800</h3> -->

                <div class="button-col">
                    <?php if( get_sub_field('button') ) : ?>
                                    <a href="<?php echo get_sub_field('button')['url']; ?>" class="main-button blue-btn"><?php echo get_sub_field('button')['title']; ?></a>
                    <?php endif; ?>     
                </div>
            </div>
        </div>
    </div>
</section>