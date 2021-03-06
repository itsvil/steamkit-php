<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientUFSGetFileListForAppResponse
 */
class CMsgClientUFSGetFileListForAppResponse extends \Protobuf\AbstractMessage
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
     * files repeated message = 1
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientUFSGetFileListForAppResponse\File>
     */
    protected $files = null;

    /**
     * path_prefixes repeated string = 2
     *
     * @var \Protobuf\Collection
     */
    protected $path_prefixes = null;

    /**
     * Check if 'files' has a value
     *
     * @return bool
     */
    public function hasFilesList()
    {
        return $this->files !== null;
    }

    /**
     * Get 'files' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientUFSGetFileListForAppResponse\File>
     */
    public function getFilesList()
    {
        return $this->files;
    }

    /**
     * Set 'files' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientUFSGetFileListForAppResponse\File> $value
     */
    public function setFilesList(\Protobuf\Collection $value = null)
    {
        $this->files = $value;
    }

    /**
     * Add a new element to 'files'
     *
     * @param
     * \SteamKit\Base\SteamMsgClientServer\CMsgClientUFSGetFileListForAppResponse\File
     * $value
     */
    public function addFiles(\SteamKit\Base\SteamMsgClientServer\CMsgClientUFSGetFileListForAppResponse\File $value)
    {
        if ($this->files === null) {
            $this->files = new \Protobuf\MessageCollection();
        }

        $this->files->add($value);
    }

    /**
     * Check if 'path_prefixes' has a value
     *
     * @return bool
     */
    public function hasPathPrefixesList()
    {
        return $this->path_prefixes !== null;
    }

    /**
     * Get 'path_prefixes' value
     *
     * @return \Protobuf\Collection
     */
    public function getPathPrefixesList()
    {
        return $this->path_prefixes;
    }

    /**
     * Set 'path_prefixes' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setPathPrefixesList(\Protobuf\Collection $value = null)
    {
        $this->path_prefixes = $value;
    }

    /**
     * Add a new element to 'path_prefixes'
     *
     * @param string $value
     */
    public function addPathPrefixes($value)
    {
        if ($this->path_prefixes === null) {
            $this->path_prefixes = new \Protobuf\ScalarCollection();
        }

        $this->path_prefixes->add($value);
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
            'files' => [],
            'path_prefixes' => []
        ], $values);

        foreach ($values['files'] as $item) {
            $message->addFiles($item);
        }

        foreach ($values['path_prefixes'] as $item) {
            $message->addPathPrefixes($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        $options = \google\protobuf\MessageOptions::fromArray([
        ]);


        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientUFSGetFileListForAppResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'files',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientUFSGetFileListForAppResponse.File'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'path_prefixes',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
            ],
            'options' => $options
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

        if ($this->files !== null) {
            foreach ($this->files as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->path_prefixes !== null) {
            foreach ($this->path_prefixes as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeString($stream, $val);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientUFSGetFileListForAppResponse\File();

                if ($this->files === null) {
                    $this->files = new \Protobuf\MessageCollection();
                }

                $this->files->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->path_prefixes === null) {
                    $this->path_prefixes = new \Protobuf\ScalarCollection();
                }

                $this->path_prefixes->add($reader->readString($stream));

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

        if ($this->files !== null) {
            foreach ($this->files as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->path_prefixes !== null) {
            foreach ($this->path_prefixes as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
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
        $this->files = null;
        $this->path_prefixes = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientUFSGetFileListForAppResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->files = ($message->files !== null) ? $message->files : $this->files;
        $this->path_prefixes = ($message->path_prefixes !== null) ? $message->path_prefixes : $this->path_prefixes;
    }


}

