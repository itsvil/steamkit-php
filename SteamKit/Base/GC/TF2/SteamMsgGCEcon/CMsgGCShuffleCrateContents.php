<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/econ_gcmessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgGCEcon;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamMsgGCEcon.CMsgGCShuffleCrateContents
 */
class CMsgGCShuffleCrateContents extends \Protobuf\AbstractMessage
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
     * crate_item_id optional uint64 = 1
     *
     * @var int
     */
    protected $crate_item_id = null;

    /**
     * user_code_string optional string = 2
     *
     * @var string
     */
    protected $user_code_string = null;

    /**
     * Check if 'crate_item_id' has a value
     *
     * @return bool
     */
    public function hasCrateItemId()
    {
        return $this->crate_item_id !== null;
    }

    /**
     * Get 'crate_item_id' value
     *
     * @return int
     */
    public function getCrateItemId()
    {
        return $this->crate_item_id;
    }

    /**
     * Set 'crate_item_id' value
     *
     * @param int $value
     */
    public function setCrateItemId($value = null)
    {
        $this->crate_item_id = $value;
    }

    /**
     * Check if 'user_code_string' has a value
     *
     * @return bool
     */
    public function hasUserCodeString()
    {
        return $this->user_code_string !== null;
    }

    /**
     * Get 'user_code_string' value
     *
     * @return string
     */
    public function getUserCodeString()
    {
        return $this->user_code_string;
    }

    /**
     * Set 'user_code_string' value
     *
     * @param string $value
     */
    public function setUserCodeString($value = null)
    {
        $this->user_code_string = $value;
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
            'crate_item_id' => null,
            'user_code_string' => null
        ], $values);

        $message->setCrateItemId($values['crate_item_id']);
        $message->setUserCodeString($values['user_code_string']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGCShuffleCrateContents',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'crate_item_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'user_code_string',
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

        if ($this->crate_item_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->crate_item_id);
        }

        if ($this->user_code_string !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->user_code_string);
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->crate_item_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->user_code_string = $reader->readString($stream);

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

        if ($this->crate_item_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->crate_item_id);
        }

        if ($this->user_code_string !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->user_code_string);
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
        $this->crate_item_id = null;
        $this->user_code_string = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgGCShuffleCrateContents) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->crate_item_id = ($message->crate_item_id !== null) ? $message->crate_item_id : $this->crate_item_id;
        $this->user_code_string = ($message->user_code_string !== null) ? $message->user_code_string : $this->user_code_string;
    }


}

