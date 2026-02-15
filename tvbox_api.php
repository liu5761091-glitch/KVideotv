<?php
header('Content-Type: application/json; charset=utf-8');

echo json_encode([
    "code" => 1,
    "msg" => "ok",
    "data" => [
        "class" => [
            ["type_id" => 1, "type_name" => "电影"],
            ["type_id" => 2, "type_name" => "电视剧"],
            ["type_id" => 3, "type_name" => "综艺"],
            ["type_id" => 4, "type_name" => "动漫"]
        ],
        "list" => [
            [
                "vod_id" => "1",
                "vod_name" => "流浪地球",
                "vod_pic" => "https://picsum.photos/400/600?random=1",
                "vod_remarks" => "HD"
            ],
            [
                "vod_id" => "2",
                "vod_name" => "狂飙",
                "vod_pic" => "https://picsum.photos/400/600?random=2",
                "vod_remarks" => "40集全"
            ]
        ]
    ]
], JSON_UNESCAPED_UNICODE);
?>
