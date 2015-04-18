/*jslint browser: true, devel: true, indent: 2 */
/*global $, jQuery, document */
jQuery(document).ready(function () {
  'use strict';
  /*
   * Change page title if inside iframe
   */

  if (window.self !== window.top) {
    jQuery('#site-title').text('BLOG');
  }
});
