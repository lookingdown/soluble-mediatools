<?php

declare(strict_types=1);

namespace Soluble\MediaTools\Video\Filter;

use Soluble\MediaTools\Video\Filter\Type\FFMpegVideoFilterInterface;
use Soluble\MediaTools\Video\Filter\Type\VideoDenoiserInterface;

class SobelVideoFilter implements FFMpegVideoFilterInterface, VideoDenoiserInterface
{
    public function getFFmpegCLIValue(): string
    {
        return 'frei0r=sobel';
    }
}