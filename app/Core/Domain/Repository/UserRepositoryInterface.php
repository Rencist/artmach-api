<?php

namespace App\Core\Domain\Repository;

use App\Core\Domain\Models\User\User;
use App\Core\Domain\Models\User\UserId;

interface UserRepositoryInterface
{
    public function persist(User $user): void;

    public function delete(UserId $id): void;

    public function find(UserId $id): ?User;

    public function findByEmail(string $email): ?User;

    public function getWithPagination(int $page, int $per_page): array;

    public function constructFromRows(array $rows): array;
}
