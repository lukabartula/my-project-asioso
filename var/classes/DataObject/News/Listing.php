<?php

namespace Pimcore\Model\DataObject\News;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\News|false current()
 * @method DataObject\News[] load()
 * @method DataObject\News[] getData()
 * @method DataObject\News[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "news";
protected $className = "News";


/**
* Filter by media (Media)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByMedia ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("media")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by title (Title)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByTitle ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("title")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by shortDescription (Short snippet)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByShortDescription ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("shortDescription")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by description (Full article)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByDescription ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("description")->addListingFilter($this, $data, $operator);
	return $this;
}



}
