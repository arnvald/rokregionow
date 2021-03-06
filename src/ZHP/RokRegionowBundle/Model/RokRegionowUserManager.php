<?php

namespace ZHP\RokRegionowBundle\Model;

use FOS\UserBundle\Entity\UserManager;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

class RokRegionowUserManager extends UserManager
{
    public function loadUserByUsername($username)
    {
        $user = $this->findUserByUsernameOrEmail($username);

        if (!$user) {
            throw new UsernameNotFoundException(sprintf('No user with name "%s" was found.', $username));
        }

        return $user;
    }
}
