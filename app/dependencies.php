<?php

use App\Infrastrucutre\Service\GetIP;
use App\Infrastrucutre\Service\JwtManager;
use App\Core\Domain\Service\GetIPInterface;
use App\Core\Domain\Service\JwtManagerInterface;
use App\Infrastrucutre\Repository\SqlCityRepository;
use App\Infrastrucutre\Repository\SqlRoleRepository;
use App\Infrastrucutre\Repository\SqlUserRepository;
use App\Core\Domain\Repository\CityRepositoryInterface;
use App\Core\Domain\Repository\RoleRepositoryInterface;
use App\Core\Domain\Repository\UserRepositoryInterface;
use App\Infrastrucutre\Repository\SqlVillageRepository;
use App\Infrastrucutre\Repository\SqlProvinceRepository;
use App\Core\Domain\Repository\VillageRepositoryInterface;
use App\Infrastrucutre\Repository\SqlPermissionRepository;
use App\Core\Domain\Repository\ProvinceRepositoryInterface;
use App\Infrastrucutre\Repository\SqlSubdistrictRepository;
use App\Core\Domain\Repository\PermissionRepositoryInterface;
use App\Infrastrucutre\Repository\SqlPasswordResetRepository;
use App\Core\Domain\Repository\SubdistrictRepositoryInterface;
use App\Core\Domain\Repository\PasswordResetRepositoryInterface;
use App\Infrastrucutre\Repository\SqlRoleHasPermissionRepository;
use App\Core\Domain\Repository\RoleHasPermissionRepositoryInterface;
use App\Core\Domain\Repository\KaryaRepositoryInterface;
use App\Core\Domain\Repository\KaryaTagRepositoryInterface;
use App\Core\Domain\Repository\SenimanRepositoryInterface;
use App\Core\Domain\Repository\TagRepositoryInterface;
use App\Infrastrucutre\Repository\SqlKaryaRepository;
use App\Infrastrucutre\Repository\SqlKaryaTagRepository;
use App\Infrastrucutre\Repository\SqlSenimanRepository;
use App\Infrastrucutre\Repository\SqlTagRepository;

/** @var Application $app */

$app->singleton(UserRepositoryInterface::class, SqlUserRepository::class);
$app->singleton(ProvinceRepositoryInterface::class, SqlProvinceRepository::class);
$app->singleton(CityRepositoryInterface::class, SqlCityRepository::class);
$app->singleton(SubdistrictRepositoryInterface::class, SqlSubdistrictRepository::class);
$app->singleton(VillageRepositoryInterface::class, SqlVillageRepository::class);
$app->singleton(RoleRepositoryInterface::class, SqlRoleRepository::class);
$app->singleton(PermissionRepositoryInterface::class, SqlPermissionRepository::class);
$app->singleton(RoleHasPermissionRepositoryInterface::class, SqlRoleHasPermissionRepository::class);
$app->singleton(JwtManagerInterface::class, JwtManager::class);
$app->singleton(GetIPInterface::class, GetIP::class);
$app->singleton(PasswordResetRepositoryInterface::class, SqlPasswordResetRepository::class);
$app->singleton(SenimanRepositoryInterface::class, SqlSenimanRepository::class);
$app->singleton(KaryaRepositoryInterface::class, SqlKaryaRepository::class);
$app->singleton(TagRepositoryInterface::class, SqlTagRepository::class);
$app->singleton(KaryaTagRepositoryInterface::class, SqlKaryaTagRepository::class);
