<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/base_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGC;

/**
 * Protobuf message :
 * SteamKit.Base.GC.CSGO.SteamMsgGC.CMsgItemAcknowledged__DEPRECATED
 */
class CMsgItemAcknowledged__DEPRECATED extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * account_id optional uint32 = 1
     *
     * @var int
     */
    protected $account_id = null;

    /**
     * inventory optional uint32 = 2
     *
     * @var int
     */
    protected $inventory = null;

    /**
     * def_index optional uint32 = 3
     *
     * @var int
     */
    protected $def_index = null;

    /**
     * quality optional uint32 = 4
     *
     * @var int
     */
    protected $quality = null;

    /**
     * rarity optional uint32 = 5
     *
     * @var int
     */
    protected $rarity = null;

    /**
     * origin optional uint32 = 6
     *
     * @var int
     */
    protected $origin = null;

    /**
     * item_id optional uint64 = 7
     *
     * @var int
     */
    protected $item_id = null;

    /**
     * Check if 'account_id' has a value
     *
     * @return bool
     */
    public function hasAccountId()
    {
        return $this->account_id !== null;
    }

    /**
     * Get 'account_id' value
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Set 'account_id' value
     *
     * @param int $value
     */
    public function setAccountId($value = null)
    {
        $this->account_id = $value;
    }

    /**
     * Check if 'inventory' has a value
     *
     * @return bool
     */
    public function hasInventory()
    {
        return $this->inventory !== null;
    }

    /**
     * Get 'inventory' value
     *
     * @return int
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Set 'inventory' value
     *
     * @param int $value
     */
    public function setInventory($value = null)
    {
        $this->inventory = $value;
    }

    /**
     * Check if 'def_index' has a value
     *
     * @return bool
     */
    public function hasDefIndex()
    {
        return $this->def_index !== null;
    }

    /**
     * Get 'def_index' value
     *
     * @return int
     */
    public function getDefIndex()
    {
        return $this->def_index;
    }

    /**
     * Set 'def_index' value
     *
     * @param int $value
     */
    public function setDefIndex($value = null)
    {
        $this->def_index = $value;
    }

    /**
     * Check if 'quality' has a value
     *
     * @return bool
     */
    public function hasQuality()
    {
        return $this->quality !== null;
    }

    /**
     * Get 'quality' value
     *
     * @return int
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set 'quality' value
     *
     * @param int $value
     */
    public function setQuality($value = null)
    {
        $this->quality = $value;
    }

    /**
     * Check if 'rarity' has a value
     *
     * @return bool
     */
    public function hasRarity()
    {
        return $this->rarity !== null;
    }

    /**
     * Get 'rarity' value
     *
     * @return int
     */
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * Set 'rarity' value
     *
     * @param int $value
     */
    public function setRarity($value = null)
    {
        $this->rarity = $value;
    }

    /**
     * Check if 'origin' has a value
     *
     * @return bool
     */
    public function hasOrigin()
    {
        return $this->origin !== null;
    }

    /**
     * Get 'origin' value
     *
     * @return int
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set 'origin' value
     *
     * @param int $value
     */
    public function setOrigin($value = null)
    {
        $this->origin = $value;
    }

    /**
     * Check if 'item_id' has a value
     *
     * @return bool
     */
    public function hasItemId()
    {
        return $this->item_id !== null;
    }

    /**
     * Get 'item_id' value
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Set 'item_id' value
     *
     * @param int $value
     */
    public function setItemId($value = null)
    {
        $this->item_id = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'account_id' => null,
            'inventory' => null,
            'def_index' => null,
            'quality' => null,
            'rarity' => null,
            'origin' => null,
            'item_id' => null
        ], $values);

        $message->setAccountId($values['account_id']);
        $message->setInventory($values['inventory']);
        $message->setDefIndex($values['def_index']);
        $message->setQuality($values['quality']);
        $message->setRarity($values['rarity']);
        $message->setOrigin($values['origin']);
        $message->setItemId($values['item_id']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgItemAcknowledged__DEPRECATED',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'account_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'inventory',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'def_index',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'quality',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'rarity',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'origin',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'item_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->account_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->account_id);
        }

        if ($this->inventory !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->inventory);
        }

        if ($this->def_index !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->def_index);
        }

        if ($this->quality !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->quality);
        }

        if ($this->rarity !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->rarity);
        }

        if ($this->origin !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->origin);
        }

        if ($this->item_id !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->item_id);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->account_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->inventory = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->def_index = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->quality = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->rarity = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->origin = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->item_id = $reader->readVarint($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->account_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->account_id);
        }

        if ($this->inventory !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->inventory);
        }

        if ($this->def_index !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->def_index);
        }

        if ($this->quality !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->quality);
        }

        if ($this->rarity !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->rarity);
        }

        if ($this->origin !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->origin);
        }

        if ($this->item_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->item_id);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->account_id = null;
        $this->inventory = null;
        $this->def_index = null;
        $this->quality = null;
        $this->rarity = null;
        $this->origin = null;
        $this->item_id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgItemAcknowledged__DEPRECATED) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->account_id = ($message->account_id !== null) ? $message->account_id : $this->account_id;
        $this->inventory = ($message->inventory !== null) ? $message->inventory : $this->inventory;
        $this->def_index = ($message->def_index !== null) ? $message->def_index : $this->def_index;
        $this->quality = ($message->quality !== null) ? $message->quality : $this->quality;
        $this->rarity = ($message->rarity !== null) ? $message->rarity : $this->rarity;
        $this->origin = ($message->origin !== null) ? $message->origin : $this->origin;
        $this->item_id = ($message->item_id !== null) ? $message->item_id : $this->item_id;
    }


}
