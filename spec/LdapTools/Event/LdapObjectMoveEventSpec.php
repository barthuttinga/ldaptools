<?php
/**
 * This file is part of the LdapTools package.
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LdapTools\Event;

use LdapTools\Object\LdapObject;
use PhpSpec\ObjectBehavior;

class LdapObjectMoveEventSpec extends ObjectBehavior
{
    public function let()
    {
        $container = 'ou=people,dc=foo,dc=bar';
        $ldapObject = new LdapObject(['foo' => 'bar'], ['user'], 'user', 'user');
        $this->beConstructedWith('foo', $ldapObject, $container);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('LdapTools\Event\LdapObjectMoveEvent');
    }

    public function it_should_get_the_container()
    {
        $this->getContainer()->shouldBeEqualTo('ou=people,dc=foo,dc=bar');
    }

    public function it_should_extend_the_LdapObjectEvent()
    {
        $this->shouldHaveType('\LdapTools\Event\LdapObjectEvent');
    }

    public function it_should_get_the_event_name()
    {
        $this->getName()->shouldBeEqualTo('foo');
    }

    public function it_should_get_the_ldap_object_for_the_event()
    {
        $this->getLdapObject()->shouldReturnAnInstanceOf('LdapTools\Object\LdapObject');
    }

    public function it_should_set_the_container()
    {
        $container = 'ou=stuff,dc=example,dc=local';
        $this->setContainer($container);
        $this->getContainer()->shouldBeEqualTo($container);
    }
}
