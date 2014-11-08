<!Doctype HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
         <meta name="description" content="It's a APP of denounces in Brazil!">
        <title>APP Denúncia</title>
        <!-- CSS -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png">
        
        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();; ?>assets/js/utility.js"></script>
    </head>
    <body>
        <?php if($this->uri->segment(1) != '' && $this->uri->segment(1) != 'login'): ?>
            <div id="header-fixed">
                <a href="<?php echo base_url(); ?>">APP Denúncia</a>
            </div>
        <?php endif; ?>
        <div class="container bg"> 