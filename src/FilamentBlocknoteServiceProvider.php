<?php

namespace Jubeki\FilamentBlocknote;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Jubeki\FilamentBlocknote\Commands\FilamentBlocknoteCommand;
use Jubeki\FilamentBlocknote\Testing\TestsFilamentBlocknote;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentBlocknoteServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-blocknote';

    public static string $viewNamespace = 'filament-blocknote';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)->hasViews(static::$viewNamespace);
    }

    public function packageRegistered(): void
    {
    }

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            'jubeki/filament-blocknote'
        );
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        $manifest = json_decode(file_get_contents(__DIR__ . '/../resources/dist/manifest.json'), true);

        return [
            Css::make(
                'filament-blocknote-styles',
                $this->distFromManifest($manifest, 'resources/js/main.css')
            ),
            Js::make(
                'filament-blocknote-scripts',
                $this->distFromManifest($manifest, 'resources/js/main.jsx')
            ),
        ];
    }

    protected function distFromManifest(array $manifest, string $key): string
    {
        return __DIR__ . '/../resources/dist/' . $manifest[$key]['file'];
    }


}
