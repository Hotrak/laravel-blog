<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class ServiceMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class';

     /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/service.stub';
    }

   /**
     * Get the default namespace for the class.
     *
     * @param  string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Services';
    }

    protected function buildClass($name): string
    {
        $stub = $this->files->get($this->getStub());

        return $this->replaceNamespace($stub, $name)->replaceClass(
            $this->replaceVariables($stub, $this->getNameInput()),
            $name
        );
    }

    protected function replace($stub, $old, $new): string
    {
        return str_replace(["{{ $old }}", "{{$old}}"], $new, $stub);
    }
    protected function replaceVariables($stub, $name): string
    {
        $modelPath = str_replace("/","\\", str_replace('Service', '', $name));
        $explodedModelPath = explode('\\',$modelPath);
        $model = $explodedModelPath[count($explodedModelPath)-1];

        $result = $this->replace($stub, 'modelPath', $modelPath);
        return $this->replace($result , 'model', $model);
    }
}
