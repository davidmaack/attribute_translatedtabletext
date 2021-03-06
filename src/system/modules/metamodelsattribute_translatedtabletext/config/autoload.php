<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package     MetaModels
 * @subpackage  AttributeTranslatedTableText
 * @author      David Maack <david.maack@arcor.de>
 * @author      Stefan Heimes <stefan_heimes@hotmail.com>
 * @copyright   The MetaModels team.
 * @license     LGPL.
 * @filesource
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'MetaModelAttributeTranslatedTableText'       => 'system/modules/metamodelsattribute_translatedtabletext/MetaModelAttributeTranslatedTableText.php',
	'TableMetaModelsAttributeTranslatedTableText' => 'system/modules/metamodelsattribute_translatedtabletext/TableMetaModelsAttributeTranslatedTableText.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mm_attr_translatedtabletext' => 'system/modules/metamodelsattribute_translatedtabletext/templates',
));
