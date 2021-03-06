<form method="post" class="form-horizontal">

    <div class="headerbar">
        <h1><?php echo lang('email_template_form'); ?></h1>
        <?php $this->layout->load_view('layout/header_buttons'); ?>
    </div>

    <div class="content">

        <?php $this->layout->load_view('layout/alerts'); ?>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="email_template_title" class="control-label"><?php echo lang('title'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="email_template_title" id="email_template_title" value="<?php echo $this->mdl_email_templates->form_value('email_template_title'); ?>" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="email_template_type" class="control-label"><?php echo "Type"; ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <label class="radio-inline">
                    <input type="radio" name="email_template_type" id="email_template_type_invoice" value="invoice"> <?php echo lang('invoice'); ?>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="email_template_type" id="email_template_type_quote" value="quote"> <?php echo lang('quote'); ?>
                </label>
            </div>
        </div>

        <hr>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="email_template_from_name" class="control-label"><?php echo lang('from_name'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="email_template_from_name" id="email_template_from_name" class="form-control taggable"
                       value="<?php echo $this->mdl_email_templates->form_value('email_template_from_name'); ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="email_template_from_email" class="control-label"><?php echo lang('from_email'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="email_template_from_email" id="email_template_from_email" class="form-control taggable"
                       value="<?php echo $this->mdl_email_templates->form_value('email_template_from_email'); ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="email_template_cc" class="control-label"><?php echo lang('cc'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="email_template_cc" id="email_template_cc" class="form-control taggable"
                       value="<?php echo $this->mdl_email_templates->form_value('email_template_cc'); ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="email_template_bcc" class="control-label"><?php echo lang('bcc'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="email_template_bcc" id="email_template_bcc" class="form-control taggable"
                       value="<?php echo $this->mdl_email_templates->form_value('email_template_bcc'); ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="email_template_subject" class="control-label"><?php echo lang('subject'); ?>: </label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" name="email_template_subject" id="email_template_subject" class="form-control taggable"
                       value="<?php echo $this->mdl_email_templates->form_value('email_template_subject'); ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="email_template_pdf_template" class="control-label">
                    <?php echo lang('pdf_template'); ?>:
                </label>
            </div>
            <div class="col-xs-12 col-sm-6">
              <select name="email_template_pdf_template" id="email_template_pdf_template" class="form-control">
                <option value="" class="empty-option"></option>
                  <?php foreach ($invoice_templates as $template): ?>
                      <option class="hidden-invoice" value="<?= $template; ?>" <?php if ($selected_pdf_template == $template) { ?>selected="selected"<?php } ?>><?php echo $template; ?></option>
                  <?php endforeach; ?>
                  <?php foreach ($quote_templates as $template): ?>
                      <option class="hidden-quote" value="<?= $template; ?>" <?php if ($selected_pdf_template == $template) { ?>selected="selected"<?php } ?>><?php echo $template; ?></option>
                  <?php endforeach; ?>
              </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12 col-sm-2 text-right text-left-xs">
                <label for="email_template_body">
                    <?php echo lang('body'); ?>:
                </label>
            </div>

            <div class="col-xs-12 col-sm-6">
                <textarea name="email_template_body" id="email_template_body" style="height: 200px;" class="form-control taggable"><?php echo $this->mdl_email_templates->form_value('email_template_body'); ?></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <h4><?php echo lang('email_template_tags'); ?></h4>
                <p><?php echo lang('email_template_tags_instructions'); ?></p><br/>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <strong><?php echo lang('client'); ?></strong><br>
                <a href="#" class="text-tag" data-tag="{{{client_name}}}"><?php echo lang('client_name'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{client_address_1}}}"><?php echo lang('client'); ?> <?php echo lang('address'); ?> 1</a><br>
                <a href="#" class="text-tag" data-tag="{{{client_address_2}}}"><?php echo lang('client'); ?> <?php echo lang('address'); ?> 2</a><br>
                <a href="#" class="text-tag" data-tag="{{{client_city}}}"><?php echo lang('client'); ?> <?php echo lang('city'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{client_state}}}"><?php echo lang('client'); ?> <?php echo lang('state'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{client_zip}}}"><?php echo lang('client'); ?> <?php echo lang('zip_code'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{client_country}}}"><?php echo lang('client'); ?> <?php echo lang('country'); ?></a><br>
                <?php foreach ($custom_fields['ip_client_custom'] as $custom) { ?>
                    <a href="#" class="text-tag" data-tag="{{{<?php echo $custom->custom_field_column; ?>}}}"><?php echo $custom->custom_field_label; ?></a><br>
                <?php } ?>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <strong><?php echo lang('user'); ?></strong><br>
                <a href="#" class="text-tag" data-tag="{{{user_name}}}"><?php echo lang('user'); ?> <?php echo lang('name'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{user_company}}}"><?php echo lang('user'); ?> <?php echo lang('company'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{user_address_1}}}"><?php echo lang('user'); ?> <?php echo lang('address'); ?> 1</a><br>
                <a href="#" class="text-tag" data-tag="{{{user_address_2}}}"><?php echo lang('user'); ?> <?php echo lang('address'); ?> 2</a><br>
                <a href="#" class="text-tag" data-tag="{{{user_city}}}"><?php echo lang('user'); ?> <?php echo lang('city'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{user_state}}}"><?php echo lang('user'); ?> <?php echo lang('state'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{user_zip}}}"><?php echo lang('user'); ?> <?php echo lang('zip_code'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{user_country}}}"><?php echo lang('user'); ?> <?php echo lang('country'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{user_phone}}}"><?php echo lang('user'); ?> <?php echo lang('phone'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{user_fax}}}"><?php echo lang('user'); ?> <?php echo lang('fax'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{user_mobile}}}"><?php echo lang('user'); ?> <?php echo lang('mobile'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{user_email}}}"><?php echo lang('user'); ?> <?php echo lang('email'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{user_web}}}"><?php echo lang('user'); ?> <?php echo lang('web_address'); ?></a><br>
                <?php foreach ($custom_fields['ip_user_custom'] as $custom) { ?>
                    <a href="#" class="text-tag" data-tag="{{{<?php echo $custom->custom_field_column; ?>}}}"><?php echo $custom->custom_field_label; ?></a><br>
                <?php } ?>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 hidden-invoice">
                <strong><?php echo lang('invoices'); ?></strong><br>
                <a href="#" class="text-tag" data-tag="{{{invoice_guest_url}}}"><?php echo lang('invoice'); ?> <?php echo lang('guest_url'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{invoice_number}}}"><?php echo lang('invoice'); ?> <?php echo lang('id'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{invoice_date_due}}}"><?php echo lang('invoice'); ?> <?php echo lang('due_date'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{invoice_date_created}}}"><?php echo lang('invoice'); ?> <?php echo lang('created'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{invoice_terms}}}"><?php echo lang('invoice_terms'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{invoice_total}}}"><?php echo lang('invoice'); ?> <?php echo lang('total'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{invoice_paid}}}"><?php echo lang('invoice'); ?> <?php echo lang('total_paid'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{invoice_balance}}}"><?php echo lang('invoice'); ?> <?php echo lang('balance'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{invoice_status}}}"><?php echo lang('invoice'); ?> <?php echo lang('status'); ?></a><br>
                <?php foreach ($custom_fields['ip_invoice_custom'] as $custom) { ?>
                    <a href="#" class="text-tag" data-tag="{{{<?php echo $custom->custom_field_column; ?>}}}"><?php echo $custom->custom_field_label; ?></a><br>
                <?php } ?>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 hidden-quote">
                <strong><?php echo lang('quotes'); ?></strong><br>
                <a href="#" class="text-tag" data-tag="{{{quote_total}}}"><?php echo lang('quote'); ?> <?php echo lang('total'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{quote_date_created}}}"><?php echo lang('quote_date'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{quote_date_expires}}}"><?php echo lang('quote'); ?> <?php echo lang('expires'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{quote_number}}}"><?php echo lang('quote'); ?> <?php echo lang('id'); ?></a><br>
                <a href="#" class="text-tag" data-tag="{{{quote_guest_url}}}"><?php echo lang('quote'); ?> <?php echo lang('guest_url'); ?></a><br>
                <?php foreach ($custom_fields['ip_quote_custom'] as $custom) { ?>
                    <a href="#" class="text-tag" data-tag="{{{<?php echo $custom->custom_field_column; ?>}}}"><?php echo $custom->custom_field_label; ?></a><br>
                <?php } ?>
            </div>

        </div>

    </div>

</form>

<script type="text/javascript">
    $(function(){
        var email_template_type = "<?= $this->mdl_email_templates->form_value('email_template_type'); ?>";


        $("[name=email_template_type]").click(function(){
            // remove class "show" and deselect any selected elements.
            $(".show").removeClass("show").parent("select").each(function(){
                this.options.selectedIndex = 0;
            });
            // add show class to corresponding class
            $(".hidden-"+$(this).val()).addClass("show");
        });

        $("[name=email_template_type]").each(function(){

            if($(this).val() == email_template_type) {
                $(this).click();
            }
        });

    });
</script>