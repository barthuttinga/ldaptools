<?php
/**
 * This file is part of the LdapTools package.
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LdapTools\Factory;

use PhpSpec\ObjectBehavior;

class AttributeConverterFactorySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('LdapTools\Factory\AttributeConverterFactory');
    }

    public function it_should_return_ConvertEnum_when_calling_get_with_enum()
    {
        $this::get('enum')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertEnum');
    }

    public function it_should_return_ConvertBoolean_when_calling_get_with_bool()
    {
        $this::get('bool')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertBoolean');
    }

    public function it_should_return_ConvertGeneralizedTime_when_calling_get_with_generalized_time()
    {
        $this::get('generalized_time')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertGeneralizedTime');
    }

    public function it_should_return_ConvertInteger_when_calling_get_with_int()
    {
        $this::get('int')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertInteger');
    }

    public function it_should_return_ConvertWindowsGuid_when_calling_get_with_windows_guid()
    {
        $this::get('windows_guid')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertWindowsGuid');
    }

    public function it_should_return_ConvertWindowsSid_when_calling_get_with_windows_sid()
    {
        $this::get('windows_sid')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertWindowsSid');
    }

    public function it_should_return_ConvertWindowsTime_when_calling_get_with_windows_time()
    {
        $this::get('windows_time')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertWindowsTime');
    }

    public function it_should_return_ConvertWindowsGeneralizedTime_when_calling_get_with_windows_generalized_time()
    {
        $this::get('windows_generalized_time')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertWindowsGeneralizedTime');
    }

    public function it_should_return_EncodeWindowsPassword_when_calling_get_with_encode_windows_password()
    {
        $this::get('encode_windows_password')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\EncodeWindowsPassword');
    }

    public function it_should_return_ConvertPasswordMustChange_when_calling_get_with_password_must_change()
    {
        $this::get('password_must_change')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertPasswordMustChange');
    }

    public function it_should_return_ConvertFlags_when_calling_get_with_flags()
    {
        $this::get('flags')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertFlags');
    }

    public function it_should_return_ConvertNameToDn_when_calling_get_with_name_to_dn()
    {
        $this::get('value_to_dn')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertValueToDn');
    }

    public function it_should_return_ConvertExchangeProxyAddress_when_calling_get_with_exchange_proxy_address()
    {
        $this::get('exchange_proxy_address')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertExchangeProxyAddress');
    }

    public function it_should_return_ConvertLogonWorkstations_when_calling_get_with_logon_workstations()
    {
        $this::get('logon_workstations')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertLogonWorkstations');
    }

    public function it_should_return_ConvertAccountExpiration_when_calling_get_with_account_expires()
    {
        $this::get('account_expires')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertAccountExpiration');
    }

    public function it_should_return_ConvertGroupType_when_calling_get_with_group_type()
    {
        $this::get('group_type')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertGroupType');
    }

    public function it_should_return_ConvertGPLink_when_calling_get_with_gpo_link()
    {
        $this::get('gpo_link')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertGPLink');
    }

    public function it_should_return_ConvertPrimaryGroup_when_calling_get_with_primary_group()
    {
        $this::get('primary_group')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertPrimaryGroup');
    }

    public function it_should_return_ConvertGpOptions_when_calling_get_with_gpoptions()
    {
        $this::get('gpoptions')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertGpOptions');
    }

    public function it_should_return_ConvertFunctionalLevel_when_calling_get_with_functional_level()
    {
        $this::get('functional_level')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertFunctionalLevel');
    }

    public function it_should_return_ConvertADTimeSpan_when_calling_get_with_ad_time_span()
    {
        $this::get('ad_time_span')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertADTimeSpan');
    }

    public function it_should_return_a_group_membership_converter()
    {
        $this::get('group_membership')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertGroupMembership');
    }

    public function it_should_return_an_exchange_version_converter()
    {
        $this::get('exchange_version')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertExchangeVersion');
    }

    public function it_should_return_an_exchange_roles_converter()
    {
        $this::get('exchange_roles')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertExchangeRoles');
    }

    public function it_should_return_a_ldap_type_converter()
    {
        $this::get('ldap_type')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertLdapObjectType');
    }

    public function it_should_return_a_lockout_time_converter()
    {
        $this::get('lockout_time')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertLockoutTime');
    }

    public function it_should_return_an_exchange_object_version_converter()
    {
        $this::get('exchange_object_version')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertExchangeObjectVersion');
    }

    public function it_should_return_an_exchange_legacy_dn_converter()
    {
        $this::get('exchange_legacy_dn')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertExchangeLegacyDn');
    }

    public function it_should_return_an_exchange_recipient_policy_converter()
    {
        $this::get('exchange_recipient_policy')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertExchangeRecipientPolicy');
    }

    public function it_should_return_a_windows_security_converter()
    {
        $this::get('windows_security')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertWindowsSecurity');
    }

    public function it_should_return_a_windows_account_name_converter()
    {
        $this::get('windows_account_name')->shouldReturnAnInstanceOf('\LdapTools\AttributeConverter\ConvertAccountName');
    }

    public function it_should_throw_InvalidArgumentException_when_retrieving_an_invalid_converter_name()
    {
        $this->shouldThrow('\LdapTools\Exception\InvalidArgumentException')->duringGet('foo_bar');
    }

    public function it_should_throw_InvalidArgumentException_when_the_converter_name_is_already_registered()
    {
        $this->shouldThrow('\LdapTools\Exception\InvalidArgumentException')->duringRegister(
            'bool',
            '\LdapTools\AttributeConverter\ConvertBoolean'
        );
    }

    public function it_should_error_when_getting_a_converter_that_does_not_implement_AttributeConverterInterface()
    {
        $this->register('foo_bar', '\LdapTools\Configuration');
        $this->shouldThrow('\Exception')->duringGet('foo_bar');
    }
}
