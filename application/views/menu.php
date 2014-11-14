<div class="col-md-1 md-left-15 nav-menu">
    <nav role="navigation">
        <ul class="noMgnoPd">
            <?php if($this->uri->segment(1) != 'timeline'): ?>
            <li>
                <a href="<?php echo base_url(); ?>timeline"><span class="glyphicon glyphicon-home span-icon btn-lg f-size-30 item-menu icon-home"></span></a>
            </li>
            <?php endif; ?>
            <?php if($this->uri->segment(1) != 'denounces'): ?>
            <li>
                <a href="denounces"><span class="glyphicon glyphicon-plus span-icon btn-lg f-size-30 item-menu"></span></a>
            </li>
            <?php endif; ?>
            <?php if($this->uri->segment(1) != 'mydata'): ?>
            <li>
                <a href="mydata"><span class="glyphicon glyphicon-wrench span-icon btn-lg f-size-30 item-menu"></span></a>
            </li>
            <?php endif; ?>
            <li>
                <a href="login/sair"><span class="glyphicon glyphicon-off span-icon btn-lg f-size-30 item-menu"></span></a>
            </li>
        </ul>
    </nav>
</div>