<h1>Test colori</h1>
<?php
  $parolatest = 'Boolean';
  $password = $_GET['password'];
  if (empty($password)) { ?>
                            <h2>Inserire password</h2>
                          <?php } else { ?> <span>La password inserita è  </span>
                                         <?php if ($password == $parolatest) { ?>
                                                                          <span style="color:green;">corretta</span>
                                                                  <?php } else { ?>
                                                                                <span style="color:red;">errata</span>
                                                                          <?php } ?>
                                        <?php } ?>
