<?php

require __DIR__ . '/../vendor/autoload.php';

class InstagramScrap
{
    private $instagram;

    private $account;

    /**
     * InstagramScrapping constructor.
     * @param string $account
     */
    public function __construct(string $account)
    {
        $this->instagram = new \InstagramScraper\Instagram();
        $this->account = $account;
    }

    /**
     * @param int $limit
     * @return \InstagramScraper\Model\Media[]
     * @throws \InstagramScraper\Exception\InstagramException
     * @throws \InstagramScraper\Exception\InstagramNotFoundException
     */
    public function getMedias(int $limit = 16) : array
    {   $mediasArray = [];
        $medias = $this->instagram->getMedias($this->account,$limit);

        foreach($medias as $media) {
            $mediasArray[] = [
                'id' => $media->getId(),
                'link' => $media->getLink(),
                'type' => $media->getType(),
                'video' => $media->getVideoLowResolutionUrl(),
                'image' => $media->getImageThumbnailUrl(),
                'title' => $media->getCaption(),
                'comments' => $media->getCommentsCount(),
                'likes' => $media->getLikesCount()
            ];
        }

        return $mediasArray;
    }

}
