<?php

use NamespacePath\UserInterface;

class ChatNotificationManager {
    function notify($message) {
        // ...
    }
}

class ChatMessageRepository {
    // ...
    public function save($message) {
        // ...
    }
}

class ChatMessage {
    private int $id;
    private int $chatId;
    private UserInterface $user;
    private string $text;
    private string $dateTime;

    // ...

    public function __construct($chatId, $user, $text) {
        $this->chatId = $chatId;
        $this->user = $user;
        $this->text = $text;
        $chatNotificationManager = new ChatNotificationManager();
        $this->dateTime = date('Y-m-d H:i:s');
        $chatNotificationManager->notify($text);
    }

    // ...
}

class Chat {
    public int $id;
    public ChatMessage $message;

    // ...

    public function addMessage($user, $text) {
        $message = new ChatMessage($this->id, $user, $text);
        $chatMessageRepository = new ChatMessageRepository();
        $chatMessageRepository->save($message);
    }
}
