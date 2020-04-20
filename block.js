/**
 * WP Child Blocks
 *
 * A block that allows you to automatically insert child pages.
 */
(function (blocks, i18n, element) {
  var el = element.createElement;

  blocks.registerBlockType('clwp/child-blocks', {
    title: 'WP Child Block',
    icon: 'universal-access-alt',
    category: 'layout',
    example: {},
    edit: function (props) {
      return el(
        'p',
        {className: props.className},
        'This is a WP Child Block (GREEN!).'
      );
    },
    save: function () {
      return el(
        'p',
        {},
        'This is a WP Child Block (RED!).'
      );
    },
  });
})(window.wp.blocks, window.wp.i18n, window.wp.element);