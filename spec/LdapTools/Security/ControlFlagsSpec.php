<?php
/**
 * This file is part of the LdapTools package.
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LdapTools\Security;

use LdapTools\Security\ControlFlags;
use PhpSpec\ObjectBehavior;

class ControlFlagsSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(32769);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(ControlFlags::class);
    }

    public function it_should_extend_Flags()
    {
        $this->beAnInstanceOf('LdapTools\Security\Flags');
    }

    public function it_should_get_the_short_names_of_the_flags()
    {
        $this->getShortNames()->shouldBeEqualTo(['SR', 'OD']);
    }

    public function it_should_have_a_string_representation_for_SDDL()
    {
        $this->__toString()->shouldBeEqualTo('SROD');
    }
}
