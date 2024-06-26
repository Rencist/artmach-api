<?php

namespace App\Core\Domain\Repository;

use App\Core\Domain\Models\Karya\Karya;
use App\Core\Domain\Models\Karya\KaryaId;
use App\Core\Domain\Models\User\UserId;

interface KaryaRepositoryInterface
{
    public function persist(Karya $Karya): void;

    public function find(KaryaId $id): ?Karya;

    public function findAll(): array;

    public function delete(KaryaId $id): void;

    public function getAllWithPagination(int $page, int $per_page, ?string $sort, ?bool $desc, ?string $search, ?array $filter): array;

    public function constructFromRows(array $rows): array;

    public function findByUserId(UserId $user_id): array;
}
