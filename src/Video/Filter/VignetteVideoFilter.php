<?php
 
declare(strict_types=1);

namespace Soluble\MediaTools\Video\Filter;

use Soluble\MediaTools\Video\Filter\Type\FFMpegVideoFilterInterface;
use Soluble\MediaTools\Video\Filter\Type\VideoDenoiserInterface;

class VignetteVideoFilter implements FFMpegVideoFilterInterface, VideoDenoiserInterface
{
    public function getFFmpegCLIValue(): string
    {
        return 'frei0r=vignette:".6|0.2|0.5"';
    }
}
