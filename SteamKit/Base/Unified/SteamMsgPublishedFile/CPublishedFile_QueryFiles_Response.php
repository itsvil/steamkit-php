<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_publishedfile.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgPublishedFile;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgPublishedFile.CPublishedFile_QueryFiles_Response
 */
class CPublishedFile_QueryFiles_Response extends \Protobuf\AbstractMessage
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
     * total optional uint32 = 1
     *
     * @var int
     */
    protected $total = null;

    /**
     * publishedfiledetails repeated message = 2
     *
     * @var \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails>
     */
    protected $publishedfiledetails = null;

    /**
     * Check if 'total' has a value
     *
     * @return bool
     */
    public function hasTotal()
    {
        return $this->total !== null;
    }

    /**
     * Get 'total' value
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set 'total' value
     *
     * @param int $value
     */
    public function setTotal($value = null)
    {
        $this->total = $value;
    }

    /**
     * Check if 'publishedfiledetails' has a value
     *
     * @return bool
     */
    public function hasPublishedfiledetailsList()
    {
        return $this->publishedfiledetails !== null;
    }

    /**
     * Get 'publishedfiledetails' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails>
     */
    public function getPublishedfiledetailsList()
    {
        return $this->publishedfiledetails;
    }

    /**
     * Set 'publishedfiledetails' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails> $value
     */
    public function setPublishedfiledetailsList(\Protobuf\Collection $value = null)
    {
        $this->publishedfiledetails = $value;
    }

    /**
     * Add a new element to 'publishedfiledetails'
     *
     * @param \SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails $value
     */
    public function addPublishedfiledetails(\SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails $value)
    {
        if ($this->publishedfiledetails === null) {
            $this->publishedfiledetails = new \Protobuf\MessageCollection();
        }

        $this->publishedfiledetails->add($value);
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
            'total' => null,
            'publishedfiledetails' => []
        ], $values);

        $message->setTotal($values['total']);

        foreach ($values['publishedfiledetails'] as $item) {
            $message->addPublishedfiledetails($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CPublishedFile_QueryFiles_Response',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'total',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'publishedfiledetails',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.Unified.SteamMsgPublishedFile.PublishedFileDetails'
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

        if ($this->total !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->total);
        }

        if ($this->publishedfiledetails !== null) {
            foreach ($this->publishedfiledetails as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
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

                $this->total = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails();

                if ($this->publishedfiledetails === null) {
                    $this->publishedfiledetails = new \Protobuf\MessageCollection();
                }

                $this->publishedfiledetails->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->total !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->total);
        }

        if ($this->publishedfiledetails !== null) {
            foreach ($this->publishedfiledetails as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
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
        $this->total = null;
        $this->publishedfiledetails = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgPublishedFile\CPublishedFile_QueryFiles_Response) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->total = ($message->total !== null) ? $message->total : $this->total;
        $this->publishedfiledetails = ($message->publishedfiledetails !== null) ? $message->publishedfiledetails : $this->publishedfiledetails;
    }


}

