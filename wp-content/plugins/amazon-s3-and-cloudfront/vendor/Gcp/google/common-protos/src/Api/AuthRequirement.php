<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/auth.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Api;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * User-defined authentication requirements, including support for
 * [JSON Web Token
 * (JWT)](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32).
 *
 * Generated from protobuf message <code>google.api.AuthRequirement</code>
 */
class AuthRequirement extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * [id][google.api.AuthProvider.id] from authentication provider.
     * Example:
     *     provider_id: bookstore_auth
     *
     * Generated from protobuf field <code>string provider_id = 1;</code>
     */
    protected $provider_id = '';
    /**
     * NOTE: This will be deprecated soon, once AuthProvider.audiences is
     * implemented and accepted in all the runtime components.
     * The list of JWT
     * [audiences](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.3).
     * that are allowed to access. A JWT containing any of these audiences will
     * be accepted. When this setting is absent, only JWTs with audience
     * "https://[Service_name][google.api.Service.name]/[API_name][google.protobuf.Api.name]"
     * will be accepted. For example, if no audiences are in the setting,
     * LibraryService API will only accept JWTs with the following audience
     * "https://library-example.googleapis.com/google.example.library.v1.LibraryService".
     * Example:
     *     audiences: bookstore_android.apps.googleusercontent.com,
     *                bookstore_web.apps.googleusercontent.com
     *
     * Generated from protobuf field <code>string audiences = 2;</code>
     */
    protected $audiences = '';
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $provider_id
     *           [id][google.api.AuthProvider.id] from authentication provider.
     *           Example:
     *               provider_id: bookstore_auth
     *     @type string $audiences
     *           NOTE: This will be deprecated soon, once AuthProvider.audiences is
     *           implemented and accepted in all the runtime components.
     *           The list of JWT
     *           [audiences](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.3).
     *           that are allowed to access. A JWT containing any of these audiences will
     *           be accepted. When this setting is absent, only JWTs with audience
     *           "https://[Service_name][google.api.Service.name]/[API_name][google.protobuf.Api.name]"
     *           will be accepted. For example, if no audiences are in the setting,
     *           LibraryService API will only accept JWTs with the following audience
     *           "https://library-example.googleapis.com/google.example.library.v1.LibraryService".
     *           Example:
     *               audiences: bookstore_android.apps.googleusercontent.com,
     *                          bookstore_web.apps.googleusercontent.com
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Auth::initOnce();
        parent::__construct($data);
    }
    /**
     * [id][google.api.AuthProvider.id] from authentication provider.
     * Example:
     *     provider_id: bookstore_auth
     *
     * Generated from protobuf field <code>string provider_id = 1;</code>
     * @return string
     */
    public function getProviderId()
    {
        return $this->provider_id;
    }
    /**
     * [id][google.api.AuthProvider.id] from authentication provider.
     * Example:
     *     provider_id: bookstore_auth
     *
     * Generated from protobuf field <code>string provider_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProviderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->provider_id = $var;
        return $this;
    }
    /**
     * NOTE: This will be deprecated soon, once AuthProvider.audiences is
     * implemented and accepted in all the runtime components.
     * The list of JWT
     * [audiences](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.3).
     * that are allowed to access. A JWT containing any of these audiences will
     * be accepted. When this setting is absent, only JWTs with audience
     * "https://[Service_name][google.api.Service.name]/[API_name][google.protobuf.Api.name]"
     * will be accepted. For example, if no audiences are in the setting,
     * LibraryService API will only accept JWTs with the following audience
     * "https://library-example.googleapis.com/google.example.library.v1.LibraryService".
     * Example:
     *     audiences: bookstore_android.apps.googleusercontent.com,
     *                bookstore_web.apps.googleusercontent.com
     *
     * Generated from protobuf field <code>string audiences = 2;</code>
     * @return string
     */
    public function getAudiences()
    {
        return $this->audiences;
    }
    /**
     * NOTE: This will be deprecated soon, once AuthProvider.audiences is
     * implemented and accepted in all the runtime components.
     * The list of JWT
     * [audiences](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.3).
     * that are allowed to access. A JWT containing any of these audiences will
     * be accepted. When this setting is absent, only JWTs with audience
     * "https://[Service_name][google.api.Service.name]/[API_name][google.protobuf.Api.name]"
     * will be accepted. For example, if no audiences are in the setting,
     * LibraryService API will only accept JWTs with the following audience
     * "https://library-example.googleapis.com/google.example.library.v1.LibraryService".
     * Example:
     *     audiences: bookstore_android.apps.googleusercontent.com,
     *                bookstore_web.apps.googleusercontent.com
     *
     * Generated from protobuf field <code>string audiences = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAudiences($var)
    {
        GPBUtil::checkString($var, True);
        $this->audiences = $var;
        return $this;
    }
}
