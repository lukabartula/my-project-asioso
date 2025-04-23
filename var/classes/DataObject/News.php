<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - media [image]
 * - title [input]
 * - shortDescription [textarea]
 * - description [wysiwyg]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\News\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\News\Listing|\Pimcore\Model\DataObject\News|null getByMedia(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\News\Listing|\Pimcore\Model\DataObject\News|null getByTitle(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\News\Listing|\Pimcore\Model\DataObject\News|null getByShortDescription(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\News\Listing|\Pimcore\Model\DataObject\News|null getByDescription(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class News extends Concrete
{
public const FIELD_MEDIA = 'media';
public const FIELD_TITLE = 'title';
public const FIELD_SHORT_DESCRIPTION = 'shortDescription';
public const FIELD_DESCRIPTION = 'description';

protected $classId = "news";
protected $className = "News";
protected $media;
protected $title;
protected $shortDescription;
protected $description;


/**
* @param array $values
* @return static
*/
public static function create(array $values = []): static
{
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get media - Media
* @return \Pimcore\Model\Asset\Image|null
*/
public function getMedia(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("media");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->media;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set media - Media
* @param \Pimcore\Model\Asset\Image|null $media
* @return $this
*/
public function setMedia(?\Pimcore\Model\Asset\Image $media): static
{
	$this->markFieldDirty("media", true);

	$this->media = $media;

	return $this;
}

/**
* Get title - Title
* @return string|null
*/
public function getTitle(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("title");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->title;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set title - Title
* @param string|null $title
* @return $this
*/
public function setTitle(?string $title): static
{
	$this->markFieldDirty("title", true);

	$this->title = $title;

	return $this;
}

/**
* Get shortDescription - Short snippet
* @return string|null
*/
public function getShortDescription(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("shortDescription");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->shortDescription;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set shortDescription - Short snippet
* @param string|null $shortDescription
* @return $this
*/
public function setShortDescription(?string $shortDescription): static
{
	$this->markFieldDirty("shortDescription", true);

	$this->shortDescription = $shortDescription;

	return $this;
}

/**
* Get description - Full article
* @return string|null
*/
public function getDescription(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("description");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("description")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set description - Full article
* @param string|null $description
* @return $this
*/
public function setDescription(?string $description): static
{
	$this->markFieldDirty("description", true);

	$this->description = $description;

	return $this;
}

}

