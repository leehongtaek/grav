<?php
namespace Grav\Common\Processors;

class RenderProcessor extends ProcessorBase implements ProcessorInterface {

    public $id = 'render';
    public $title = 'Render';

    public function process($debugger) {
      $this->container->output = $this->container['output'];
      $this->container->fireEvent('onOutputGenerated');
    }

}
