<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer\CMsgClientMMSGetLobbyList;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientMMSGetLobbyList.Filter
 */
class Filter extends \Protobuf\AbstractMessage
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
     * key optional string = 1
     *
     * @var string
     */
    protected $key = null;

    /**
     * value optional string = 2
     *
     * @var string
     */
    protected $value = null;

    /**
     * comparision optional int32 = 3
     *
     * @var int
     */
    protected $comparision = null;

    /**
     * filter_type optional int32 = 4
     *
     * @var int
     */
    protected $filter_type = null;

    /**
     * Check if 'key' has a value
     *
     * @return bool
     */
    public function hasKey()
    {
        return $this->key !== null;
    }

    /**
     * Get 'key' value
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set 'key' value
     *
     * @param string $value
     */
    public function setKey($value = null)
    {
        $this->key = $value;
    }

    /**
     * Check if 'value' has a value
     *
     * @return bool
     */
    public function hasValue()
    {
        return $this->value !== null;
    }

    /**
     * Get 'value' value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set 'value' value
     *
     * @param string $value
     */
    public function setValue($value = null)
    {
        $this->value = $value;
    }

    /**
     * Check if 'comparision' has a value
     *
     * @return bool
     */
    public function hasComparision()
    {
        return $this->comparision !== null;
    }

    /**
     * Get 'comparision' value
     *
     * @return int
     */
    public function getComparision()
    {
        return $this->comparision;
    }

    /**
     * Set 'comparision' value
     *
     * @param int $value
     */
    public function setComparision($value = null)
    {
        $this->comparision = $value;
    }

    /**
     * Check if 'filter_type' has a value
     *
     * @return bool
     */
    public function hasFilterType()
    {
        return $this->filter_type !== null;
    }

    /**
     * Get 'filter_type' value
     *
     * @return int
     */
    public function getFilterType()
    {
        return $this->filter_type;
    }

    /**
     * Set 'filter_type' value
     *
     * @param int $value
     */
    public function setFilterType($value = null)
    {
        $this->filter_type = $value;
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
            'key' => null,
            'value' => null,
            'comparision' => null,
            'filter_type' => null
        ], $values);

        $message->setKey($values['key']);
        $message->setValue($values['value']);
        $message->setComparision($values['comparision']);
        $message->setFilterType($values['filter_type']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Filter',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'key',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'value',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'comparision',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'filter_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
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

        if ($this->key !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->key);
        }

        if ($this->value !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->value);
        }

        if ($this->comparision !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->comparision);
        }

        if ($this->filter_type !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->filter_type);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->key = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->value = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->comparision = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->filter_type = $reader->readVarint($stream);

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

        if ($this->key !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->key);
        }

        if ($this->value !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->value);
        }

        if ($this->comparision !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->comparision);
        }

        if ($this->filter_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->filter_type);
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
        $this->key = null;
        $this->value = null;
        $this->comparision = null;
        $this->filter_type = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientMMSGetLobbyList\Filter) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->key = ($message->key !== null) ? $message->key : $this->key;
        $this->value = ($message->value !== null) ? $message->value : $this->value;
        $this->comparision = ($message->comparision !== null) ? $message->comparision : $this->comparision;
        $this->filter_type = ($message->filter_type !== null) ? $message->filter_type : $this->filter_type;
    }


}

