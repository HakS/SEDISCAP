<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php if ($linked_logo_img || $site_name || $site_slogan): ?>
      <div class="branding-data clearfix">
        <?php if ($linked_logo_img): ?>
        <div class="logo-img">
          <?php print $linked_logo_img; ?>
        </div>
        <?php endif; ?>
        <?php if ($site_name || $site_slogan): ?>
        <?php $class = $site_name_hidden && $site_slogan_hidden ? ' element-invisible' : ''; ?>
        <hgroup class="site-name-slogan<?php print $class; ?>">        
          <?php if ($site_name): ?>
          <?php $class = $site_name_hidden ? ' element-invisible' : ''; ?>
          <?php if ($is_front): ?>        
          <h1 class="site-name<?php print $class; ?>"><?php print $linked_site_name; ?></h1>
          <?php else: ?>
          <h2 class="site-name<?php print $class; ?>"><?php print $linked_site_name; ?></h2>
          <?php endif; ?>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <?php $class = $site_slogan_hidden ? ' element-invisible' : ''; ?>
            <h6 class="site-slogan<?php print $class; ?>"><?php print $site_slogan; ?></h6>
          <?php endif; ?>
        </hgroup>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <?php print $content; ?>
    <?php 
    print l(
      t('Accessibility tools'),
      'accessibility-tools',
      array(
        'attributes' => array(
          'class' => array('atools-link'),
          //'title' => 'Un compendio de programas informaticos de accesiblidad.' ,
          'title' => t('A summary of accessibility software tools.') ,
        ),
      )
    );
    ?>
    <div class="zoom-controler">
      <span><?php print t('Font size'); ?></span>
      <!-- <div id="control-wrap"></div> -->
      <div id="control-wrap">
        <ul id="controls">
          <li>
            <a id="fs-minus" href="#" title="<?php print t('Smaller text');?>">-</a>
          </li>
          <li>
            <a id="fs-plus" href="#" title="<?php print t('Larger text');?>">+</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>