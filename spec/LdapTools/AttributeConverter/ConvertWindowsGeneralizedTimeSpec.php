<?php
/**
 * This file is part of the LdapTools package.
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LdapTools\AttributeConverter;

use PhpSpec\ObjectBehavior;

class ConvertWindowsGeneralizedTimeSpec extends ObjectBehavior
{
    protected $time = '19920622123421.0Z';

    protected $utcTime = "Mon, 22 Jun 1992 12:34:21 UTC";

    protected $tsWithOffset = "20001231235959.0+0100";

    public function it_is_initializable()
    {
        $this->shouldHaveType('LdapTools\AttributeConverter\ConvertWindowsGeneralizedTime');
    }

    public function it_should_implement_AttributeConverterInterface()
    {
        $this->shouldImplement('\LdapTools\AttributeConverter\AttributeConverterInterface');
    }

    public function it_should_return_a_php_DateTime_object_from_ldap_generalized_time()
    {
        $this->fromLdap($this->time)->shouldHaveType('\DateTime');
    }

    public function it_should_return_a_string_timestamp_equal_to_the_php_DateTime_when_calling_toLdap()
    {
        $this->toLdap(new \DateTime($this->utcTime))->shouldBeEqualTo($this->time);
    }

    public function it_should_return_a_string_timestamp_with_offset_when_present_when_calling_toLdap()
    {
        $this->toLdap(new \DateTime('20001231235959', new \DateTimeZone('CET')))->shouldBeEqualTo($this->tsWithOffset);
    }

    public function it_should_return_a_datetime_object_equal_to_the_generalized_timestamp_when_calling_fromLdap()
    {
        $this->fromLdap($this->time)->shouldBeLike(new \DateTime('19920622123421', new \DateTimeZone('UTC')));
    }

    public function it_should_return_a_datetime_object_with_the_offset_applied_if_present_when_calling_fromLdap()
    {
        $this->fromLdap($this->tsWithOffset)->shouldBeLike(new \DateTime('20001231235959', new \DateTimeZone('CET')));
    }
}
