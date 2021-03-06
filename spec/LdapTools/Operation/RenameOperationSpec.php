<?php
/**
 * This file is part of the LdapTools package.
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LdapTools\Operation;

use LdapTools\Connection\LdapControl;
use LdapTools\Operation\AddOperation;
use LdapTools\Operation\DeleteOperation;
use LdapTools\Operation\RenameOperation;
use PhpSpec\ObjectBehavior;

class RenameOperationSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('foo');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('LdapTools\Operation\RenameOperation');
    }

    public function it_should_implement_LdapOperationInterface()
    {
        $this->shouldImplement('\LdapTools\Operation\LdapOperationInterface');
    }

    public function it_should_set_the_dn_for_the_rename_operation()
    {
        $dn = 'cn=foo,dc=example,dc=local';
        $this->setDn($dn);
        $this->getDn()->shouldBeEqualTo($dn);
    }

    public function it_should_set_the_new_rdn_for_the_rename_operation()
    {
        $rdn = 'cn=foo';
        $this->setNewRdn($rdn);
        $this->getNewRdn()->shouldBeEqualTo($rdn);
    }

    public function it_should_set_whether_to_delete_the_old_rdn_for_the_rename_operation()
    {
        $this->setDeleteOldRdn(false);
        $this->getDeleteOldRdn()->shouldBeEqualTo(false);
    }

    public function it_should_set_the_new_location_for_the_object_for_the_rename_operation()
    {
        $dn = 'ou=foo,dc=foo,dc=bar';
        $this->setNewLocation($dn);
        $this->getNewLocation()->shouldBeEqualTo($dn);
    }

    public function it_should_chain_the_setters()
    {
        $this->setDn('foo')->shouldReturnAnInstanceOf('\LdapTools\Operation\RenameOperation');
        $this->setNewRdn('foo')->shouldReturnAnInstanceOf('\LdapTools\Operation\RenameOperation');
        $this->setNewLocation('foo')->shouldReturnAnInstanceOf('\LdapTools\Operation\RenameOperation');
        $this->setDeleteOldRdn(false)->shouldReturnAnInstanceOf('\LdapTools\Operation\RenameOperation');
    }

    public function it_should_get_the_name_of_the_operation()
    {
        $this->getName()->shouldBeEqualTo('Rename');
    }

    public function it_should_get_the_correct_ldap_function()
    {
        $this->getLdapFunction()->shouldBeEqualTo('ldap_rename');
    }

    public function it_should_return_the_arguments_for_the_ldap_function_in_the_correct_order()
    {
        $args = [
            'cn=foo,dc=example,dc=local',
            'cn=bar',
            'ou=foobar,dc=example,dc=local',
            true,
        ];
        $this->setDn($args[0]);
        $this->setNewRdn($args[1]);
        $this->setNewLocation($args[2]);
        $this->setDeleteOldRdn($args[3]);
        $this->getArguments()->shouldBeEqualTo($args);
    }

    public function it_should_get_a_log_formatted_array()
    {
        $this->getLogArray()->shouldBeArray();
        $this->getLogArray()->shouldHaveKey('New RDN');
        $this->getLogArray()->shouldHaveKey('New Location');
        $this->getLogArray()->shouldHaveKey('Delete Old RDN');
        $this->getLogArray()->shouldHaveKey('DN');
        $this->getLogArray()->shouldHaveKey('Server');
        $this->getLogArray()->shouldHaveKey('Controls');
    }

    public function it_should_add_pre_operations()
    {
        $operation1 = new AddOperation('cn=foo,dc=bar,dc=foo');
        $operation2 = new DeleteOperation('cn=foo,dc=bar,dc=foo');
        $operation3 = new RenameOperation('cn=foo,dc=bar,dc=foo');

        $this->addPreOperation($operation1);
        $this->addPreOperation($operation2, $operation3);
        $this->getPreOperations()->shouldBeEqualTo([$operation1, $operation2, $operation3]);
    }

    public function it_should_add_post_operations()
    {
        $operation1 = new AddOperation('cn=foo,dc=bar,dc=foo');
        $operation2 = new DeleteOperation('cn=foo,dc=bar,dc=foo');
        $operation3 = new RenameOperation('cn=foo,dc=bar,dc=foo');

        $this->addPostOperation($operation1);
        $this->addPostOperation($operation2, $operation3);
        $this->getPostOperations()->shouldBeEqualTo([$operation1, $operation2, $operation3]);
    }

    public function it_should_add_ldap_controls()
    {
        $control1 = new LdapControl('foo', true);
        $control2 = new LdapControl('bar');

        $this->addControl($control1, $control2);
        $this->getControls()->shouldBeEqualTo([$control1, $control2]);
    }
}
