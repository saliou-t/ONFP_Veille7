<html>
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="contact.css" />
    <script type="text/javascript" src="contact.js"></script>
  </head>
  <body>
    <div id="box">
      <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
        <h3>Formulaire de contact</h3>
        <label>Nom: <span>*</span></label>
        <input type="text" id="name" name="name" placeholder="Nom"/>
        <label>Email: <span>*</span></label><span id="info" class="info"></span>
        <input type="text" id="email" name="email" placeholder="Email"/>
        <label>Sujet: <span>*</span></label>
        <input type="text" id="subject" name="subject" placeholder="Demande de renseignement"/>
        <label>Message:</label>
        <textarea id="message" name="message" placeholder="Message..."></textarea>
        <input type="submit" name="send" value="Envoyer le message"/>
      <div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            <?php if (! empty($mail_msg)) { ?>
              <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
            <?php } ?>
            </div>
      </form>
      </div>
  </body>
</html><html>
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="contact.css" />
    <script type="text/javascript" src="contact.js"></script>
  </head>
  <body>
    <div id="box">
      <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
        <h3>Formulaire de contact</h3>
        <label>Nom: <span>*</span></label>
        <input type="text" id="name" name="name" placeholder="Nom"/>
        <label>Email: <span>*</span></label><span id="info" class="info"></span>
        <input type="text" id="email" name="email" placeholder="Email"/>
        <label>Sujet: <span>*</span></label>
        <input type="text" id="subject" name="subject" placeholder="Demande de renseignement"/>
        <label>Message:</label>
        <textarea id="message" name="message" placeholder="Message..."></textarea>
        <input type="submit" name="send" value="Envoyer le message"/>
      <div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            <?php if (! empty($mail_msg)) { ?>
              <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
            <?php } ?>
            </div>
      </form>
      </div>
  </body>
</html>