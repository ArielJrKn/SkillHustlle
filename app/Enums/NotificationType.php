<?php

namespace App\Enums;

class NotificationType
{
    const POST = 'post';
    const COMMENT = 'comment';
    const REPLY_COMMENT = 'replyComment';
    const FOLLOWER = 'followers';
    const SYSTEM = 'system';
    const LIKE_POST = 'likePost';
    const LIKE_COMMENT = 'likeComment';
}