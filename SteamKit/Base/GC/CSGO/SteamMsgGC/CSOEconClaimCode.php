<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/base_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGC;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgGC.CSOEconClaimCode
 */
class CSOEconClaimCode extends \Protobuf\AbstractMessage
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
     * code_type optional uint32 = 2
     *
     * @var int
     */
    protected $code_type = null;

    /**
     * time_acquired optional uint32 = 3
     *
     * @var int
     */
    protected $time_acquired = null;

    /**
     * code optional string = 4
     *
     * @var string
     */
    protected $code = null;

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
     * Check if 'code_type' has a value
     *
     * @return bool
     */
    public function hasCodeType()
    {
        return $this->code_type !== null;
    }

    /**
     * Get 'code_type' value
     *
     * @return int
     */
    public function getCodeType()
    {
        return $this->code_type;
    }

    /**
     * Set 'code_type' value
     *
     * @param int $value
     */
    public function setCodeType($value = null)
    {
        $this->code_type = $value;
    }

    /**
     * Check if 'time_acquired' has a value
     *
     * @return bool
     */
    public function hasTimeAcquired()
    {
        return $this->time_acquired !== null;
    }

    /**
     * Get 'time_acquired' value
     *
     * @return int
     */
    public function getTimeAcquired()
    {
        return $this->time_acquired;
    }

    /**
     * Set 'time_acquired' value
     *
     * @param int $value
     */
    public function setTimeAcquired($value = null)
    {
        $this->time_acquired = $value;
    }

    /**
     * Check if 'code' has a value
     *
     * @return bool
     */
    public function hasCode()
    {
        return $this->code !== null;
    }

    /**
     * Get 'code' value
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set 'code' value
     *
     * @param string $value
     */
    public function setCode($value = null)
    {
        $this->code = $value;
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
            'code_type' => null,
            'time_acquired' => null,
            'code' => null
        ], $values);

        $message->setAccountId($values['account_id']);
        $message->setCodeType($values['code_type']);
        $message->setTimeAcquired($values['time_acquired']);
        $message->setCode($values['code']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CSOEconClaimCode',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'account_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'code_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'time_acquired',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'code',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
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

        if ($this->code_type !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->code_type);
        }

        if ($this->time_acquired !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->time_acquired);
        }

        if ($this->code !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->code);
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

                $this->code_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->time_acquired = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->code = $reader->readString($stream);

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

        if ($this->code_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->code_type);
        }

        if ($this->time_acquired !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->time_acquired);
        }

        if ($this->code !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->code);
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
        $this->code_type = null;
        $this->time_acquired = null;
        $this->code = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconClaimCode) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->account_id = ($message->account_id !== null) ? $message->account_id : $this->account_id;
        $this->code_type = ($message->code_type !== null) ? $message->code_type : $this->code_type;
        $this->time_acquired = ($message->time_acquired !== null) ? $message->time_acquired : $this->time_acquired;
        $this->code = ($message->code !== null) ? $message->code : $this->code;
    }


}
