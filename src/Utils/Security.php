<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Utils;

use ReflectionProperty;

class Security
{
    /**
     * @param mixed $security
     * @return array<string, array<string, string>>
     */
    public function parseSecurity(mixed $security): array
    {
        $clientOptions = [
            'headers' => [],
            'query' => [],
        ];

        foreach ($security as $field => $value) {
            if ($value === null) {
                continue;
            }

            $metadata = $this->parseSecurityMetadata(new ReflectionProperty(get_class($security), $field));
            if ($metadata === null) {
                continue;
            }

            if ($metadata->option) {
                $clientOptions = array_merge_recursive($clientOptions, $this->parseSecurityOption($value));
                return $clientOptions;
            } else if ($metadata->scheme) {
                // Special case for basic auth which could be a flattened struct
                if ($metadata->subtype === 'basic' && gettype($value) !== 'object') {
                    $clientOptions = array_merge_recursive($clientOptions, $this->parseSecurityScheme($security, $metadata));
                    return $clientOptions;
                } else {
                    $clientOptions = array_merge_recursive($clientOptions, $this->parseSecurityScheme($value, $metadata));
                }
            }
        }

        return $clientOptions;
    }

    /**
     * @param mixed $option
     * @return array<string, array<string, string>>
     */
    private function parseSecurityOption(mixed $option): array
    {
        $clientOptions = [
            'headers' => [],
            'query' => [],
        ];

        foreach ($option as $field => $value) {
            if ($value === null) {
                continue;
            }

            $metadata = $this->parseSecurityMetadata(new ReflectionProperty(get_class($option), $field));
            if ($metadata === null) {
                continue;
            }

            if ($metadata->scheme) {
                $clientOptions = array_merge_recursive($clientOptions, $this->parseSecurityScheme($value, $metadata));
            }
        }

        return $clientOptions;
    }

    /**
     * @param mixed $scheme
     * @param SecurityMetadata $metadata
     * @return array<string, array<string, string>>
     */
    private function parseSecurityScheme(mixed $scheme, SecurityMetadata $metadata): array
    {
        $clientOptions = [
            'headers' => [],
            'query' => [],
        ];

        if (gettype($scheme) === 'object') {
            if ($metadata->type === 'http' && $metadata->subtype === 'basic') {
                return $this->parseBasicAuthScheme($scheme);
            }

            foreach ($scheme as $field => $value) { /** @phpstan-ignore-line */
                if ($value === null) {
                    continue;
                }

                $fieldMetadata = $this->parseSecurityMetadata(new ReflectionProperty(get_class($scheme), $field));
                if ($fieldMetadata === null || empty($fieldMetadata->name)) {
                    continue;
                }

                $clientOptions = array_merge_recursive($clientOptions, $this->parseSecuritySchemeValue($value, $metadata, $fieldMetadata));
            }
        } else {
            $clientOptions = array_merge_recursive($clientOptions, $this->parseSecuritySchemeValue($scheme, $metadata, $metadata));
        }

        return $clientOptions;
    }

    /**
     * @param mixed $value
     * @param SecurityMetadata $metadata
     * @param SecurityMetadata $fieldMetadata
     * @return array<string, array<string, string>>
     */
    private function parseSecuritySchemeValue(mixed $value, SecurityMetadata $metadata, SecurityMetadata $fieldMetadata): array
    {
        $clientOptions = [
            'headers' => [],
            'query' => [],
        ];

        switch ($metadata->type) {
            case 'apiKey':
                switch ($metadata->subtype) {
                    case 'header':
                        $clientOptions['headers'][$fieldMetadata->name] = $value;
                        break;
                    case 'query':
                        $clientOptions['query'][$fieldMetadata->name] = $value;
                        break;
                    case 'cookie':
                        $clientOptions['headers']['Cookie'] = sprintf('%s=%s', $fieldMetadata->name, $value);
                        break;
                    default:
                        throw new \Exception('Unknown apiKey security scheme subtype: ' . $metadata->subtype);
                }
                break;
            case 'openIdConnect':
                $clientOptions['headers'][$fieldMetadata->name] = $value;
                break;
            case 'oauth2':
                $clientOptions['headers'][$fieldMetadata->name] = $value;
                break;
            case 'http':
                switch ($metadata->subtype) {
                    case 'bearer':
                        $clientOptions['headers'][$fieldMetadata->name] = $value;
                        break;
                    default:
                        throw new \Exception('Unknown http security scheme subtype: ' . $metadata->subtype);
                }
            default:
                throw new \Exception('Unknown security scheme type: ' . $metadata->type);
        }

        return $clientOptions;
    }

    /**
     * @param mixed $scheme
     * @return array<string, array<string, string>>
     */
    private function parseBasicAuthScheme(mixed $scheme): array
    {
        $username = '';
        $password = '';

        foreach ($scheme as $field => $value) {
            if ($value === null) {
                continue;
            }

            $fieldMetadata = $this->parseSecurityMetadata(new ReflectionProperty(get_class($scheme), $field));
            if ($fieldMetadata === null || empty($fieldMetadata->name)) {
                continue;
            }

            switch ($fieldMetadata->name) {
                case 'username':
                    $username = $value;
                    break;
                case 'password':
                    $password = $value;
                    break;
            }
        }

        return [
            'headers' => [
                'Authorization' => sprintf('Basic %s', base64_encode(sprintf('%s:%s', $username, $password))),
            ],
            'query' => [],
        ];
    }

    private function parseSecurityMetadata(ReflectionProperty $property): SecurityMetadata | null
    {
        $metadataStr = SpeakeasyMetadata::find($property->getAttributes(SpeakeasyMetadata::class), 'security');
        if ($metadataStr === null) {
            return null;
        }

        $metadata = SecurityMetadata::parse($metadataStr);
        if ($metadata === null) {
            return null;
        }

        return $metadata;
    }
}
