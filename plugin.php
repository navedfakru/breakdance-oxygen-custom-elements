<?php

/**
 * Plugin Name: Breakdance Oxygen Custom Elements
 * Plugin URI: https://github.com/navedfakru/breakdance-oxygen-custom-elements
 * Description: Boilerplate plugin to save your custom elements created with Element Studio.
 * Author: Naved
 * Author URI: https://github.com/navedfakru/breakdance-oxygen-custom-elements
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 1.0.2
 */

namespace BreakdanceCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'BreakdanceCustomElements',
        'element',
        'Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'BreakdanceCustomElements',
        'macro',
        'Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'BreakdanceCustomElements',
        'preset',
        'Custom Presets',
        false,
    );

    \Breakdance\Elements\registerCategory('breakdance-custom-elements', 'Custom Elements');
},
    // register elements before loading them
    9
);
