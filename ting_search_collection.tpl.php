<?php
// $Id$

/**
 * @file
 * Template to render a Ting collection of books.
 */

#var_dump($collection);

?>
  <li>
  
  <?php if ($picture): ?>
      <div class="picture">
        <?php print $picture; ?>
      </div>
    <?php endif; ?>
    <div class="item graybox-btns<?php print $picture?'':' nopicture'; ?>">  
    <a href="<?php print $collection->url; ?>">
    
      <h3><?php print $collection->title ?></h3>
      <?php if ($collection->creators_string) : ?>
      <span class="creator">
        <?php echo t('By %creator_name%', array('%creator_name%' => $collection->creators_string)) ?>
      </span>
      <?php endif; ?>
      <?php if ($collection->date) : ?>
      <span class="publication_date">
        <?php echo t('(%publication_date%)', array('%publication_date%' => $collection->date)) /* TODO: Improve date handling, localizations etc. */ ?>
      </span>
      <?php endif; ?>
      <?php if ($collection->abstract) : ?>
      <p>
        <?php print check_plain($collection->abstract); ?>
      </p>
      <?php endif; ?>
      <?php if ($collection->subjects) : ?>
      <p class="subjects">
        <?php echo t('Subjects:').' '. implode(', ',$collection->subjects) ?>
      </p>
      <?php endif; ?>
      
    </a>
    </div>
  
  
  <!-- 
    <?php if ($picture): ?>
    <div class="picture">
      <?php print $picture; ?>
    </div>
    <?php endif; ?>

    <div class="record">
      <div class="types">
        <?php print $type_list; ?>
      </div>

      <h3>
        <?php print l($collection->title, $collection->url, array('attributes' => array('class' =>'title'))) ;?> 
      </h3>

      <div class="meta">
        <?php if ($collection->creators_string) : ?>
          <span class="creator">
            <?php echo t('By %creator_name%', array('%creator_name%' => $collection->creators_string)) ?>
          </span>
        <?php endif; ?>
        <?php if ($collection->date) : ?>
          <span class="publication_date">
            <?php echo t('(%publication_date%)', array('%publication_date%' => $collection->date)) /* TODO: Improve date handling, localizations etc. */ ?>
          </span>
        <?php endif; ?>
      </div>

      <?php if ($collection->abstract) : ?>
      <div class="abstract">
        <p>
          <?php print check_plain($collection->abstract); ?>
        </p>
      </div>
      <?php endif; ?>

      <?php if ($collection->subjects) : ?>
        <div class="subjects">
          <h4><?php echo t('Subjects:') ?></h4>
          <ul>
            <?php foreach ($collection->subjects as $subject) : ?>
              <li><?php echo $subject ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

    </div>
    
    -->
  </li>

