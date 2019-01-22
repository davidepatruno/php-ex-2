<h1>Test basket</h1>
<?php
  $partite = [
    [
      'home' => 'Olimpia-Milano',
      'away' => 'Cantù',
      'home-score' => 88,
      'away-score' => 80
    ],
    [
      'home' => 'Foggia',
      'away' => 'Pescara',
      'home-score' => 60,
      'away-score' => 40
    ],
    [
      'home' => 'Macerata',
      'away' => 'Bologna'
      // 'home-score' => 50,
      // 'away-score' => 80
    ]
  ];
?>
<ul>
  <?php foreach ($partite as $match) { ?>
              <li><?php echo $match['home'];?> - <?php echo $match['away'];?> |
                <?php if (
                        !empty($match['home-score']) and !empty($match['away-score'])
                        ){?>
                        <?php echo $match['home-score'];?> - <?php echo $match['away-score'];?>
                      <?php } else { ?>
                                    <span>Match non ancora disputato;</span>
                            <?php } ?>
              </li>

  <?php } ?>
    <!-- echo $match['home']; die(); -->
</ul>
