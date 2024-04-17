<?php

interface SocialMedia {
    public function chat(): void;
}

class VidioGroupManager {
    public function callGroupVidio(): void {
        echo "Calling group vidio\n";
    }
}

class PostMediaManager {
    public function publishPost(): void {
        echo "Publishing post\n";
    }
}

?>
