<?php

include_once "SocialMedia.php";

class WhatsApp implements SocialMedia {
    private VidioGroupManager $vidioGroupManager;

    public function __construct(VidioGroupManager $vidioGroupManager) {
        $this->vidioGroupManager = $vidioGroupManager;
    }

    public function chat(): void {
        echo "Chatting on WhatsApp\n";
    }

    public function sendPhotosAndVideos(): void {
        echo "Sending photos and videos\n";
    }

    public function callGroupVidio(): void {
        $this->vidioGroupManager->callGroupVidio();
    }
}

?>
