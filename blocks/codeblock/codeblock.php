<?php
/**
 * Code Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$title           = get_field( 'code_block_title' );
$code            = get_field( 'code_block_code' );

?>

<div class="code-block">
  <pre>
    <code>
      <?php echo $code ?>
    </code>
  </pre>
</div>