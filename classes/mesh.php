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
namespace Mesh;

class Mesh
{
	/**
	 * @var array   $query  The cached query this mesh uses
	 */
	protected $query;

	/**
	 * Called when the class is
	 * constructed
	 * 
	 * @access  public
	 * @param   string  $identifier  Uniqure identifier for this mesh
	 * @param   mixed   $query       The query given to the mesh, or a closure that returns a query
	 */
	public function __construct($identifier, $query)
	{
		if ($query instanceof \Closure)
		{
			$query = $query();
		}
		
				
	}
}