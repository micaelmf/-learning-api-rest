<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'serializer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/serializer/SerializerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Serializer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/SerializerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/SerializerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/NameConverter/NameConverterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/NameConverter/AdvancedNameConverterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Factory/ClassResolverTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Loader/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Loader/LoaderChain.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
include_once $this->targetDirs[3].'/vendor/symfony/serializer/Encoder/CsvEncoder.php';

$a = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))]), NULL);

$b = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($a);

return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 1 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $b), 3 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 4 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->privates['mime_types'] ?? $this->load('getMimeTypesService.php'))), 5 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 6 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($a, $b, ($this->privates['property_accessor'] ?? $this->load('getPropertyAccessorService.php')), NULL, new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($a), NULL, [])], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
