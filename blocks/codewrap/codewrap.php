<?php
/**
 * Code Wrap template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$title           = get_field( 'code_wrapper_title' );
$url             = get_field( 'mdn_docs_link' );

?>

<div class="code-wrap bg-slate-500 p-3 rounded border position-relative">
  <a class="btn btn-primary btn-sm position-absolute top-0 end-0" href="<?php echo $url; ?>">MDN <i class="bi bi-box-arrow-up-right"></i></a>
  <h3 class="d-inline-block py-1 px-3 bg-slate-600 text-primary fw-normal fs-4 rounded"><?php echo $title; ?></h3>
  <div>
    <InnerBlocks />
  </div>
</div>