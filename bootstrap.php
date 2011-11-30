<?php
/**
 * Spark Fuel Package By Ben Corlett
 * 
 * Mesh is a fuel package that lets you build
 * a mesh, a grid representation of data from
 * the database. A datagrid, a table, whatever
 * you want to call it! Mesh wasn't taken so I
 * figured that's a good place to start
 * 
 * @package    Fuel
 * @subpackage Spark
 * @version    1.0
 * @author     Ben Corlett (http://www.bencorlett.com)
 * @license    MIT License
 * @copyright  (c) 2011 Ben Corlett
 * @link       http://mesh.bencorlett.com
 */
Autoloader::add_core_namespace('Mesh');

Autoloader::add_classes(array(
	'Mesh\\Mesh' => __DIR__.'/classes/mesh.php',
));