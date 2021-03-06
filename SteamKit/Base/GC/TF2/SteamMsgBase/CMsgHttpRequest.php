<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/steammessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgBase;

/**
 * Protobuf message : SteamKit.Base.GC.TF2.SteamMsgBase.CMsgHttpRequest
 */
class CMsgHttpRequest extends \Protobuf\AbstractMessage
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
     * request_method optional uint32 = 1
     *
     * @var int
     */
    protected $request_method = null;

    /**
     * hostname optional string = 2
     *
     * @var string
     */
    protected $hostname = null;

    /**
     * url optional string = 3
     *
     * @var string
     */
    protected $url = null;

    /**
     * headers repeated message = 4
     *
     * @var \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\RequestHeader>
     */
    protected $headers = null;

    /**
     * get_params repeated message = 5
     *
     * @var \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\QueryParam>
     */
    protected $get_params = null;

    /**
     * post_params repeated message = 6
     *
     * @var \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\QueryParam>
     */
    protected $post_params = null;

    /**
     * body optional bytes = 7
     *
     * @var \Protobuf\Stream
     */
    protected $body = null;

    /**
     * absolute_timeout optional uint32 = 8
     *
     * @var int
     */
    protected $absolute_timeout = null;

    /**
     * Check if 'request_method' has a value
     *
     * @return bool
     */
    public function hasRequestMethod()
    {
        return $this->request_method !== null;
    }

    /**
     * Get 'request_method' value
     *
     * @return int
     */
    public function getRequestMethod()
    {
        return $this->request_method;
    }

    /**
     * Set 'request_method' value
     *
     * @param int $value
     */
    public function setRequestMethod($value = null)
    {
        $this->request_method = $value;
    }

    /**
     * Check if 'hostname' has a value
     *
     * @return bool
     */
    public function hasHostname()
    {
        return $this->hostname !== null;
    }

    /**
     * Get 'hostname' value
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set 'hostname' value
     *
     * @param string $value
     */
    public function setHostname($value = null)
    {
        $this->hostname = $value;
    }

    /**
     * Check if 'url' has a value
     *
     * @return bool
     */
    public function hasUrl()
    {
        return $this->url !== null;
    }

    /**
     * Get 'url' value
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set 'url' value
     *
     * @param string $value
     */
    public function setUrl($value = null)
    {
        $this->url = $value;
    }

    /**
     * Check if 'headers' has a value
     *
     * @return bool
     */
    public function hasHeadersList()
    {
        return $this->headers !== null;
    }

    /**
     * Get 'headers' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\RequestHeader>
     */
    public function getHeadersList()
    {
        return $this->headers;
    }

    /**
     * Set 'headers' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\RequestHeader> $value
     */
    public function setHeadersList(\Protobuf\Collection $value = null)
    {
        $this->headers = $value;
    }

    /**
     * Add a new element to 'headers'
     *
     * @param \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\RequestHeader $value
     */
    public function addHeaders(\SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\RequestHeader $value)
    {
        if ($this->headers === null) {
            $this->headers = new \Protobuf\MessageCollection();
        }

        $this->headers->add($value);
    }

    /**
     * Check if 'get_params' has a value
     *
     * @return bool
     */
    public function hasGetParamsList()
    {
        return $this->get_params !== null;
    }

    /**
     * Get 'get_params' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\QueryParam>
     */
    public function getGetParamsList()
    {
        return $this->get_params;
    }

    /**
     * Set 'get_params' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\QueryParam> $value
     */
    public function setGetParamsList(\Protobuf\Collection $value = null)
    {
        $this->get_params = $value;
    }

    /**
     * Add a new element to 'get_params'
     *
     * @param \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\QueryParam $value
     */
    public function addGetParams(\SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\QueryParam $value)
    {
        if ($this->get_params === null) {
            $this->get_params = new \Protobuf\MessageCollection();
        }

        $this->get_params->add($value);
    }

    /**
     * Check if 'post_params' has a value
     *
     * @return bool
     */
    public function hasPostParamsList()
    {
        return $this->post_params !== null;
    }

    /**
     * Get 'post_params' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\QueryParam>
     */
    public function getPostParamsList()
    {
        return $this->post_params;
    }

    /**
     * Set 'post_params' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\QueryParam> $value
     */
    public function setPostParamsList(\Protobuf\Collection $value = null)
    {
        $this->post_params = $value;
    }

    /**
     * Add a new element to 'post_params'
     *
     * @param \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\QueryParam $value
     */
    public function addPostParams(\SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\QueryParam $value)
    {
        if ($this->post_params === null) {
            $this->post_params = new \Protobuf\MessageCollection();
        }

        $this->post_params->add($value);
    }

    /**
     * Check if 'body' has a value
     *
     * @return bool
     */
    public function hasBody()
    {
        return $this->body !== null;
    }

    /**
     * Get 'body' value
     *
     * @return \Protobuf\Stream
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set 'body' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setBody($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->body = $value;
    }

    /**
     * Check if 'absolute_timeout' has a value
     *
     * @return bool
     */
    public function hasAbsoluteTimeout()
    {
        return $this->absolute_timeout !== null;
    }

    /**
     * Get 'absolute_timeout' value
     *
     * @return int
     */
    public function getAbsoluteTimeout()
    {
        return $this->absolute_timeout;
    }

    /**
     * Set 'absolute_timeout' value
     *
     * @param int $value
     */
    public function setAbsoluteTimeout($value = null)
    {
        $this->absolute_timeout = $value;
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
            'request_method' => null,
            'hostname' => null,
            'url' => null,
            'headers' => [],
            'get_params' => [],
            'post_params' => [],
            'body' => null,
            'absolute_timeout' => null
        ], $values);

        $message->setRequestMethod($values['request_method']);
        $message->setHostname($values['hostname']);
        $message->setUrl($values['url']);
        $message->setBody($values['body']);
        $message->setAbsoluteTimeout($values['absolute_timeout']);

        foreach ($values['headers'] as $item) {
            $message->addHeaders($item);
        }

        foreach ($values['get_params'] as $item) {
            $message->addGetParams($item);
        }

        foreach ($values['post_params'] as $item) {
            $message->addPostParams($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgHttpRequest',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'request_method',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'hostname',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'url',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'headers',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.GC.TF2.SteamMsgBase.CMsgHttpRequest.RequestHeader'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'get_params',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.GC.TF2.SteamMsgBase.CMsgHttpRequest.QueryParam'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'post_params',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.GC.TF2.SteamMsgBase.CMsgHttpRequest.QueryParam'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'body',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'absolute_timeout',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
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

        if ($this->request_method !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->request_method);
        }

        if ($this->hostname !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->hostname);
        }

        if ($this->url !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->url);
        }

        if ($this->headers !== null) {
            foreach ($this->headers as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->get_params !== null) {
            foreach ($this->get_params as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->post_params !== null) {
            foreach ($this->post_params as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->body !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeByteStream($stream, $this->body);
        }

        if ($this->absolute_timeout !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->absolute_timeout);
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

                $this->request_method = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->hostname = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->url = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\RequestHeader();

                if ($this->headers === null) {
                    $this->headers = new \Protobuf\MessageCollection();
                }

                $this->headers->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\QueryParam();

                if ($this->get_params === null) {
                    $this->get_params = new \Protobuf\MessageCollection();
                }

                $this->get_params->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest\QueryParam();

                if ($this->post_params === null) {
                    $this->post_params = new \Protobuf\MessageCollection();
                }

                $this->post_params->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->body = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->absolute_timeout = $reader->readVarint($stream);

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

        if ($this->request_method !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->request_method);
        }

        if ($this->hostname !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->hostname);
        }

        if ($this->url !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->url);
        }

        if ($this->headers !== null) {
            foreach ($this->headers as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->get_params !== null) {
            foreach ($this->get_params as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->post_params !== null) {
            foreach ($this->post_params as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->body !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->body);
        }

        if ($this->absolute_timeout !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->absolute_timeout);
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
        $this->request_method = null;
        $this->hostname = null;
        $this->url = null;
        $this->headers = null;
        $this->get_params = null;
        $this->post_params = null;
        $this->body = null;
        $this->absolute_timeout = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgHttpRequest) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->request_method = ($message->request_method !== null) ? $message->request_method : $this->request_method;
        $this->hostname = ($message->hostname !== null) ? $message->hostname : $this->hostname;
        $this->url = ($message->url !== null) ? $message->url : $this->url;
        $this->headers = ($message->headers !== null) ? $message->headers : $this->headers;
        $this->get_params = ($message->get_params !== null) ? $message->get_params : $this->get_params;
        $this->post_params = ($message->post_params !== null) ? $message->post_params : $this->post_params;
        $this->body = ($message->body !== null) ? $message->body : $this->body;
        $this->absolute_timeout = ($message->absolute_timeout !== null) ? $message->absolute_timeout : $this->absolute_timeout;
    }


}

