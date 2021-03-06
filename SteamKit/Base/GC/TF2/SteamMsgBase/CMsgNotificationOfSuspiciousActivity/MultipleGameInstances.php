<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/steammessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgBase\CMsgNotificationOfSuspiciousActivity;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamMsgBase.CMsgNotificationOfSuspiciousActivity.MultipleGameInstances
 */
class MultipleGameInstances extends \Protobuf\AbstractMessage
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
     * app_instance_count optional uint32 = 1
     *
     * @var int
     */
    protected $app_instance_count = null;

    /**
     * other_steamids repeated fixed64 = 2
     *
     * @var \Protobuf\Collection
     */
    protected $other_steamids = null;

    /**
     * Check if 'app_instance_count' has a value
     *
     * @return bool
     */
    public function hasAppInstanceCount()
    {
        return $this->app_instance_count !== null;
    }

    /**
     * Get 'app_instance_count' value
     *
     * @return int
     */
    public function getAppInstanceCount()
    {
        return $this->app_instance_count;
    }

    /**
     * Set 'app_instance_count' value
     *
     * @param int $value
     */
    public function setAppInstanceCount($value = null)
    {
        $this->app_instance_count = $value;
    }

    /**
     * Check if 'other_steamids' has a value
     *
     * @return bool
     */
    public function hasOtherSteamidsList()
    {
        return $this->other_steamids !== null;
    }

    /**
     * Get 'other_steamids' value
     *
     * @return \Protobuf\Collection
     */
    public function getOtherSteamidsList()
    {
        return $this->other_steamids;
    }

    /**
     * Set 'other_steamids' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setOtherSteamidsList(\Protobuf\Collection $value = null)
    {
        $this->other_steamids = $value;
    }

    /**
     * Add a new element to 'other_steamids'
     *
     * @param int $value
     */
    public function addOtherSteamids($value)
    {
        if ($this->other_steamids === null) {
            $this->other_steamids = new \Protobuf\ScalarCollection();
        }

        $this->other_steamids->add($value);
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
            'app_instance_count' => null,
            'other_steamids' => []
        ], $values);

        $message->setAppInstanceCount($values['app_instance_count']);

        foreach ($values['other_steamids'] as $item) {
            $message->addOtherSteamids($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'MultipleGameInstances',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'app_instance_count',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'other_steamids',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->app_instance_count !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->app_instance_count);
        }

        if ($this->other_steamids !== null) {
            foreach ($this->other_steamids as $val) {
                $writer->writeVarint($stream, 17);
                $writer->writeFixed64($stream, $val);
            }
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

                $this->app_instance_count = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                if ($this->other_steamids === null) {
                    $this->other_steamids = new \Protobuf\ScalarCollection();
                }

                $this->other_steamids->add($reader->readFixed64($stream));

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

        if ($this->app_instance_count !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->app_instance_count);
        }

        if ($this->other_steamids !== null) {
            foreach ($this->other_steamids as $val) {
                $size += 1;
                $size += 8;
            }
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
        $this->app_instance_count = null;
        $this->other_steamids = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgNotificationOfSuspiciousActivity\MultipleGameInstances) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->app_instance_count = ($message->app_instance_count !== null) ? $message->app_instance_count : $this->app_instance_count;
        $this->other_steamids = ($message->other_steamids !== null) ? $message->other_steamids : $this->other_steamids;
    }


}

