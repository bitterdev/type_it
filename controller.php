<?php

namespace Concrete\Package\TypeIt;

use Bitter\TypeIt\Provider\ServiceProvider;
use Concrete\Core\Entity\Package as PackageEntity;
use Concrete\Core\Package\Package;

class Controller extends Package
{
    protected string $pkgHandle = 'type_it';
    protected string $pkgVersion = '0.0.3';
    protected $appVersionRequired = '9.0.0';
    protected $pkgAutoloaderRegistries = [
        'src/Bitter/TypeIt' => 'Bitter\TypeIt',
    ];

    public function getPackageDescription(): string
    {
        return t('TypeIt is a Concrete CMS block type that lets you effortlessly create animated typing effects using the powerful TypeIt JavaScript library.');
    }

    public function getPackageName(): string
    {
        return t('TypeIt ');
    }

    public function on_start()
    {
        /** @var ServiceProvider $serviceProvider */
        /** @noinspection PhpUnhandledExceptionInspection */
        $serviceProvider = $this->app->make(ServiceProvider::class);
        $serviceProvider->register();
    }

    public function install(): PackageEntity
    {
        $pkg = parent::install();
        $this->installContentFile("data.xml");
        return $pkg;
    }

    public function upgrade()
    {
        parent::upgrade();
        $this->installContentFile("data.xml");
    }
}